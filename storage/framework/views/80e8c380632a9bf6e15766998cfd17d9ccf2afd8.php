
<?php $__env->startSection('contenido'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="m-3">
        <h1 class="m-0">Agregar Slider</h1>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="imagen-tab" data-bs-toggle="tab" data-bs-target="#imagen" type="button" role="tab" aria-controls="imagen" aria-selected="true">Imagenes</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Video</button>
        </li>
      </ul>
      <div class="tab-content tabs-slider" id="myTabContent">
          <div class="tab-pane fade show active" id="imagen" role="tabpanel" aria-labelledby="imagen-tab">            
            <div class="row justify-content-center">
              <div class="col-md-7">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Orientación horizontal</h3>
                  </div>
                  <div class="card-body">
                    <form method="POST" class="dropzone slider" id="horizontal">
                    <?php echo e(csrf_field()); ?>

                      <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-md-5">
                <div class="card card-default">
                  <div class="card-header">
                    <h3 class="card-title">Orientación vertical</h3>
                  </div>
                  <div class="card-body">
                    <form method="POST" class="dropzone slider" id="vertical">
                      <?php echo e(csrf_field()); ?>

                      <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                    </form>
                  </div>
                </div>
              </div>
              <button type="submit" id="submit" class="btn btn-danger btn-lg btn-save" disabled>Guardar <i class="fa fa-save"></i></button>
            </div>
          </div>
          <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <form method="POST" class="dropzone slider" id="videoSlider">
                <?php echo e(csrf_field()); ?>

                  <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                </form>
              </div>
              <button type="submit" id="submitVideo" class="btn btn-danger btn-lg btn-save" disabled>Guardar <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
  document.getElementById('sliders').classList.add('active');
  var addHorizontal = false;
  var addVertical = false;
  var estadoHorizontal = false;
  var estadoVertical = false;
  var nombreVertical = "";
  var nombreHorizontal = "";

  new Dropzone('#horizontal', {
    parallelUploads: 2,
    maxFiles: 1,
    url:"/admin/addslider",
    autoProcessQueue: false,
    addRemoveLinks: true,
    paramName: "file",
    thumbnailHeight: 120,
    thumbnailWidth: 200,
    maxFilesize: 3,
    filesizeBase: 1000,
    acceptedFiles: "image/*",
    init: function() {
      myDropzoneHorizontal = this;

      this.on("addedfile", file => {
        addHorizontal = true;
        if(addVertical){
          document.getElementById("submit").disabled = false; 
        }
      });

      this.on("removedfile", file => {
        addHorizontal = false;
        document.getElementById("submit").disabled = true;
      });

      this.on("success", function(file, response) {
        estadoHorizontal = true;
        nombreHorizontal = response;
        if(estadoVertical){
          window.location.href='/admin/addslider/'+nombreHorizontal+"/"+nombreVertical;
        }
      });
    }
  });

  new Dropzone('#vertical', {
    parallelUploads: 2,
    maxFiles: 1,
    url:"/admin/addslider",
    autoProcessQueue: false,
    addRemoveLinks: true,
    paramName: "file",
    thumbnailHeight: 200,
    thumbnailWidth: 120,
    maxFilesize: 3,
    filesizeBase: 1000,
    acceptedFiles: "image/*",
    init: function() {
      myDropzoneVertical = this;

      this.on("addedfile", file => {
        addVertical = true;
        if(addHorizontal){
          document.getElementById("submit").disabled = false;
        }
      });

      this.on("removedfile", file => {
        addVertical = false;
        document.getElementById("submit").disabled = true;
      });

      this.on("success", function(file, response) {
        estadoVertical = true;
        nombreVertical = response;
        if(estadoHorizontal){
          window.location.href='/admin/addslider/'+nombreHorizontal+"/"+nombreVertical;
        }
      });
    }
  });

  new Dropzone('#videoSlider', {
    parallelUploads: 2,
    maxFiles: 1,
    url:"/admin/addslider",
    autoProcessQueue: false,
    addRemoveLinks: true,
    paramName: "file",
    thumbnailHeight: 120,
    thumbnailWidth: 200,
    filesizeBase: 1000,
    acceptedFiles: ".mp4, .mkv, .avi, .mov, .ogg, .ogv, .webm",
    init: function() {
      myDropzoneVideo = this;

      this.on("addedfile", file => {
        document.getElementById("submitVideo").disabled = false;
      });

      this.on("removedfile", file => {
        document.getElementById("submitVideo").disabled = true;
      });

      this.on("success", function(file, response) {
        nombreVideo = response;
        window.location.href='/admin/addslider/'+nombreVideo+'/'+nombreVideo;
      });
    }
  });

  var submitBtn = document.querySelector("#submit");
  submitBtn.addEventListener("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    myDropzoneHorizontal.processQueue();
    myDropzoneVertical.processQueue();
  });

  var submitBtnVideo= document.querySelector("#submitVideo");
  submitBtnVideo.addEventListener("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    myDropzoneVideo.processQueue();
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisound\resources\views/admin/addSlider.blade.php ENDPATH**/ ?>