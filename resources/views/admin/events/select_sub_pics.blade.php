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
              <h4>ویرایش عکس فرعی رویداد</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      
                    
                </div>
                
            <form method="POST" action="{{'take_pic'}}/?id={{$event->id}}"   enctype="multipart/form-data">
                {{ csrf_field() }}
               
                      <div class="form-group">
                        <label>انتخاب عکس</label>
                        <select name="image" id="image" class="form-control">
                            @foreach ($pics as $pic)
                        <option >{{$pic->path}}</option>
                            @endforeach
                           
                        </select>
                      </div>
                      
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="انتخاب " class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection