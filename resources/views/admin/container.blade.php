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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/css/fontawesome-all.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/adminlte.css">
    <link rel="stylesheet" href="/css/venobox.css">
    <link rel="stylesheet" href="/css/OverlayScrollbars.css">
    <link rel="stylesheet" href="/css/dropzone.css" type="text/css" />
    <script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="/js/venobox.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/dropzone.js"></script>
</head>

<body class="sidebar-mini layout-navbar-fixed">
    <div class="wrapper">
        @include('admin.menu')
        @yield('contenido')
        @include('admin.footer')
    
    </div>
    <script type="text/javascript" src="/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="/js/jquery.overlayScrollbars.js"></script>
    <script type="text/javascript" src="/js/adminlte.js"></script>
</body>
</html>