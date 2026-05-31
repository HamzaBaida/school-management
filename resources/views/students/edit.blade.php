@extends('layout')

@section('content')

<div class="container py-4">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-warning">

            <h3 class="mb-0 text-dark">
                <i class="bi bi-pencil-square"></i>
                Edit Student
            </h3>

        </div>

        <div class="card-body p-4">

            <form action="{{ route('students.update', $student->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-bold">
                            <i class="bi bi-person-fill"></i>
                            Full Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control form-control-lg"
                            value="{{ $student->name }}">

                    </div>

                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-bold">
                            <i class="bi bi-envelope-fill"></i>
                            Email Address
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control form-control-lg"
                            value="{{ $student->email }}">

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-bold">
                            <i class="bi bi-telephone-fill"></i>
                            Phone Number
                        </label>

                        <input
                            type="text"
                            name="phone"
                            class="form-control form-control-lg"
                            value="{{ $student->phone }}">

                    </div>

                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-bold">
                            <i class="bi bi-book-fill"></i>
                            Section
                        </label>

                        <input
                            type="text"
                            name="section"
                            class="form-control form-control-lg"
                            value="{{ $student->section }}">

                    </div>

                </div>

                <hr>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('students.index') }}"
                       class="btn btn-secondary btn-lg">

                        <i class="bi bi-arrow-left"></i>
                        Back

                    </a>

                    <button type="submit"
                            class="btn btn-warning btn-lg">

                        <i class="bi bi-check-circle-fill"></i>
                        Update Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
