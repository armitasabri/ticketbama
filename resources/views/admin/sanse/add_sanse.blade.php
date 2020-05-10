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
              <h4>ثبت سانس</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک سانس جدید ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_sanses.store')}}"   >
                {{ csrf_field() }}<div class="form-group">
                <div class="form-group">
                            <label> زمان شروع</label>
                            <input type="text" name="start" placeholder="شروع" value="" class="form-control">
                            @if  ($errors->any())
								            <p style="color:red">{{$errors->first('start')}}<p>
								            @endif
                </div>  

                <div class="form-group">
                        <label> زمان پایان</label>
                        <input type="text" name="end" placeholder="پایان"  class="form-control">
                        @if  ($errors->any())
                                        <p style="color:red">{{$errors->first('end')}}<p>
                                        @endif
                </div>

                <div class="form-group">
                    <label>تاریخ </label>
                    <input type="date" name="date" placeholder="تاریخ"  class="form-control">
                    @if  ($errors->any())
                                    <p style="color:red">{{$errors->first('date')}}<p>
                                    @endif
                </div>

                <div class="form-group">
                <label>نام سانس </label>
                <input type="text" name="name" placeholder="مثلا سانس اول،دوم و ..."  class="form-control">
                @if  ($errors->any())
                                <p style="color:red">{{$errors->first('name')}}<p>
                                   @endif
                </div>
              
                   
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت سانس" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection