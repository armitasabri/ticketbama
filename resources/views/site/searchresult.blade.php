
@extends('layouts.confer.regular')

@section('content')

<section style="padding-top:120px;padding-bottom:50px;padding-right:40px;padding-left:40px">
    <div class="container-fluid" >
      
           <div>
           <h4 class="pr-4 pt-4">
            نتایج جستجو برای "{{$k}}"</h4>
           </div>
          
      
        
    <div class="row" style="min-height:600px">
        @foreach ($events as $item)
            <div class="col-2 pt-3 pr-4  hvr-pop" style="height:500px;padding-bottom:80px">
            <img src="../assets/img/feature-movies/{{$item->fileimage}}" style="width:100%;height:100%" alt="">
            <h5 class="pt-2" style="text-align:center;">{{$item->title}}</h5>
            <h6 class="pt-2" style="text-align:center;">کارگردان:{{$item['director']}}</h6>
        </div>

        {{-- <div class="pt-4 mt-4">
          @empty{{$Message}}
       </div> --}}
        @endforeach
        
       
    </div>

   
   
    
    </div>
</section>  

@endsection