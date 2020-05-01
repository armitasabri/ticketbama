
<section class="mt-5">
    <div class="container-fluid" >
        <div class="d-flex justify-content-between">
            <div><h4 class="pr-2"><i class="fa fa-music" aria-hidden="true"></i> کنسرت‌ها</h4></div>
            
        <div><a class="btn confer-btn" href="{{route('allconcerts')}}">کنسرت‌های بیشتر</a></div>
        </div>
        
    <div class="row pl-2 pr-2 pb-5" >
        @foreach ($concerts as $concert)
         <div class="col-3 pt-3 hvr-wobble-vertical" style="max-height:25%" >
         <a href="{{'single_event/'.$concert->id}}">
            <img src="storage/{{$concert->fileimage}}" style="width:100%;height:100%" alt="">
         <h5 class="pt-2" style="text-align:center;">{{$concert->title}}</h5>
         </div></a>
         
        @endforeach
       
    </div>

    
    </div>
</section>