@extends('teachers.layout')

@section('content')
<h3>{{ $teacher->full_name }}</h3>
<p>Gender: {{ $teacher->gender }}</p>
<p>Degree: {{ $teacher->degree }}</p>
<p>Tel: {{ $teacher->tel }}</p>
<a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
@endsection
