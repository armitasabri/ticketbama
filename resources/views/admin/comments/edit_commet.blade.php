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
              <h4>نمایش یا عدم نمایش نظر</h4>
            </div>
            <div class="card-body">
               
                
            <form method="POST" action="{{'update_my_comment'}}/?comment={{$comment->id}}"   enctype="multipart/form-data">
                {{ csrf_field() }}<div class="form-group">
                    <div class="form-group">
                            <label>نام کاربر</label>
                    <input disabled type="text"  placeholder="" value="{{$comment->comment}}" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label>کاربر</label>
                        <input disabled type="text" placeholder="" value="{{$comment->user->name}}" class="form-control">
                    
                      </div>
                    <div class="form-group">
                        <label>رویداد</label>
                    <input disabled type="text" value="{{$comment->event->title}}"  class="form-control">
                      </div>
                      <div class="form-group">
                        <label>نام کامل</label>
                      <input disabled type="text" value="{{$comment->fullname}}" class="form-control">
                      </div>
                     
                      <div class="form-group">
                        <label style="color:#33B35A">وضعیت</label>
                        <select class="form-control" name="stat" id="">
                            @foreach ($statuses as $status)
                        <option >{{$status->name}}</option>
                            @endforeach
                         
                        </select>
                     
                      </div>  
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="تغییر وضعیت" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection