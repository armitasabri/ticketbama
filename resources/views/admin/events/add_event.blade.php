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
              <h4>ثبت رویداد</h4>
            </div>
            <div class="card-body">
                <div class="d-flex ">
                   <div>
                      <i class="fa fa-calendar-o" aria-hidden="true"></i> </div> 
                   <div><p style="padding-right:4px;">همین حالا یک رویداد جدید ثبت کن!</p>
                       </div> 
                </div>
                
            <form method="POST" action="{{route('admin_events.store')}}"   enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-group">
                    <label>نام رویداد</label>
                   <input type="text" name="title" placeholder="عنوان فیلم/تئاتر یا کنسرت" value="" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label>دسته‌بندی</label>
                        <select id="categories" name="categories" value="" class="form-control">
                            <option disabled >انتخاب نوع رویداد</option>
                            @foreach ($categories as $category)
                            <option  >{{$category->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>

                      <div class="form-group">
                        <label>ژانر</label>
                        <select id="genres" name="genres" value="" class="form-control">
                            <option disabled >انتخاب ژانر</option>
                            @foreach ($genres as $genre)
                            <option  >{{$genre->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>

                      <div class="form-group">
                        <label>درباره رویداد</label>
                       <input type="text" name="description" placeholder="توضیح درباره‌ی رویداد" value="" class="form-control">
                        </div>
                    <div class="form-group">
                        <label>تاریخ رویداد</label>
                        <input type="date" value="" name="date" placeholder="تاریخ" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>عکس اصلی</label>
                        <input type="file"  name="singlefile" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>عکس‌های فرعی</label>
                        <input type="file"  name="file[]" multiple class="form-control dropzone">
                        
                       
                      </div>
                      <div class="form-group">
                        <label>مدت زمان رویداد</label>
                        <input type="text" value="" name="duration" placeholder="دقیقه" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>کارگردان</label>
                        <input type="text" value="" name="director" placeholder="کارگردان" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label>بازیگران</label>
                        <input type="text" value="" name="cast" placeholder="بازیگران" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label> یا خواننده </label>
                        <input type="text" value="" name="artist" placeholder="هنرمند" class="form-control">
                      </div>  
                      <div class="form-group">
                        <label>سانس</label>
                        <select id="sanses" name="sanses" value="" class="form-control">
                            <option disabled >انتخاب سانس</option>
                            @foreach ($sanses as $sanse)
                            <option  >{{$sanse->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>  

                      <div class="form-group">
                        <label>سالن</label>
                        <select id="halls" name="halls" value="" class="form-control">
                            <option disabled >انتخاب سالن</option>
                            @foreach ($halls as $hall)
                            <option  >{{$hall->name}}</option>
                    
                         @endforeach 
                         </select>
                      </div>  
                  
                  <div class="form-group">       
                    <input type="submit" value="ثبت رویداد" class="btn btn-primary">
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