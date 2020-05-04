<section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-3 col-md-6">
          <div class="card to-do">
            <h2 class="display h4">لیست کار‌ها</h2>
            <p>تسک‌هایی که انجام شده است را انتخاب نمایید.</p>
            <ul class="check-lists list-unstyled text-right " >
             
              @foreach ($tasks as $task)
            
                     <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-1" name="list-1" class="form-control-custom " >
                 <label for="list-1" class="pl-2">{{$task->task}}</label>
              </li>

               
              @endforeach
            <a href="{{route('admin_new_task')}}"><i class="fa fa-plus-square" style="padding-left:4px;color:#33B35A" aria-hidden="true"></i>
               <span style="color:#33B35A">تسک جدید</span> </a>
              
               
            </ul>
          </div>
        </div>
        <!-- Pie Chart-->
        <div class="col-lg-3 col-md-6">
          <div class="card project-progress">
            <h2 class="display h4">پیشرفت پروژه</h2>
            <p> بترسیرذ ترسیرذ یستر رتسیالسثیدرب.</p>
            <div class="pie-chart">
              <canvas id="pieChart" width="300" height="300"> </canvas>
            </div>
          </div>
        </div>
        <!-- Line Chart -->
        <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
          <div class="card sales-report">
            <h2 class="display h4">گزارش فروش</h2>
            <p> یررسثیترذسث تریسرسثیترذس رنسیرتلسثی.</p>
            <div class="line-chart">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>