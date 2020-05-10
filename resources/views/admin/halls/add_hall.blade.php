@extends('layouts.admin-dashboard.master')


   

@section('content')

<section class="forms">
    <div class="container-fluid">
     
      <header> 
     
      </header>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>ثبت سالن</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک سالن جدید ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_halls.store')}}"   >
                {{ csrf_field() }}<div class="form-group">
                <div class="form-group">
                            <label> نام سالن</label>
                            <input type="text" name="name" placeholder="نام" value="" class="form-control">
                            @if  ($errors->any())
								            <p style="color:red">{{$errors->first('name')}}<p>
								            @endif
                </div>  

                <div class="form-group">
                        <label>  مکان سالن</label>
                        <input type="text" name="location" placeholder="برای مثال طبقه دوم"  class="form-control">
                        @if  ($errors->any())
                                        <p style="color:red">{{$errors->first('location')}}<p>
                                        @endif
                </div>

                <div class="form-group">
                    <label>مربوط به کدام سینما </label>
                    <select  name="venue"  class="form-control">
                         
                        @foreach ($venues as $venue)
                        <option  >{{$venue->venue_name}}</option>
                
                     @endforeach 
                     </select>
                </div>

              
                   
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت سالن" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection