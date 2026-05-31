@extends('layout')

@section('content')

<div class="container py-4">

    <div class="text-center mb-5">

        <h1 class="fw-bold text-primary">
            <i class="bi bi-mortarboard-fill"></i>
            School Management System
        </h1>

        <p class="text-muted">
            Manage Students and Teachers Easily
        </p>

    </div>

    <div class="row g-4 justify-content-center">

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4 h-100">

                <div class="card-body text-center p-5">

                    <i class="bi bi-people-fill display-1 text-primary"></i>

                    <h3 class="mt-4">
                        Students
                    </h3>

                    <p class="text-muted">
                        Manage students, add, edit and delete records.
                    </p>

                    <a href="{{ route('students.index') }}"
                       class="btn btn-primary btn-lg">

                        <i class="bi bi-arrow-right-circle-fill"></i>
                        Open Students

                    </a>

                </div>

            </div>

        </div>

        <div class="col-md-5">

            <div class="card shadow-lg border-0 rounded-4 h-100">

                <div class="card-body text-center p-5">

                    <i class="bi bi-person-workspace display-1 text-success"></i>

                    <h3 class="mt-4">
                        Teachers
                    </h3>

                    <p class="text-muted">
                        Manage teachers, add, edit and delete records.
                    </p>

                    <a href="{{ route('teachers.index') }}"
                       class="btn btn-success btn-lg">

                        <i class="bi bi-arrow-right-circle-fill"></i>
                        Open Teachers

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
