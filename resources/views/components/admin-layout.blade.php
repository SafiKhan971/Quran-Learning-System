<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{-- Datatables --}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   
    {{-- CK Editor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin/dist/img/preloader.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>
        <!-- /Preloader -->

        <!-- Right Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/dashboard" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Full Screen Mode -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- DropDown Menu -->
                <li class="nav-item">

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold" href="#"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Admin <i class="fa fa-user pl-1"></i>
                    </a>
                </li>
                </li>
            </ul>

        </nav>
        <!-- Right Navbar -->

        <!-- left Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin/dashboard" class="brand-link">
                <img src="{{ asset('assets/img/logo.png') }}" alt="MDMS Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text pl-2">MDMS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="/admin/dashboard" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <!-- Products -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-boxes"></i>
                                <p>
                                    Products
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/addproduct" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Product</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/productlist" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Product List</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- Users -->
                        <li class="nav-item">
                            <a href="/admin/users" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>

                        <!-- Blogs -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-receipt"></i>
                                <p>
                                    Blogs
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-blog" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Blog</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/blogs" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Blog List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Categories -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-copy"></i>
                                <p>
                                    Categories
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-category" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/categories" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Category List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Courses -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-chart-pie"></i>
                                <p>
                                    Courses
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-course" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Course</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/courses" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Course List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- Teachers -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Teachers
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-teacher" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Teacher</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/teachers" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Teacher List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Packages -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-dollar-sign"></i>
                                <p>
                                    Packages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-package" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Package</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/packages" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Package List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- Subscriptions -->
                        <li class="nav-item">
                            <a href="/admin/subscriptions" class="nav-link">
                                <i class="nav-icon fa fa-chart-line"></i>
                                <p>Subscriptions</p>
                            </a>
                        </li>


                        <!-- Payments -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-dollar-sign"></i>
                                <p>
                                    Payments
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/addpayment" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Payment</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/paymentlist" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Payments List</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- Expenses -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-receipt"></i>
                                <p>
                                    Expenses
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/addexpense" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Expense</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/expenselist" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Expenses List</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- Employees -->
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-user-tie"></i>
                                <p>
                                    Employees
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/add-employee" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>Add New Employee</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/employeelist" class="nav-link">
                                        <i class="fa fa-list nav-icon"></i>
                                        <p>Employees List</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->

                        <!-- Reports -->
                        <!-- <li class="nav-item">
                            <a href="/admin/reports" class="nav-link">
                                <i class="nav-icon fa fa-chart-pie"></i>
                                <p>Reports</p>
                            </a>
                        </li> -->

                        <!-- Sales -->
                        <!-- <li class="nav-item">
                            <a href="/admin/sales" class="nav-link">
                                <i class="nav-icon fa fa-chart-line"></i>
                                <p>Sales</p>
                            </a>
                        </li> -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Main Content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $page }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">{{ $page }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- content -->
            {{ $slot }}
            <!-- /.content -->
        </div>
        <!-- / Main Content-->

        <!-- Footer -->
        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2022 <a>MDMS</a>.</strong>
            All Rights Reserved.
        </footer>
        <!-- / Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".summernote").summernote({
                height: 250,
            });
            $('.dropdown-toggle').dropdown();
        });

        function beforeSubmit() {
            jQuery('.summernote').text(jQuery('.summernote').code());
        }
    </script>

    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    {{-- <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });

        
    </script> --}}
</body>

</html>
