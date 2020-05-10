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
            <h2 class="display h4">تعداد کاربران</h2>
            <p>نمودار دایره‌ای از تعدا کاربران ثبت نام کرده طی هفته گذشته </p>
            <div class="chart-container">
              <div class="pie-chart-container">
                <canvas id="pie-chart"  width="300" height="300"></canvas>
              </div>
            </div>
            {{-- <div class="pie-chart">
              <canvas id="pieChart" width="300" height="300"> </canvas>
            </div> --}}
          </div>
        </div>
        <!-- Line Chart -->
        <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
          <div class="card sales-report">
            <h2 class="display h4">گزارش فروش</h2>
            <p></p>
            {{-- <div id="chartContainer" style="height: 370px; width: 80%;">
            </div> --}}
            {{-- <div class="line-chart">
              <canvas id="lineCahrt"></canvas>
            </div> --}}
            <div class="w-1/2">
              {!! $chart->container() !!}
        
         </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
  {!! $chart->script() !!}
  <script>
    $(function(){
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#pie-chart");
   
        //pie chart data
        var data = {
          labels: cData.label,
          datasets: [
            {
              label: "Orders Count",
              data: cData.data,
              backgroundColor: [
                "#DEB887",
                "#A9A9A9",
                "#DC143C",
                "#F4A460",
                "#2E8B57",
                "#1D7A46",
                "#CDA776",
              ],
              borderColor: [
                "#CDA776",
                "#989898",
                "#CB252B",
                "#E39371",
                "#1D7A46",
                "#F4A460",
                "#CDA776",
              ],
              borderWidth: [1, 1, 1, 1, 1,1,1]
            }
          ]
        };
   
        //options
        var options = {
          responsive: true,
          title: {
            display: false,
            position: "top",
            text: "Last Week Registered Users -  Day Wise Count",
            fontSize: 18,
            fontColor: "#111"
          },
          legend: {
            display: true,
            position: "bottom",
            labels: {
              fontColor: "#333",
              fontSize: 16
            }
          }
        };
   
        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
          type: "pie",
          data: data,
          options: options
        });
   
    });




    window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light3",
	title:{
		text: "Simple Line Chart"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: [
			{ y: 450 },
			{ y: 414},
			{ y: 520, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
			{ y: 460 },
			{ y: 450 },
			{ y: 500 },
			{ y: 480 },
			{ y: 480 },
			{ y: 410 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 500 },
			{ y: 480 },
			{ y: 510 }
		]
	}]
});
chart.render();

}

   




  </script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>