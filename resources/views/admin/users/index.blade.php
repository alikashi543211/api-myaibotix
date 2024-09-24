@extends('admin.layout.layout')

@section('page-title')
    Users
@endsection

@section('css')
    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin-assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css?v={{ time() }}" rel="stylesheet"
    type="text/css" />
@endsection

@section('content')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Users</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- Start Page-content-Wrapper -->
            <div class="page-content-wrapper">
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Users</h4>
                                <p class="card-title-desc">List of users
                                </p>

                                <table class="table dataTable table-striped table-bordered dt-responsive nowrap"
                                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name ?? '' }}</td>
                                                <td>{{ $user->email ?? '' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- End Page-content -->

        </div>
        <!-- Container-Fluid -->
    </div>
    <!-- End Page-content-wrapper -->
@endsection

@section('script')
    <script src="{{ asset('admin-assets') }}/libs/datatables.net/js/jquery.dataTables.min.js?v={{ time() }}"></script>
    <script src="{{ asset('admin-assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js?v={{ time() }}"></script>
    {{--  --}}
    <script src="{{ asset('admin-assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js?v={{ time() }}"></script>
    <script src="{{ asset('admin-assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js?v={{ time() }}"></script>
    <script>
        $(document).ready(function(){
            $(".dataTable").DataTable({
                info: false,
                order: [],
                pageLength: 50,
                lengthChange: false,
            })
        });
    </script>
@endsection
