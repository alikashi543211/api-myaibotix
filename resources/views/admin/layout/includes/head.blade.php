<head>
    <meta charset="utf-8" />
    <title>@yield('page-title', 'Dashboard') | MyAIBotix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets') }}/images/favicon.ico">


    <!-- Bootstrap Css -->
    <link href="{{ asset('admin-assets') }}/css/bootstrap.min.css?v={{ time() }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin-assets') }}/css/icons.min.css?v={{ time() }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin-assets') }}/css/app.min.css?v={{ time() }}" rel="stylesheet" type="text/css" />

    @yield('css')
</head>
