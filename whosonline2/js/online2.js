$(function(){
    if($('.whos_online2').length){
        setInterval(function(){
            $.ajax({
                url : baseUrl + "online/members/check",
                success : function(data){
                    var d = jQuery.parseJSON(data);
                    $('.whos_online2').html(d.v);
                    reloadInits();
                    
                    $jQuery(document).ready(function(){
                        $(".owl-carousel").owlCarousel();
                      });
                      $('.loop').owlCarousel({
                        center: true,
                        items:2,
                        loop:true,
                        margin:10,
                        responsive:{
                            600:{
                                items:4
                            }
                        }
                    });
                    $('.nonloop').owlCarousel({
                        center: true,
                        items:2,
                        loop:false,
                        margin:10,
                        responsive:{
                            600:{
                                items:4
                            }
                        }
                    });
                }
            })
        },10000);
    }
});