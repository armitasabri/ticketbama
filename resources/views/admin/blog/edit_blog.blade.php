@extends('layouts.admin-dashboard.master')

@section('content')

<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
       
      </header>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>ویرایش خبر </h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-smile-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا خبرتو ویرایش کن!</p>
                       </div> 
                </div>
                
            <form  action="{{'update_my_blog'}}/?blog={{$blog->id}}" method="POST"  enctype="multipart/form-data">
              
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                            <label>نام بلاگر</label>
                    <select id="blogger" name="blogger" value="{{$blog->user->name}}" class="form-control">
                                <option  >انتخاب بلاگر</option>
                                @foreach ($bloggers as $blogger)
                                <option  >{{$blogger->name}}</option>
                        
                             @endforeach 
                             </select>
                    </div>  
                    <div class="form-group">
                        <label>رویداد</label>
                        <select id="events" name="events" value="{{$blog->event->title}}" class="form-control">
                            <option  ></option>
                            @foreach ($events as $event)
                            <option>{{$event->title}}</option>
                    
                         @endforeach 
                         </select>
                      </div>
                    <div class="form-group">
                        <label>عنوان</label>
                        <input type="title" value="{{$blog->title}}" name="title" placeholder="عنوان خبر" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>توضیحات</label>
                        <input type="text" value="{{$blog->description}}" name="description" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>عکس مربوطه</label>
                        <input type="file" value="{{$blog->image}}" name="file" placeholder="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>تاریخ</label>
                        <input type="text" value="{{$blog->news_date}}" name="date" placeholder="مثال: 7 مهرماه 1398" class="form-control">
                      </div>  
                 
                  
                  <div class="form-group">       
                    <input type="submit" value="ویرایش خبر" class="btn btn-primary">
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>





@endsection