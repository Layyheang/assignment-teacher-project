@extends('teachers.layout')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">➕ Add Teacher</h5>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('teachers.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input class="form-control" name="full_name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="gender" required>
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Degree</label>
                        <input class="form-control" name="degree" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tel</label>
                        <input class="form-control" name="tel" required>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-sm">
                            Back
                        </a>
                        <button class="btn btn-primary btn-sm">
                            Save
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection