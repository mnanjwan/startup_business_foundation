@extends('components.admin-header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('components.admin-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ $superAdminSession->name }}
                            </span>
                            <img class="img-profile rounded-circle"
                                src="{{ asset('adminAssets/img/undraw_profile.svg') }}">
                        </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('admin-logout')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h1 class="h3 mb-1 text-gray-800">Reports</h1>
                    <p class="mb-4">Create New reports here.</p>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Upload Annual Report</h6>
                                </div>

                                <div class="card-body">
                                    <form action="{{ route('admin.process-report') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Title</label>
                                            <br>
                                            <small style="color: red">E.g 2025 REPORT</small>
                                            <input type="text" class="form-control" name="title"
                                                id="exampleFormControlInput1" placeholder="" required>
                                                <span class="col-sm-9 text-danger">
                                                    @error('title')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Cover Photo</label>
                                            <input type="file" class="form-control" name="poster"
                                                id="exampleFormControlInput1"  placeholder="">
                                                <span class="col-sm-9 text-danger">
                                                    @error('poster')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">PDF File</label>
                                            <input type="file" class="form-control" name="file"
                                                id="exampleFormControlInput1" placeholder="">
                                                <span class="col-sm-9 text-danger">
                                                    @error('file')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                        </div>

                                        <button class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">All Reports</h6>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="" width="100%"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Title</th>
                                                    <th>PDF</th>
                                                    {{-- <th>cover</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                @foreach ($report as $report)
                                                    <tr>
                                                        <td>{{ date('Y', strtotime($report->created_at)) }}</td>
                                                        <td>{{ $report->title }}</td>
                                                        {{-- <td>{{ asset($report->file) }}</td> --}}
                                                        <td><iframe src="{{ asset($report->file) }}" frameBorder="0" scrolling="auto"
                                                            height="200%" width="100%"></iframe></td>
                                                        <td> <a href="{{ route('admin.delete-report', ['id' => $report->id]) }}"
                                                            class="btn btn-danger btn-circle">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
