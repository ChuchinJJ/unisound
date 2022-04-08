<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin" class="nav-link">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" onclick="abrirMenu()" aria-hidden="true">
          <span><?php echo e(Auth::user()->email); ?> 
            <i style="margin-left: 4px;top: 14px;position: absolute;" class="fa fa fa-angle-down"></i>
          </span>
        </a>
        <div class="menu-login" id="menu" style="right: -47px;">
          <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <a type="submit" class="block px-4 py-2 text-sm leading-5 hover:bg-gray-100"
              onclick="event.preventDefault();
              this.closest('form').submit();">
                Cerrar sesión
            </a>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <?php 
        $notificaciones = App\Models\Notificacion::all();
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link" data-bs-toggle="dropdown" aria-expanded="false" href="#">
          <i class="far fa-bell"></i>
          <?php if(count($notificaciones)>0): ?>
          <span class="badge badge-warning navbar-badge">
            <?php echo e(count($notificaciones)); ?>

          </span>
          <?php endif; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo e(count($notificaciones)); ?> Notificaciones</span>
          <div class="dropdown-divider"></div>
          <?php $__currentLoopData = $notificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                setlocale(LC_TIME, "spanish");
                $fecha_str = str_replace("/", "-", $notificacion->fecha->format('Y-m-d H:i:s'));
                $newDate = date("d-m-Y", strtotime($fecha_str));
                $fecha = strftime("%d de %B, %Y", strtotime($newDate));
                $ventas = App\Models\DetalleVenta::where("id_venta", $notificacion->id_venta)->get();
            ?>
            <a href="/admin/notificacion/<?php echo e($notificacion->id_notificacion); ?>" class="dropdown-item text-aling-center">
              <b><?php echo e($notificacion->cliente); ?></b>
               compró <?php echo e($ventas->first()->cantidad); ?> <?php echo e($ventas->first()->producto); ?>

               <?php if(count($ventas) > 1): ?>, + <?php echo e(count($ventas)-1); ?> productos  <?php endif; ?>
              <p class="text-muted text-sm"><?php echo e($fecha); ?></p>
            </a>
            <div class="dropdown-divider"></div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/img/icon.ico" alt="Unisound Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Unisound</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link" id="dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/sliders" class="nav-link" id="sliders">
              <i class="nav-icon far fa-image"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/ventas" class="nav-link" id="ventas">
              <i class="nav-icon fa fa-store"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/productos" class="nav-link" id="productos">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin" class="nav-link" id="clientes">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/cupones" class="nav-link" id="cupones">
              <i class="nav-icon fa fa-gift"></i>
              <p>
                Cupones
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    function abrirMenu(){
        var menu = document.getElementById("menu");
        if(menu.ariaHidden == "true"){
            menu.ariaHidden = "false";
            menu.style.display = "none";
        }else{
            menu.ariaHidden = "true";
            menu.style.display = "block";
        }
    }
</script><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/menu.blade.php ENDPATH**/ ?>