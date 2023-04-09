@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Complaints</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->id }}</td>
                        <td>{{ $complaint->title }}</td>
                        <td>{{ $complaint->description }}</td>
                        <td>{{ $complaint->department->name }}</td>
                        <td>
                            <a href="{{ route('complaints.show', $complaint->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('complaints.edit', $complaint->id) }}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('complaints.destroy', $complaint->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this complaint?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection