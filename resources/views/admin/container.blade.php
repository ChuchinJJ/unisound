<!DOCTYPE html>
<html lang="es-MX" class="scheme_original">
<head>
	<title>Unisound</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/icon.ico" sizes="32x32" />
	<link rel="icon" href="/img/icon.ico" sizes="192x192" />
	<link rel="icon" href="/img/icono-unisound.png" sizes="32x32" />
	<link rel="icon" href="/img/icono-unisound.png" sizes="192x192" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/fontawesome-all.css">
    <!-- my style -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/css/OverlayScrollbars.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.menu')
        @yield('contenido')
        @include('admin.footer')
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/js/jquery.overlayScrollbars.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.js"></script>
</body>
</html>