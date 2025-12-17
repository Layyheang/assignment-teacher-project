@extends('teachers.layout')

@section('content')
<form method="POST" action="{{ route('teachers.store') }}">
    @csrf
    <input name="full_name" class="form-control mb-2" placeholder="Full Name">
    <select name="gender" class="form-control mb-2">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input name="degree" class="form-control mb-2" placeholder="Degree">
    <input name="tel" class="form-control mb-2" placeholder="Tel">
    <button class="btn btn-primary">Save</button>
</form>
@endsection