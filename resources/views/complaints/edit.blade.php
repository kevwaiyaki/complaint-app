@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Complaint</h1>
        <hr>
        <form method="POST" action="{{ route('complaints.update', $complaint->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $complaint->title) }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description', $complaint->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="department_id">Department</label>
                <select class="form-control" id="department_id" name="department_id">
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $department->id == $complaint->department_id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Complaint</button>
        </form>
    </div>
@endsection