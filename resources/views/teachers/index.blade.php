@extends('teachers.layout')

@section('content')

<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">
            👩‍🏫 Teacher List
            <span class="badge bg-secondary">{{ count($teachers) }}</span>
        </h5>

        <a href="{{ route('teachers.create') }}" class="btn btn-success btn-sm">
            <i class="bi bi-plus-circle"></i> Add Teacher
        </a>
    </div>

    <div class="card-body p-0">
        <table class="table table-hover table-bordered mb-0 align-middle">
            <thead class="table-light">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Degree</th>
                    <th>Tel</th>
                    <th width="160">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td class="text-center">{{ $teacher->tid }}</td>
                    <td>{{ $teacher->full_name }}</td>
                    <td class="text-center">
                        <span class="badge bg-info text-dark">
                            {{ ucfirst($teacher->gender) }}
                        </span>
                    </td>
                    <td>{{ $teacher->degree }}</td>
                    <td>{{ $teacher->tel }}</td>
                    <td class="text-center">
                        <a href="{{ route('teachers.edit',$teacher->tid) }}"
                            class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>


                        <form action="{{ route('teachers.destroy',$teacher->tid) }}"
                            method="POST"
                            class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Delete
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection