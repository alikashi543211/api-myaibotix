<!doctype html>
<html lang="en">

    @include('admin.layout.includes.head')

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.layout.includes.header')

            @include('admin.layout.includes.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('admin.layout.includes.footer')

    </body>

</html>
