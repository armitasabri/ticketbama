

<section class="mt-5">
    <div class="container-fluid" >
        <div class="d-flex justify-content-between">
       <div>
            <div class="d-flex">
                    <img src="{{asset('assets/img/icons/theater.png')}}" alt="" style="width:40px;height:40px">
                    <h4 class="pr-2"> تئاتر‌ها </h4>  
                    </div> 

       </div>
       
        
        <div>
        <a class="btn confer-btn" href="{{route('alltheatres')}}">تئاترهای بیشتر</a>
        </div> 

        </div>
        
    <div class="row pl-2 pr-2 pb-5" >

        @foreach ($theatres as $theatre)
          <div class="col-3 pt-3 pb-4 hvr-push"  >
          <a href="{{'single_event/'.$theatre->id}}">
                  <img src="storage/{{$theatre->fileimage}}" style="width:100%;height:100%" alt="">
          <h5 class="pt-2" style="text-align:center;">{{$theatre->title}}</h5>
              </a>
          
          </div>  
        @endforeach
        

    </div>

    {{-- <div class="row pt-3 pb-5">
        <div class="col hvr-push">
            <img src="{{asset('assets/img/theatres/murder.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">قتل</h5>
        </div>
        <div class="col hvr-push">
            <img src="{{asset('assets/img/theatres/passengers.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">مسافران</h5>
        </div>
        <div class="col hvr-push">
            <img src="{{asset('assets/img/theatres/red carpet.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">فرش قرمز</h5>
        </div>
        <div class="col hvr-push">
            <img src="{{asset('assets/img/theatres/talayerashid-min.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">طلای رشید</h5>
        </div>
    </div> --}}
    </div>
</section>