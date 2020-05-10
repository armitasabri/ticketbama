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
              <h4>ثبت مکان</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                    <i class="fa fa-location-arrow" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک مکان جدید برای رویدادت ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_venues.store')}}"   >
                {{ csrf_field() }}<div class="form-group">
                <div class="form-group">
                            <label>نام مکان</label>
                            <input type="text" name="name" placeholder="نام" value="" class="form-control">
                            @if  ($errors->any())
								            <p style="color:red">{{$errors->first('name')}}<p>
								            @endif
                </div>  

                <div class="form-group">
                        <label>آدرس مکان</label>
                        <input type="text" name="location" placeholder="آدرس" value="" class="form-control">
                        @if  ($errors->any())
                                        <p style="color:red">{{$errors->first('location')}}<p>
                                        @endif
                </div>

                <div class="form-group">
                    <label>نوع مکان</label>
                    <input type="text" name="type" placeholder="نوع" value="" class="form-control">
                    @if  ($errors->any())
                                    <p style="color:red">{{$errors->first('type')}}<p>
                                    @endif
                </div>

                <div class="form-group">
                <label>ظرفیت مکان</label>
                <input type="text" name="capacity" placeholder="ظرفیت" value="" class="form-control">
                @if  ($errors->any())
                                <p style="color:red">{{$errors->first('capacity')}}<p>
                                   @endif
                </div>
                <div class="form-group">
                    <label>تلفن</label>
                    <input type="text" name="phone" placeholder="تلفن" value="" class="form-control">
                    @if  ($errors->any())
                                    <p style="color:red">{{$errors->first('phone')}}<p>
                                    @endif
                </div>
                   
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت مکان" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection