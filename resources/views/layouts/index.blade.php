<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body class="hold-transition layout-top-nav">
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    
    <div class="wrapper">
        @include('layouts.menu')
        <div class="mt-5 pt-2">
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('plugins/ckeditor/ckeditor.js/')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    @yield('script')
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <script src="{{ asset('js/app2.js') }}"></script>
</body>

</html>
