@extends('layouts.app')

@section('content')
    <h1>Departments</h1>
    <a href="{{ route('departments.create') }}" class="btn btn-primary mb-3">Create Department</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->description }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-success btn-sm">Edit</a>
                        <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection