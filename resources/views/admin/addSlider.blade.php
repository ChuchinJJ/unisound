@extends('admin.container')
@section('contenido')
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
  
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Orientación horizontal</h3>
              </div>
              <div class="card-body">
                <form method="POST" class="dropzone slider" id="horizontal">
                {{ csrf_field() }}
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
                  {{ csrf_field() }}
                  <div class="dz-message needsclick">Suelte el archivo aquí <br> o <br> haga click para cargar</div>
                </form>
              </div>
            </div>
          </div>
          <button type="submit" id="submit" class="btn btn-danger btn-lg btn-save" disabled>Guardar <i class="fa fa-save"></i></button>
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

  var submitBtn = document.querySelector("#submit");  
  submitBtn.addEventListener("click", function(e){
    e.preventDefault();
    e.stopPropagation();
    myDropzoneHorizontal.processQueue();
    myDropzoneVertical.processQueue();
  });
</script>
@endsection