

console.log('hi');



$(".mslider").owlCarousel({
    // autoplay:true,
    items:3,
    loop:true,
    rtl:true,
    dots:false,
    margin:10,
    nav: true,
    navText:['<','>'],
    // navColor:['#df42b1'],
    navClass:['owl-prev','owl-next'],
    nacElement:'div',
    center: true,
    // responsive:{
    //     0:{
    //         items:1
    //     },
    //     600:{
    //         items:3
    //     },
    //     1000:{
    //         items:12
    //     }
    // }
    // autoplayHoverPause:true,

    }
 );



 $('rate').ready(function() {
    $('.fa-star').click(function() {
        var id = $(this).attr('id');
        var value=$(this).data('value');
        // alert(value);

        // alert(id);
        $.ajax({
            url: "/rate_save",
            dataType:'json',
            type:'GET',
            data:{"rate":id,
            "value":value

            },
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },

            success: function(response,status){
                alert(response['success']);


            },
                error: function(XMLHttpRequest,textStatus,errorThrown){

            }
            });

    });
});


$('rate').ready(function() {

        $(".fa-star").on('mouseover',function(){
        var id = $(this).attr('id');
        // var i = $(".fa-star").attr('id');


            for(i=1;i<=5;i++)
           if(i<=id){
            $('#'+i).addClass("mchecked");
           }else{
            $('#'+i).removeClass("mchecked");

           }
          });

});








// SHIFT =====
$('arrange').ready(function() {
    var clicks=0;
    $('button').click(function() {
        var id = $(this).attr('id');
        var seatid=$('.'+id+' div:nth-child(3)').attr('id');
        // alert(seatid);

        $('.'+id+' div:nth-child(3)').addClass("half");
        // $.ajaxSetup({
        //     headers: {
        //         // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $.ajax({
            url: "/seat_shift/{id}",


            dataType:'json',
            type:'GET',
            data:{"seatid":seatid

            },
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },

            success: function(response,status){
                // alert(response['success']);


            },
                error: function(XMLHttpRequest,textStatus,errorThrown){

            }
            });



    });
});

// DELETE =====
$('arrange').ready(function() {
    // var clicks=0;
    $('div').click(function() {
        var id = $(this).attr('id');
        $('#'+id).addClass("none");

        $.ajax({
            url: "/seat_delete/{id}",


            dataType:'json',
            type:'GET',
            data:{"seatid":id

            },
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },

            success: function(response,status){
                // alert(response['success']);


            },
                error: function(XMLHttpRequest,textStatus,errorThrown){

            }
            });


    });
});

