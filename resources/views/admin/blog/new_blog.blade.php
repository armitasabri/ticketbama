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
              <h4>خبر جدید</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک خبر جدید ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_blogs.store')}}"   enctype="multipart/form-data">
                {{ csrf_field() }}<div class="form-group">
                    <div class="form-group">
                            <label>نام بلاگر</label>
                            <select id="blogger" name="blogger" value="" class="form-control">
                                <option  >انتخاب بلاگر</option>
                                @foreach ($bloggers as $blogger)
                                <option  >{{$blogger->name}}</option>
                        
                             @endforeach 
                             </select>
                    </div>  
                    <div class="form-group">
                        <label>رویداد</label>
                        <select id="events" name="events" value="" class="form-control">
                            <option  >انتخاب رویداد</option>
                            @foreach ($events as $event)
                            <option>{{$event->title}}</option>
                    
                         @endforeach 
                         </select>
                      </div>
                    <div class="form-group">
                        <label>عنوان</label>
                        <input type="title" value="" name="title" placeholder="عنوان خبر" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>توضیحات</label>
                        <input type="text" value="" name="description" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>عکس مربوطه</label>
                        <input type="file" value="" name="file" placeholder="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>تاریخ</label>
                        <input type="text" value="" name="date" placeholder="مثال: 7 مهرماه 1398" class="form-control">
                      </div>  
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت خبر" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection