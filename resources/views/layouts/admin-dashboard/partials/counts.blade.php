<section class="dashboard-counts section-padding">
    <div class="container-fluid">
      <div class="row">
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-user"></i></div>
            <div class="name"><strong >تعداد کاربران</strong><span>تاکنون</span>
              <div class="count-number">{{Auth::user()->count()}}</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-padnote"></i></div>
            <div class="name"><strong ">سفارشات</strong><span>5 روز گذشته</span>
            <div class="count-number">{{$orders}}</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-check"></i></div>
            <div class="name"><strong >نظرات جدید</strong><span>2 ماه گذشته</span>
            <div class="count-number">{{$comments}}</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-bill"></i></div>
            <div class="name"><strong >تمامی نظرات</strong><span>2 ماه گذشته</span>
            <div class="count-number">{{$allcomments}}</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-list"></i></div>
            <div class="name"><strong >رویدادهای جدید</strong><span>3 روز گذشته</span>
            <div class="count-number">{{$recent_events}}</div>
            </div>
          </div>
        </div>
        <!-- Count item widget-->
        <div class="col-xl-2 col-md-4 col-6">
          <div class="wrapper count-title d-flex">
            <div class="icon"><i class="icon-list-1"></i></div>
            <div class="name"><strong >تمامی رویدادها</strong><span>تاکنون</span>
            <div class="count-number">{{$events}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>