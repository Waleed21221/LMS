

$(document).ready(function(){
    $("#left-sidebar-button-id").click(function(){
      $(".left-sidebar").show();
    });

    $("#right-sidebar-button-id").click(function(){
      $(".right-sidebar-parent").show();
    });

    $("#color-switcher-light-btn").click(function(){
      $('head').append('<link rel="stylesheet" href="css/color-switcher.css" type="text/css" />');
    });

    $("#color-switcher-dark-btn").click(function(){
      $('link[href*="color-switcher.css"]').attr("disabled", "true");
    });

    $(".announcement-bar-close-btn").click(function(){
      $(".announcement-bar-parent").fadeOut();
    });


        $('#the-parent').on('mouseenter', function(){ 
          $('#the-parent').on('scroll', function () {
              $('.right-sidebar').scrollTop($(this).scrollTop());
          });
      });
      $('#the-parent').on('mouseleave', function(){ 
          $('#the-parent').off('scroll');
          $('.right-sidebar').off('scrollTop');
      });
      
      $('.right-sidebar').on('mouseenter',function(){ 
          $('.right-sidebar').on('scroll', function () {
              $('#the-parent').scrollTop($(this).scrollTop());
          });
      }); 
      $('.right-sidebar').on('mouseleave', function(){ 
          $('.right-sidebar').off('scroll');
          $('#the-parent').off('scrollTop');
      });


      $(".newsletter-card-header").click(function(){
          $(".fa-sort-up-nwsltr").toggleClass("fa-sort-down-nwsltr");
        });

        $(".events-card-header").click(function(){
          $(".fa-sort-up-events").toggleClass("fa-sort-down-events");
        });

        $("#add_new_prog").click(function(){
          $("#add_prog_form").slideToggle();
        });

        $("#add_prog_form").hide();

        $("#upld_blk-btn").click(function(){
    $("#upld_blk_form").slideToggle();
});
$("#upld_blk_form").hide();


  });