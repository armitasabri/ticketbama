<div>
    
<header class="header-area">
    <div class="classy-nav-container breakpoint-off">

    <div class="container-fluid">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-around active" id="conferNav">

            <!-- Logo -->
          
        <a class="nav-brand" href="{{route('home')}}"><img src="{{asset('assets/img/core-img/logo.png')}}" alt="" style="width:150px;height:150px"></a>
                
         

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu ">
                <!-- Menu Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav " >
                         <ul id="nav"  style="padding-left:6vw;">
                         <li class="active"><a href="{{route('home')}}">خانه</a></li>
                         {{-- <li><a href="{{route('m_events')}}">فیلم‌ها</a></li> --}}
                         <li><a href="#">فیلم‌ها</a>
                            <ul class="dropdown">
                                @foreach ($mgenres as $mgenre)
                            <li><a  href="{{'m_events/'.$mgenre->id}}">{{$mgenre->name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </li>
                         <li><a href="{{route('showtheatrecategory')}}">تئاتر‌ها</a>
                            <ul class="dropdown">
                                @foreach ($tgenres as $tgenre)
                            <li><a  href="index.html">{{$tgenre->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                         <li><a href="{{route('showconcertcategory')}}">کنسرت‌ها</a>
                            <ul class="dropdown">
                                @foreach ($cgenres as $cgenre)
                                <li><a  href="index.html">{{$cgenre->name}}</a></li>
                                    @endforeach

                              
                            </ul>
                        </li>
                         <li><a href="{{route('blog')}}">بلاگ</a></li>
                         <li><a href="{{route('contactus')}}">تماس با ما</a></li>
                    </ul>
                    
                   

                    <!-- Get Tickets Button -->
                    <div class="classynav ">
                    <a href="{{route('tracking')}}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">پیگیری خرید<i class="zmdi zmdi-long-arrow-left"></i></a>
                    @guest
                    <a href="{{route('login')}}" class="btn  mt-3 mt-lg-0 ml-3 ml-lg-5" style="background-color:#151853;color:white">ورود/ثبت نام </a>
                        {{-- <div class="input-icons">
                            <i class="fa fa-search mainsearch" ></i>
                           <input type="text" placeholder="جستجو" class="pr-1">  
                        </div> --}}
                    @else
                    <li class="nav-item  dropdown ">
                        <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          <img src="{{asset('assets/img/avatars/unknownuser.png')}}" class="rounded-circle" alt="" style="width:30px;height:30px;">  
                           {{ Auth::user()->name }} <span class="caret"></span>
                       
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-center"  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('خروج از حساب کاربری') }}
                            </a>
                            <a class="dropdown-item text-center" href="{{ route('profile') }}">
                                {{ __('مشاهده پروفایل') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                        <div class="md-form active-purple active-purple-2 mb-2">
                        <form action="{{route('search_result')}}" method="post">
                            {{ csrf_field() }}
                                 <input class="form-control" name="keyword" type="text" placeholder="جستجو" aria-label="Search">
                            </form>
                           {{-- <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                              aria-label="Search">
                          </form> --}}
                        </div>
                        
                    </div>

                </div>
                <!-- Nav End -->
            </div>
        </nav>
        
    </div>
</div>

</header>  
</div>