@extends('layouts.app')

@section('content')
    <h1>{{ $department->name }}</h1>
    <p>{{ $department->description }}</p>
    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-success mb-3">Edit</a>
    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mb-3">Delete</button>
    </form>
    <a href="{{ route('departments.index') }}" class="btn btn-primary">Back to Departments</a>
@endsection