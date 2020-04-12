

<section class="mt-5">
    <div class="container-fluid" >
       <div class="d-flex justify-content-between">
           <div>
               <h4 class="pr-2"><i class="fa fa-film" aria-hidden="true"></i> آخرین فیلم‌های روز سینمای ایران</h4>
           </div>
           <div>
           <a class="btn confer-btn" href="#">فیلم‌های بیشتر</a>
           </div>
       </div>
        
    <div class="row pl-2 pr-2 pb-5" >
        @foreach ($events as $event)
            <div class="col-3 pt-4 hvr-pop pb-4" style="max-height:25%" >
                {{-- @foreach ($event->Photo as $photo) --}}
                    {{-- <img src="assets/img/feature-movies/{{$photo->path}}" style="width:100%;height:100%" alt=""> --}}
            <a href="{{'/single_event/'.$event->id}}"> <img src="assets/img/feature-movies/{{$event->fileimage}}" style="width:100%;height:100%" alt=""> 
                    <h5 class="pt-2" style="text-align:center;">{{ $event->title }}</h5>
                </a> 

                {{-- @endforeach --}}
           
        </div>
        @endforeach
      
    </div>

    {{-- <div class="row pt-3 pb-5">
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Rahman 1400 _ poster by Mohammad Rouholamin.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">رحمان 1400 </h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Subdued  Poster by Mohammad Rouholamin.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">رگ خواب</h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/Twenty-one Days Later  Poster by Mohammad….jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">بیست و یک روز بعد</h5>
        </div>
        <div class="col hvr-pop">
            <img src="{{asset('assets/img/feature-movies/When the Moon Was Full - poster by Shafabakhsh.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">شبی که ماه کامل شد</h5>
        </div>
        <div class="col pt-3 hvr-pop" ><img src="{{asset('assets/img/feature-movies/motreb.jpg')}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">مطرب</h5>
        </div>
    </div> --}}
    </div>
</section>