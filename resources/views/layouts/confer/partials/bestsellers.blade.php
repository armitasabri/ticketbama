
<section class="mt-5">
    <div class="container-fluid" >
       <div class="d-flex justify-content-between">
           <div>
               <h4 class="pr-2"><i class="fa fa-film" aria-hidden="true"></i> محبوبترین‌ها </h4>
           </div>
           <div>
           <a class="btn confer-btn" href="{{route('allpopulars')}}"> موارد بیشتر</a>
           </div>
       </div>
        
    <div class="row pl-2 pr-2 pb-5" >
        @foreach ($populars as $popular)
          <div class="col-3 pt-3 pb-4 hvr-pop" style="max-height:25%" >
            <a href="{{'single_event/'.$popular->Event->id}}">
                <img src="assets/img/feature-movies/{{$popular->Event->fileimage}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">{{$popular->Event->title}}</h5>
        </a>
          
        </div>  
        @endforeach
        
       
    </div>

    
    </div>
</section>