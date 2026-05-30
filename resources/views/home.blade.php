@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-5">
        School Management
    </h1>

    <div class="row justify-content-center">

        <!-- Students -->

        <div class="col-md-4">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body text-center p-5">

                    <img src="{{ asset('img/student.jpg') }}"
                         width="120"
                         class="mb-4">

                    <h3 class="mb-3">
                        Students
                    </h3>

                    <a href="/students"
                       class="btn btn-primary">
                        Open
                    </a>

                </div>

            </div>

        </div>

        <!-- Teachers -->

        <div class="col-md-4">

            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-body text-center p-5">

                    <img src="{{ asset('img/teacher.png') }}"
                         width="120"
                         class="mb-4">

                    <h3 class="mb-3">
                        Teachers
                    </h3>

                    <a href="/teachers"
                       class="btn btn-success">
                        Open
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>

@endsection