<h1>{{ $complaint->title }}</h1>
<p>Department: {{ $complaint->department->name }}</p>
<p>Status: {{ $complaint->status }}</p>
<p>{{ $complaint->content }}</p>
<a href="{{ route('complaints.edit', $complaint) }}">Edit</a>
<form action="{{ route('complaints.destroy', $complaint) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>