<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>School Management System</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="/js/bootstrap.bundle.min.js"></script>

</head>

<body class="bg-light">

    <!-- Header Banner -->

    <header class="bg-white shadow">

        <div class="container-fluid p-0">

            <img src="{{ asset('img/header03.png') }}"
                 alt="School Management Banner"
                 class="w-100 d-block"
                 style="height:260px;object-fit:cover;object-position:center;">

        </div>

    </header>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

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

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="bi bi-house-fill"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/students">
                            <i class="bi bi-people-fill"></i>
                            Students
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/teachers">
                            <i class="bi bi-person-workspace"></i>
                            Teachers
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- Main Content -->

    <div class="container-fluid mt-4">

        <div class="row">

            <!-- Sidebar -->

            <div class="col-lg-3 mb-4">

                <div class="card shadow border-0">

                    <div class="card-header bg-dark text-white">

                        <i class="bi bi-grid-fill"></i>
                        Main Menu

                    </div>

                    <div class="list-group list-group-flush">

                        <a href="/"
                           class="list-group-item list-group-item-action">

                            <i class="bi bi-house-door-fill"></i>
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

            <!-- Page Content -->

            <div class="col-lg-9">

                <div class="card border-0 shadow-lg">

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

            </div>

        </div>

    </div>

    <!-- Footer -->

    <footer class="bg-dark text-white text-center py-3 mt-5">

        <p class="mb-0">

            <i class="bi bi-c-circle"></i>
            2026 School Management System | Developed by Hamza Baida

        </p>

    </footer>

</body>

</html>
