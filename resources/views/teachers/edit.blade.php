@extends('teachers.layout')

@section('content')
<form method="POST" action="{{ route('teachers.update',$teacher->tid) }}">
@csrf @method('PUT')
<input name="full_name" value="{{ $teacher->full_name }}" class="form-control mb-2">
<input name="gender" value="{{ $teacher->gender }}" class="form-control mb-2">
<input name="degree" value="{{ $teacher->degree }}" class="form-control mb-2">
<input name="tel" value="{{ $teacher->tel }}" class="form-control mb-2">
<button class="btn btn-primary">Update</button>
</form>
@endsection
