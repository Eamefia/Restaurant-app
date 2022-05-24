$(document).ready(function(){

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1,
        autoplay :true,
        autoplaySpeed:500,
        loop :true,
        navSpeed:1000,
        margin:2,
        goToFirstSpeed :1000
    });


    $("#homestel .owl-carousel").owlCarousel({
        dots:true,
        items:1,
        autoplay :true,
        autoplaySpeed:900,
        loop :true,
        navSpeed:7000,
        margin:2,
        goToFirstSpeed :7000
    });

    //top sale owl carousel
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    $("#product .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //isotope flter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode:'fitRows'
    });

    //filter items on button click

    $(".button-group").on("click","button",function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })


    //new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    //blog owl caorusel
    $("#blogs .owl-carousel").owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            }
        }
    });

    //product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    //click on button up
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
        $.ajax({ url: "Template/ajax.php", type : 'post', data : { itemId:$(this).data("id")}, success : function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val()>=1 && $input.val()<=9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    //increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }
        }});
        


            //increase price of the product

        // closing ajax request




    });

    //click on button down
    $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({ url: "template/ajax.php", type : 'post', data : { itemId:$(this).data("id")}, success : function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input.val()>1 && $input.val()<=10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });

                    //increase price of the product
                    $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                }



        }}); // closing ajax request

          $('#show').click(function(){$('#phone').show();});

    });
    $("#file").change(function() {
        filename = this.files[0].name
        console.log(filename);
      });



});




