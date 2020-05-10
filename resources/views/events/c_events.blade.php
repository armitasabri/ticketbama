 
@extends('layouts.confer.regular')

@section('content')

<section style="padding-top:120px;padding-bottom:50px;">
    <div class="container-fluid" >
      
           <div>
           <h4 class="pr-4 pt-4"><i class="fa fa-music" style="padding-left:4px" aria-hidden="true"></i>کنسرت‌های {{$genre->name}}</h4>
           </div>
          
      
        
    <div class="row pl-2 pr-4 pb-5 pt-4" style="min-height:400px">
        @foreach ($concerts as $concert)
            <div class="col-2 pt-3 hvr-pop" >
            <a href="{{route('single_event',['id'=>$concert->id])}}">
              <img src="../assets/img/feature-movies/{{$concert->fileimage}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">{{$concert->title}}</h5> 
         </a>
            
        </div>
        @endforeach
        
       
    </div>

   
   
    
    </div>
</section>  

@endsection