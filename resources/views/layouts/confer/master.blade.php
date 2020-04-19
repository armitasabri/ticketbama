<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.confer.partials.head')

</head>

<body>
  
       <div class="myloader">
        <img src="{{asset('assets/img/loaders/first.gif')}}" class="rounded-circle mygift" alt="loading..." >
        </div>
        @include('layouts.confer.partials.header')
      
      
    
         @yield('content')
         @yield('firstslider') 
         @yield('fastshopping')


            <div class="container-fluid">

                <div class="row">
                    <div class="col-9">
                        @yield('featuremovies')
                        @yield('bestsellers')
                        @yield('theatre')
                        @yield('concertsection')
                        
                    </div>


                    <div class="col-3 ">
                        @yield('sidebarcolumn')
                    </div>
                </div>
            </div>   

  

    
           
           @yield('commentslider')
        
 

        @yield('blognews')
    
        @yield('contactus')

  @include('layouts.confer.partials.footer')
  
  @include('layouts.confer.partials.footer-scripts')
</body>



</html>