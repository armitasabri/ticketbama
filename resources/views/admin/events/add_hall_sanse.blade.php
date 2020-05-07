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
              <h4>ایجاد سانس و سالن</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا برای رویدادت سانس و سالن ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_add_to_hallsanse')}}"   enctype="multipart/form-data">
                {{ csrf_field() }}<div class="form-group">
                    <div class="form-group">
                            <label>نام سالن</label>
                            <select id="hall" name="hall" value="" class="form-control">
                                <option  >انتخاب سالن</option>
                                @foreach ($halls as $hall)
                            <option  >{{$hall->name}}-{{$hall->venue->venue_name}}</option>
                        
                             @endforeach 
                             </select>
                    </div>  
                    <div class="form-group">
                        <label>انتخاب سانس</label>
                        <select id="sanse" name="sanse" value="" class="form-control">
                            <option  >انتخاب سانس</option>
                            @foreach ($sanses as $sanse)
                            <option>{{$sanse->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>

                      <div class="form-group">
                        <label>انتخاب رویداد</label>
                        <select id="event" name="event" value="" class="form-control">
                            <option  >انتخاب رویداد</option>
                            @foreach ($events as $event)
                            <option>{{$event->title}}</option>
                    
                         @endforeach 
                         </select>
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