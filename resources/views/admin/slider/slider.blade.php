
@extends('layouts.admin-dashboard.master')


   

@section('content')

<section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Multiple files upload            </h1>
      </header>
      <div class="card">
        <div class="card-header">
          <h4>Multiple files upload - Dropzone.js</h4>
        </div>
        <div class="card-body">  
          <p>DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>
          <p>It’s lightweight, doesn’t depend on any other library (like jQuery) and is highly customizable.</p>
          <div class="row">
            <div class="col-xl-8">
            <form  method="POST" id="dropzone" action="{{route('admin_ndropzone')}}"  class="dropzone" enctype="multipart/form-data">
              {{ method_field('POST') }} 
                @csrf
                <div class="dz-message">
                  <p>Drop files here or click to upload.</p>
                  <p><span class="note">(This is just a demo dropzone. Selected files are <STRONG>not</STRONG> actually uploaded.)</span></p>
                </div>
             
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 5000,
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script>
  @endsection