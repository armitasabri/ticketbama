@extends('layouts.admin-dashboard.master')


   

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        {{-- <h1 class="h3 display">Forms            </h1> --}}
      </header>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>افزودن عکس فرعی جدید به رویداد</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      
                    
                </div>
                
            <form method="POST" action="{{'add_sub_pic'}}/?id={{$event->id}}"   enctype="multipart/form-data">
                {{ csrf_field() }}
               

                      <div class="form-group">
                        <label>عکس جدید</label>
                        <input type="file" value="" name="file" class="form-control">
                      </div>
                      
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت " class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection