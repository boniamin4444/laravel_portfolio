<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Icons (Bootstrap Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        /* Custom CSS */
        /* Make sidebar full height and fixed */
        #sidebar {
            height: 100vh; /* Full height */
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            transition: width 0.3s ease; /* Smooth transition */
        }

        /* Sidebar item hover effect */
        #sidebar .nav-link {
            padding: 15px 20px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #sidebar .nav-link:hover {
            background-color: #0056b3; /* Darker blue on hover */
            color: white; /* Change text color on hover */
        }

        /* Active state for links */
        #sidebar .nav-link.active {
            background-color: #007bff; /* Active background color */
            color: white;
        }

        /* Ensure content is pushed to the right of the sidebar */
        main {
            margin-left: 250px; /* Sidebar width */
        }

        /* Make the main content responsive on smaller screens */
        @media (max-width: 768px) {
            #sidebar {
                width: 200px; /* Reduce sidebar width on smaller screens */
            }

            main {
                margin-left: 200px; /* Adjust main content for smaller sidebar */
            }
        }

        @media (max-width: 576px) {
            #sidebar {
                width: 0; /* Hide sidebar on very small screens */
            }

            main {
                margin-left: 0; /* No margin for main content */
            }
        }
    </style>

    @stack('styles') <!-- For additional styles for specific pages -->
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Top Navbar Section -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Admin Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar Section -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-white sidebar pt-5">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <!-- Dashboard Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="#">
                                <i class="bi bi-house-door"></i> Dashboard
                            </a>
                        </li>
                        
                        <!-- Contact Messages Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{url('/contact/index')}}">
                                <i class="bi bi-envelope"></i> Contact Messages
                            </a>
                        </li>

                        <!-- Users Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-person"></i> Users
                            </a>
                        </li>

                        <!-- Settings Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="bi bi-gear"></i> Settings
                            </a>
                        </li>

                        <!-- Blog Dropdown Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#blogSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="blogSubmenu">
                                <i class="bi bi-file-earmark-text"></i> Blog
                            </a>
                            <div class="collapse" id="blogSubmenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('blogs.create') }}">Create Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="#">View Blogs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Portfolio Dropdown Link -->
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#portfolioSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="portfolioSubmenu">
                                <i class="bi bi-file-earmark-image"></i> Portfolio
                            </a>
                            <div class="collapse" id="portfolioSubmenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('portfolio.create') }}">Create Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('portfolio.index') }}">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-white" href="#portfolioSubmenu" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="portfolioSubmenu">
                                <i class="bi bi-file-earmark-image"></i> Admin
                            </a>
                            <div class="collapse" id="portfolioSubmenu">
                                <ul class="nav flex-column ms-3">
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('admin.create') }}">Create Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="{{ route('portfolio.index') }}">View Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4" style="margin-top: 80px;"> <!-- Adjusted for navbar height -->
                <!-- Header Section -->
                <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
                    <h1 class="h3 text-primary">Admin Dashboard</h1>
                </header>

                <!-- Content Section (Dynamic Content) -->
                @yield('content')

                <!-- Example Card for Content Section -->
            </main>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (for dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    @stack('scripts') <!-- For additional scripts for specific pages -->
</body>
</html>
