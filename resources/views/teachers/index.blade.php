@extends('teachers.layout')

@section('content')
<a href="{{ route('teachers.create') }}" class="btn btn-success mb-2">Add Teacher</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th><th>Name</th><th>Gender</th><th>Degree</th><th>Tel</th><th>Action</th>
    </tr>
    @foreach($teachers as $t)
    <tr>
        <td>{{ $t->tid }}</td>
        <td>{{ $t->full_name }}</td>
        <td>{{ $t->gender }}</td>
        <td>{{ $t->degree }}</td>
        <td>{{ $t->tel }}</td>
        <td>
            <a href="{{ route('teachers.show',$t->tid) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('teachers.edit',$t->tid) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('teachers.destroy',$t->tid) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $teachers->links() }}
@endsection
