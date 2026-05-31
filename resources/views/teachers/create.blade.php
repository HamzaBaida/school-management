@extends('layout')

@section('content')

<div class="container py-4">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-success">

            <h3 class="mb-0 text-white">
                <i class="bi bi-person-plus-fill"></i>
                Add New Teacher
            </h3>

        </div>

        <div class="card-body p-4">

            <form action="{{ route('teachers.store') }}" method="POST">

                @csrf

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
                            placeholder="Enter teacher name">

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
                            placeholder="teacher@email.com">

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
                            placeholder="+212 6 XX XX XX XX">

                    </div>

                    <div class="col-md-6 mb-4">

                        <label class="form-label fw-bold">
                            <i class="bi bi-book-fill"></i>
                            Speciality
                        </label>

                        <input
                            type="text"
                            name="speciality"
                            class="form-control form-control-lg"
                            placeholder="Mathematics, Physics, Computer Science...">

                    </div>

                </div>

                <hr>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('teachers.index') }}"
                       class="btn btn-secondary btn-lg">

                        <i class="bi bi-arrow-left"></i>
                        Back

                    </a>

                    <button type="submit"
                            class="btn btn-success btn-lg">

                        <i class="bi bi-check-circle-fill"></i>
                        Save Teacher

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection
