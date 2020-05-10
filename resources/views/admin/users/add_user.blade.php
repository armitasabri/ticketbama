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
              <h4>ثبت کاربر</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک کاربر جدید ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_myusers.store')}}"   enctype="multipart/form-data">
                {{ csrf_field() }}<div class="form-group">
                    <div class="form-group">
                            <label>نام کاربر</label>
                            <input type="text" name="name" placeholder="نام" value="" class="form-control">
                            @if  ($errors->any())
								            <p style="color:red">{{$errors->first('name')}}<p>
								            @endif
                    </div>  
                    <div class="form-group">
                        <label>رول</label>
                        <select id="roles" name="roles" value="" class="form-control">
                         
                            @foreach ($roles as $role)
                            <option  >{{$role->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>
                    <div class="form-group">
                        <label>ایمیل</label>
                        <input type="email" value="" name="email" placeholder="پست الکترونیک" class="form-control">
                        @if  ($errors->any())
								            <p style="color:red">{{$errors->first('email')}}<p>
								            @endif
                      </div>
                      <div class="form-group">
                        <label>آواتار</label>
                        <input type="file" value="" name="file" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>رمز عبور</label>
                        <input type="password" value="" name="password" placeholder="رمز عبور" class="form-control">
                        @if  ($errors->any())
								            <p style="color:red">{{$errors->first('password')}}<p>
								            @endif
                      </div>
                      <div class="form-group">
                        <label>شماره همراه</label>
                        <input type="text" value="" name="mobile" placeholder="موبایل" class="form-control">
                        @if  ($errors->any())
								            <p style="color:red">{{$errors->first('mobile')}}<p>
								            @endif
                      </div>  
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت کاربر" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection