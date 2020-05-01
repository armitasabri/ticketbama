<section class="dashboard-header section-padding">
    <div class="container-fluid">
      <div class="row d-flex align-items-md-stretch">
        <!-- To Do List-->
        <div class="col-lg-3 col-md-6">
          <div class="card to-do">
            <h2 class="display h4">لیست کار‌ها</h2>
            <p>لورم ایپسوم نترن ریتسدر رمبدرذ</p>
            <ul class="check-lists list-unstyled text-right">
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-1" name="list-1" class="form-control-custom " >
                <label for="list-1" class="pl-2">فااادیفاذیفایاذ</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                <label for="list-2" class="pl-2">الئغابئد بلدیذ بیذقیذ</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                <label for="list-3">بلذدی دئفدیبذید دیقثاذسث </label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                <label for="list-4">تردرت رنهثب رتخبت </label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                <label for="list-5">قلعلقذت رتثساسثیلرتذیر رتسیثر</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                <label for="list-6">قثلنمدلنقسث تثقدلستثقذلقت </label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-7" name="list-7" class="form-control-custom">
                <label for="list-7">قلقثمئنل ذنقلقسهدلر لبقلذدقی</label>
              </li>
              <li class="d-flex align-items-center"> 
                <input type="checkbox" id="list-8" name="list-8" class="form-control-custom">
                <label for="list-8">نبنببا دذتذتب هقتلتل</label>
              </li>
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