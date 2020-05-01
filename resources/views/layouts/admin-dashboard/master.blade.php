<!DOCTYPE html>
<html dir="rtl">
    <head>
        @include('layouts.admin-dashboard.partials.head')
    </head>
<body>
    @include('layouts.admin-dashboard.partials.header')


    @yield('content')
    @yield('counts') 
    @yield('charts') 
    @yield('statistics') 
    @yield('updates') 




    @include('layouts.admin-dashboard.partials.footer')
  
    @include('layouts.admin-dashboard.partials.footer-scripts')

</body>
</html>