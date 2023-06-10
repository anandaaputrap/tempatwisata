<!DOCTYPE html>
<html lang="en">
<head>
  @include('template.admin.include.head')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            @include('template.admin.component.navbar')
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            <header class="main-nav">
                @include('template.admin.component.sidebar')
            </header>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    @include('template.admin.component.alert')
                    @yield('content')
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('template.admin.component.footer')
        </div>
    </div>
    @include('template.admin.include.javascript')
</body>

<!-- Mirrored from laravel.pixelstrap.com/viho/sample-page by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2022 01:48:34 GMT -->

</html>
