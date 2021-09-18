<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Ecommerce')}}</title>
    <!-- =============================================================================================================== -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('admin_files/assets/plugins/simple-line-icons/simple-line-icons.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_files/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_files/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('admin_files/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('admin_files/assets/plugins/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_files/assets/css/material_style.css') }}">
    <!-- animation -->
    <link href="{{ asset('admin_files/assets/css/pages/animate_page.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin_files/assets/plugins/sweet-alert/sweetalert.min.css') }}">
    <!-- Theme Styles -->

    <link href="{{ asset('admin_files/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_files/assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_files/assets/css/pages/formlayout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_files/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_files/assets/css/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_files/assets/img/postsico1.png') }}" />

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_files/css/style.css') }}">
    <!-- END: Custom CSS-->
</head>
<body>
    <div id="app">

        @include('inc.navbar')
        <main class="py-4">
            @include('inc.send')
            @yield('content')
        </main>
    </div>


    <!-- start js include path -->
    <script src="{{ asset('admin_files/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_files/assets/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('admin_files/assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('admin_files/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin_files/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_files/assets/plugins/jquery-validation/js/additional-methods.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('admin_files/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('admin_files/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <!-- Common js-->
    <script src="{{ asset('admin_files/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin_files/assets/js/layout.js') }}"></script>
    <script src="{{ asset('admin_files/assets/js/theme-color.js') }}"></script>
    <!-- Material -->
    <script src="{{ asset('admin_files/assets/plugins/material/material.min.js') }}"></script>
    <!-- animation -->
    <script src="{{ asset('admin_files/assets/js/pages/ui/animations.js') }}"></script>
    <!-- end js include path -->

    @if (isset($allow_ckeditor) && $allow_ckeditor == true)
        <script src="{{ asset('admin_files/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    @endif

    @stack('scripts')

    <script src="{{ asset('admin_files/custom.js') }}" type="text/javascript"></script>


</body>
</html>
