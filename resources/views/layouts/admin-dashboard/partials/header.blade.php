<nav class="side-navbar  ">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><a href="pages-profile.html"><img src="{{asset('assets2/img/avatar-3.jpg')}}" alt="person" class="img-fluid rounded-circle"></a>
          <h2 class="h5">{{Auth::user()->name}}</h2><span>توسعه‌گر وب</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading"> منو اصلی</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href="index.html"> <i class="icon-home"></i>  خانه</a></li>
          <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-form"></i>  فرم‌ها </a>
            <ul id="formsDropdown" class="collapse list-unstyled ">
              <li><a href="forms.html">فرم‌های اولیه</a></li>
              <li><a href="forms-advanced.html">فرم‌های پیشرفته</a></li>
              <li><a href="forms-autocomplete.html">Autocomplete</a></li>
              <li><a href="forms-dropzone.html">Files upload</a></li>
              <li><a href="forms-texteditor.html">Text editor</a></li>
              <li><a href="forms-validation.html">Validation</a></li>
            </ul>
          </li>
          <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i> چارت‌ها </a>
            <ul id="chartsDropdown" class="collapse list-unstyled ">
              <li><a href="charts.html">Charts</a></li>
              <li><a href="charts-gauge-sparkline.html">Gauge + Sparkline</a></li>
            </ul>
          </li>
          <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-grid"></i> جداول </a>
            <ul id="tablesDropdown" class="collapse list-unstyled ">
              <li><a href="tables.html">Bootstrap tables</a></li>
              <li><a href="tables-datatable.html">Datatable</a></li>
            </ul>
          </li>
          <li><a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i> اجزا </a>
            <ul id="componentsDropdown" class="collapse list-unstyled ">
              <li><a href="components-cards.html">Cards</a></li>
              <li><a href="components-calendar.html">Calendar</a></li>
              <li><a href="components-gallery.html">Gallery</a></li>
              <li><a href="components-loading-buttons.html">Loading buttons</a></li>
              <li><a href="components-map.html">Maps</a></li>
              <li><a href="components-notifications.html">Notifications</a></li>
              <li><a href="components-preloader.html">Preloaders</a></li>
            </ul>
          </li>
          <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i> صفحات </a>
            <ul id="pagesDropdown" class="collapse list-unstyled ">
            <li><a href="{{route('admin_comments.index')}}">مدیریت نظرات</a></li>
            <li><a href="{{route('admin_events.index')}}">مدیریت رویدادها</a></li>
            <li><a href="{{route('admin_input_seats')}}">چینش صندلی</a></li>
              <li><a href="pages-contacts.html">Contacts</a></li>
              <li><a href="pages-invoice.html">Invoice</a></li>
              <li><a href="login.html">Login page</a></li>
              <li><a href="login-2.html">Login v.2 <span class="badge badge-info">New</span></a></li>
              <li><a href="pages-profile.html">Profile</a></li>
              <li><a href="pages-pricing.html">Pricing table</a></li>
            </ul>
          </li>
          <li> <a href="#"> <i class="icon-mail"></i>Demo
              <div class="badge badge-warning">6 New</div></a></li>
        </ul>
      </div>
      <div class="admin-menu">
        <h5 class="sidenav-heading"> منوی دوم</h5>
        <ul id="side-admin-menu" class="side-menu list-unstyled"> 
          <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
          <li> <a href="#"> <i class="icon-flask"> </i>Demo
              <div class="badge badge-info">Special</div></a></li>
          <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
          <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><span>پنل </span><strong class="text-primary">مدیریت</strong></div></a></div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Notifications dropdown-->
              <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-envelope"></i> شما 6 پیام جدید دارید </div>
                        <div class="notification-time"><small>4 دقیقه قبل</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i> شما 2 دنبال‌کننده دارید</div>
                        <div class="notification-time"><small>4 دقیقه قبل</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-upload"></i> سرور ریبوت شده است</div>
                        <div class="notification-time"><small>4 دقیقه قبل</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> 
                      <div class="notification d-flex justify-content-between">
                        <div class="notification-content"><i class="fa fa-twitter"></i> شما 2 دنبال‌کننده دارید </div>
                        <div class="notification-time"><small>10 دقیقه قبل</small></div>
                      </div></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i> مشاهده تمام اطلاع‌رسانی‌ها                                            </strong></a></li>
                </ul>
              </li>
              <!-- Messages dropdown-->
              <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex text-right"> 
                      
                      <div class="msg-profile"> 
                        <img src="{{asset('assets2/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle">
                      </div>
                     <div class="msg-body" ><div>
                      <span class="icon-chairr" style="font-size:300%;"></span>   
                    </div> 
                        <h3 class="h5">جیسون دو</h3><span>
                           برای شما پیام مستقیم ارسال کرده است</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div> 
                     
                    </a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex text-right"> 
                      
                      <div class="msg-profile"> <img src="{{asset('assets2/img/avatar-2.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="msg-body">
                        <h3 class="h5">فرنک ویلیامز</h3><span>برای شما پیام مستقیم ارسال کرده است</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div>  
                    </a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item d-flex text-right"> 
                       
                      <div class="msg-profile"> <img src="{{asset('assets2/img/avatar-3.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="msg-body">
                        <h3 class="h5">اشلی وود</h3><span>برای شما پیام مستقیم ارسال کرده است</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                      </div> 
                    </a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i> خواندن تمامی پیام‌ها    </strong></a></li>
                </ul>
              </li>
              <!-- Languages dropdown    -->
              <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="{{asset('assets2/img/flags/16/GB.png')}}" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                <ul aria-labelledby="languages" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{asset('assets2/img/flags/16/DE.png')}}" alt="English" class="mr-2"><span>German</span></a></li>
                  <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="{{asset('assets2/img/flags/16/FR.png')}}" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                </ul>
              </li>
              <!-- Log out-->
              <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline-block"> خروج</span> <i class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    