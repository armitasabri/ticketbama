

<section class="mt-5 pt-2" >
    <div class="container-fluid" >
       <div class="d-flex justify-content-between">
           <div>
               <h4 class="pr-2"><i class="fa fa-film" aria-hidden="true"></i> آخرین فیلم‌های روز سینمای ایران</h4>
           </div>
           <div>
           <a class="btn confer-btn" href="{{route('allmovies')}}">فیلم‌های بیشتر</a>
           </div>
       </div>
        
    <div class="row pl-2 pr-2 pb-5" >
        @foreach ($events as $event)
            <div class="col-3 pt-4 hvr-pop pb-4" style="max-height:25%" >
                {{-- @foreach ($event->Photo as $photo) --}}
                    {{-- <img src="assets/img/feature-movies/{{$photo->path}}" style="width:100%;height:100%" alt=""> --}}
            <a href="{{'/single_event/'.$event->id}}"> <img src="storage/{{$event->fileimage}}" style="width:100%;height:100%" alt=""> 
                    <h5 class="pt-2" style="text-align:center;">{{ $event->title }}</h5>
                </a> 

                {{-- @endforeach --}}
           
        </div>
        @endforeach
      
    </div>

    </div>
</section>