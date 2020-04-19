 
@extends('layouts.confer.regular')

@section('content')

<section style="padding-top:120px;padding-bottom:50px;">
    <div class="container-fluid" >
      
           <div>
           <h4 class="pr-4 pt-4"><i class="fa fa-film" aria-hidden="true"></i> <span class="pr-1">همه‌ی فیلم‌ها</span> </h4>
           </div>
          
      
        
    <div class="row pl-2 pr-2 pb-5" style="min-height:400px">
        @foreach ($movies as $movie)
            <div class="col-2 pt-4 pb-4 pr-4 hvr-pop" >
            <img src="storage/{{$movie->fileimage}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">{{$movie->title}}</h5>
        </div>
        @endforeach
        
       
    </div>

   
   
    
    </div>
</section>  

@endsection