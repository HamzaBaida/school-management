<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Management System</title>

    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body class="bg-light">

    <!-- Header -->

    <div class="container-fluid p-0">

        <img src="/img/header.jpg"
             class="img-fluid w-100"
             style="height:140px;object-fit:cover;">

    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="/">
                <i class="bi bi-mortarboard-fill"></i>
                School Management
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse"
                 id="navbarSupportedContent">

                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/students">
                            Students
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/teachers">
                            Teachers
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Main Content -->

    <div class="container mt-4">

        <div class="row">

            <!-- Sidebar -->

            <div class="col-md-3">

                <div class="card shadow border-0">

                    <div class="card-header bg-dark text-white">

                        <i class="bi bi-list"></i>
                        Main Menu

                    </div>

                    <div class="list-group list-group-flush">

                        <a href="/"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-house-fill"></i>
                            Dashboard

                        </a>

                        <a href="/students"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-people-fill"></i>
                            Students

                        </a>

                        <a href="/teachers"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-person-workspace"></i>
                            Teachers

                        </a>

                        <a href="#"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-book-fill"></i>
                            Library

                        </a>

                        <a href="#"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-gear-fill"></i>
                            Administration

                        </a>

                    </div>

                </div>

            </div>

            <!-- Content -->

            <div class="col-md-9">

                <div class="card shadow-lg border-0">

                    <div class="card-header bg-primary text-white">

                        <h4 class="mb-0">

                            <i class="bi bi-mortarboard-fill"></i>
                            School Management System

                        </h4>

                    </div>

                    <div class="card-body">

                        @yield('content')

                    </div>

                </div>

                <div class="mt-3 text-end">

                    <a href="/"
                       class="btn btn-primary">

                        <i class="bi bi-house-fill"></i>
                        Home Page

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- Footer -->

    <footer class="bg-dark text-white text-center mt-5 py-3">

        <p class="mb-0">
            © 2026 School Management System
        </p>

    </footer>

</body>

</html>
