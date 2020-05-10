<!-- Statistics Section-->
<section class="statistics">
    <div class="container-fluid">
      <div class="row d-flex">
        <div class="col-lg-4">
          <!-- Income-->
          <div class="card income text-center">
            <div class="icon"><i class="icon-line-chart"></i></div>
          <div class="number">{{$all_income}} تومان</div><strong class="text-primary">تمامی درآمد</strong>
            <p>در اینجا درآمد تاکنون سایت از طریق سفارشات تکمیل شده را مشاهد می‌کنید</p>
          </div>
        </div>
        {{-- <div class="col-lg-4">
          <!-- Monthly Usage-->
          <div class="card data-usage">
            <h2 class="display h4">Monthly Usage</h2>
            <div class="row d-flex align-items-center">
              <div class="col-sm-6">
                <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
              </div>
              <div class="col-sm-6"><strong class="text-primary">80.56 Gb</strong><small>Current Plan</small><span>100 Gb Monthly</span></div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          </div>
        </div> --}}
        <div class="col-lg-4">
          <!-- User Actibity-->
          <div class="card user-activity">
            <h2 class="display h4">User Activity</h2>
            <div class="number">210</div>
            <h3 class="h4 display">Social Users</h3>
            <div class="progress">
              <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
            </div>
            <div class="page-statistics d-flex justify-content-between">
              <div class="page-statistics-left"><span>Pages Visits</span><strong>230</strong></div>
              <div class="page-statistics-right"><span>New Visits</span><strong>73.4%</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>