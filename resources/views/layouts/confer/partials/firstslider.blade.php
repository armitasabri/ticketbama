
<section style="padding-top:14vh;" class="bg-gradient-overlay">
  {{-- background-color:#8C52A7; --}}
        {{-- <div class="container" >
            <div class="row ">
            
                 <div id="demo" class="carousel slide slideshow-container col-12" data-ride="carousel" >
            
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                          <li data-target="#demo" data-slide-to="0" class="active"></li>
                          <li data-target="#demo" data-slide-to="1"></li>
                          <li data-target="#demo" data-slide-to="2"></li>
                          <li data-target="#demo" data-slide-to="3"></li>
                          <li data-target="#demo" data-slide-to="4"></li>
                        </ul>
                        
                        <!-- The slideshow -->
                        <div class="carousel-inner pt-3 pb-4">
                          <div class="carousel-item active">
                          <a href="#"> <img src="{{asset('assets/img/movie-posters/ragkhab.jpg')}}" alt="iranian-movie" width="100%" height="100%"></a>  
                            <div class="carousel-caption">
                                
                              
                              </div> 
                          </div>
                          <div class="carousel-item">
                           <a href=""><img src="{{asset('assets/img/movie-posters/walnuttree.jpg')}}" alt="iranian-movie" width="100%" height="100%"></a> 
                            <div class="carousel-caption">
                                
                             
                              </div>  
                        </div>
                          <div class="carousel-item">
                           <a href=""><img src="{{asset('assets/img/movie-posters/jahan.jpg')}}" alt="iranian-movie" width="100%" height="100%"></a> 
                            <div class="carousel-caption">
                               
                               
                              </div> 
                        </div>
                          <div class="carousel-item">
                           <a href=""><img src="{{asset('assets/img/movie-posters/Motreb-movie-photos08.jpg')}}" alt="iranian-movie" width="100%" height="100%"></a> 
                           <div class="carousel-caption">
                                
                             
                              </div> 
                        </div>
                         
                        <div class="carousel-item">
                         <a href=""> <img src="{{asset('assets/img/movie-posters/فیلم-متری-شیش-و-نیم-4.jpg')}}" alt="iranian-movie" width="100%" height="100%"></a>  
                            <div class="carousel-caption">
                               
                           
                              </div> 
                        </div>
                        </div>
                        
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                          <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                          <span class="carousel-control-next-icon"></span>
                        </a>
                      </div>
                      
               
                
    
    
            </div>
            
        </div>
           
        --}}
          




      <div class="top-content">
        <div class="container-fluid d-flex justify-content-center align-items-center pt-5">
            <div id="carousel-example" class="carousel slide " data-ride="carousel" style="min-height:500px;">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                
                   
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 active">
                        <img src="{{asset('assets/img/movie-posters/2.jpg')}}" class="img-fluid mx-auto d-block" alt="img2">
                    </div>

                    @foreach ($items as $item)
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4 ">
                  <a href="{{'single_event/'.$item->event->id}}">
                    <img src="assets/img/movie-posters/{{$item->fileimage}}" class="img-fluid mx-auto d-block" alt="img1">
                  </a>  
                     </div>
                    @endforeach
                    {{-- <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                        <img src="{{asset('assets/img/movie-posters/3.jpg')}}" class="img-fluid mx-auto d-block" alt="img3">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                        <img src="{{asset('assets/img/movie-posters/4.jpg')}}" class="img-fluid mx-auto d-block" alt="img4">
                    </div>
                    <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                      <img src="{{asset('assets/img/movie-posters/5.jpg')}}" class="img-fluid mx-auto d-block" alt="img4">
                  </div>
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                    <img src="{{asset('assets/img/movie-posters/6.jpg')}}" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                  <img src="{{asset('assets/img/movie-posters/7.jpg')}}" class="img-fluid mx-auto d-block" alt="img4">
              </div>
              <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-4">
                <img src="{{asset('assets/img/movie-posters/8.jpg')}}" class="img-fluid mx-auto d-block" alt="img4">
            </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </section>