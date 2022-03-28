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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/app2.css">
    <link rel="stylesheet" href="/css/adminlte.css">
    <link rel="stylesheet" href="/css/venobox.css">
    <link rel="stylesheet" href="/css/OverlayScrollbars.css">
    <link rel="stylesheet" href="/css/dropzone.css" type="text/css" />
    <link rel='stylesheet' id='fontello-style-css'  href='/css/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-general-css'  href='/css/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' id='musicplace-plugin-woocommerce-style-css'  href='/css/plugin.woocommerce.css' type='text/css' media='all' />
    <script type="text/javascript" src="/js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="/js/venobox.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/dropzone.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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