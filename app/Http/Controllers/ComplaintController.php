<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = auth()->user()->complaints()->latest()->paginate(10);

        return view('complaints.index', compact('complaints'));
    }

    public function create()
{
    $departments = Department::all();

    return view('complaints.create', compact('departments'));
}

    public function store(ComplaintRequest $request)
    {
        $complaint = auth()->user()->complaints()->create($request->validated());

        return redirect()->route('complaints.show', $complaint)->with('success', 'Complaint created successfully.');
    }

    public function show(Complaint $complaint)
    {
        abort_unless($complaint->user_id === auth()->id(), 403);

        return view('complaints.show', compact('complaint'));
    }

    public function edit(Complaint $complaint)
    {
        abort_unless($complaint->user_id === auth()->id(), 403);

        return view('complaints.edit', compact('complaint'));
    }

    public function update(ComplaintRequest $request, Complaint $complaint)
    {
        abort_unless($complaint->user_id === auth()->id(), 403);

        $complaint->update($request->validated());

        return redirect()->route('complaints.show', $complaint)->with('success', 'Complaint updated successfully.');
    }

    public function destroy(Complaint $complaint)
    {
        abort_unless($complaint->user_id === auth()->id(), 403);

        $complaint->delete();

        return redirect()->route('complaints.index')->with('success', 'Complaint deleted successfully.');
    }
}