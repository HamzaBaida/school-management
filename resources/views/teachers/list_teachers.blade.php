@extends('layout')

@section('content')

<div class="container-fluid">

    <div class="card border-0 shadow-lg">

        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center py-3">

            <h3 class="mb-0">
                <i class="bi bi-person-workspace"></i>
                Teachers Management
            </h3>

            <a href="{{ route('teachers.create') }}"
               class="btn btn-light fw-bold">

                <i class="bi bi-person-plus-fill"></i>
                Add Teacher

            </a>

        </div>

        <div class="card-body">

            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show">

                    <i class="bi bi-check-circle-fill"></i>
                    {{ session('success') }}

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="alert">
                    </button>

                </div>

            @endif

            <div class="mb-3">

                <span class="badge bg-success fs-6">

                    <i class="bi bi-person-lines-fill"></i>
                    Total Teachers : {{ count($teachers) }}

                </span>

            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead style="background:#212529;color:white;">

                        <tr>

                            <th class="text-white">
                                <i class="bi bi-person-fill"></i>
                                Name
                            </th>

                            <th class="text-white">
                                <i class="bi bi-envelope-fill"></i>
                                Email
                            </th>

                            <th class="text-white">
                                <i class="bi bi-telephone-fill"></i>
                                Phone
                            </th>

                            <th class="text-white">
                                <i class="bi bi-book-fill"></i>
                                Speciality
                            </th>

                            <th class="text-center text-white">
                                <i class="bi bi-gear-fill"></i>
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                    @forelse($teachers as $teacher)

                        <tr>

                            <td>
                                <strong>{{ $teacher->name }}</strong>
                            </td>

                            <td>{{ $teacher->email }}</td>

                            <td>{{ $teacher->phone }}</td>

                            <td>

                                <span class="badge bg-primary fs-6">

                                    {{ $teacher->speciality }}

                                </span>

                            </td>

                            <td class="text-center">

                                <a href="{{ route('teachers.edit', $teacher->id) }}"
                                   class="btn btn-warning btn-sm px-3 me-2">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <form action="{{ route('teachers.destroy', $teacher->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm px-3"
                                            onclick="return confirm('Are you sure you want to delete {{ $teacher->name }} ?')">

                                        <i class="bi bi-trash-fill"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="text-center py-5">

                                <i class="bi bi-person-x display-4 text-secondary"></i>

                                <h5 class="mt-3 text-muted">
                                    No teachers found
                                </h5>

                                <a href="{{ route('teachers.create') }}"
                                   class="btn btn-success mt-3">

                                    <i class="bi bi-person-plus-fill"></i>
                                    Add First Teacher

                                </a>

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
