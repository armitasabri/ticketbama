

var columns = {!! json_encode($columns) !!};

 

console.log(columns);


// var divs = $("div > div");
var divs = $(".target");

    for(var i = 0; i < divs.length; i+=columns) {
      divs.slice(i, i+columns).wrapAll("<div class='row'></div>");
    }


  
 $('.target').click(function(){
     $(this).toggleClass( "reserved" )
 })

$('#button').click(function(e) {

    e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });


    var items = $('.reserved').map(function () { return this.id; }).get();
     
console.log(items);

$.ajax({
  url: "/seat_reserved",
  dataType: 'json',
  type: "post",
  data: {
    ids: items,
    
  },
  success: function(response, status) {
     alert("صندلی/صندلی های انتخابی شما با موفقیت رزرو شد");
  },
  // error: function(XMLHttpRequest, textStatus, erroeThrown) {
  //   console.log('AJAX error:' + textStatus)
  // }
});


});

  
    


      
    

