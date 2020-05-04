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
              <h4>ویرایش رویداد</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-calendar-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">رویدادتو ویرایش کن!!</p>
                       </div> 
                </div>
                
            <form method="post" action="{{'update_my_event'}}/?myevent={{$event->id}}"   enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                    <label>نام رویداد</label>
                    <input type="text" name="title" placeholder="عنوان فیلم/تئاتر یا کنسرت" value="{{$event->title}}" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label>دسته‌بندی</label>
                    <select id="categories" name="categories" value="{{$event->Category['name']}}" class="form-control">
                            <option disabled >انتخاب نوع رویداد</option>
                            @foreach ($categories as $category)
                            <option  >{{$category->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>

                      <div class="form-group">
                        <label>ژانر</label>
                      <select id="genres" name="genres" value="{{$event->Genre['name']}}" class="form-control">
                            <option disabled >انتخاب ژانر</option>
                            @foreach ($genres as $genre)
                            <option  >{{$genre->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>

                      <div class="form-group">
                        <label>درباره رویداد</label>
                      <input type="text" name="description" placeholder="توضیح درباره‌ی رویداد" value="{{$event->description}}" class="form-control">
                        </div>
                    <div class="form-group">
                        <label>تاریخ رویداد</label>
                        <input type="date" value="{{$event->event_date}}" name="date" placeholder="تاریخ" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>عکس اصلی</label>
                       
                      <img  class="form-control" src="../../../assets/img/feature-movies/{{$event->fileimage}}" alt="" style="width:100px;height:100px">

                      </div>

                      <div class="form-group">
                        <label>عکس‌های فرعی</label>
                        @foreach ($event->Photo as $item)
                      <img src="../../../assets/img/feature-movies/{{$item->path}}" alt="" class="form-control"  style="width:100px;height:100px">
                        @endforeach
                      </div>
                      <div class="form-group">
                        <label>مدت زمان رویداد</label>
                        <input type="text" value="{{$event->duration_minute}}" name="duration" placeholder="دقیقه" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>کارگردان</label>
                        <input type="text" value="{{$event->director}}" name="director" placeholder="کارگردان" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label>بازیگران</label>
                        <input type="text" value="{{$event->cast}}" name="cast" placeholder="بازیگران" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label> یا خواننده </label>
                        <input type="text" value="{{$event->artist}}" name="artist" placeholder="هنرمند" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label>سانس</label>
                        <select id="sanses" name="sanses" value="" class="form-control">
                            <option disabled >انتخاب سانس</option>
                            @foreach ($hall_sanses as $sanse)
                            <option  >{{$sanse->sanse->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>  

                      <div class="form-group">
                        <label>سالن</label>
                        <select id="halls" name="halls" value="" class="form-control">
                            <option disabled >انتخاب سالن</option>
                            @foreach ($hall_sanses as $hall)
                            <option  >{{$hall->hall->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>  
                  
                  <div class="form-group">       
                    <input type="submit" value="ویرایش رویداد" class="btn btn-primary">
                  </div>
                  <div class="form-group">       
                    <a href="#"><button class="btn btn-primary">ویرایش عکس اصلی</button></a>
                  </div> <div class="form-group">       
                   <a href="#"><button class="btn btn-primary">ویرایش عکس‌های فرعی</button></a>
                  </div>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</section>



<script>
    var form=document.getElementById('upload')
		var request=new XMLHttpRequest();
		form.addEventListener('submit',function(e){
			e.preventDefault();
			var formdata= new FormData(form);
			request.open('post','/upload');
			request.addEventListener("load",transferComplete);
			request.send(formdata);
		});
		function transferComplete(data){
			response = JSON.parse(data.currentTarget.response);
			if(response.success){
				document.getElementById('message').innerHTML="successfully uploaded!";
			}
		}
</script>

@endsection