<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Molten a Industrial Category Bootstrap Responsive Web Template | Home</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Molten Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="{{ url('') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{ url('') }}/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="{{ url('') }}/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
   </head>
    <!--CONTENT-->
    @yield('content')
      <!--END CONTENT-->

      <!--- @include('moltcompany.webpage.about')

       @include('moltcompany.webpage.funfact')--->
        <!--Footer -->
      
      <!-- //Footer -->
      <!--js working-->
      <script src="{{ url('') }}/js/jquery-2.2.3.min.js"></script>
      <!--//js working--> 
      <!--Nav script scrollon--> 
      <script>
         $(window).scroll(function() {
             if ($(document).scrollTop() > 150) {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').addClass('shrink');
             } else {
                 $('nav.pagescrollfix,nav.RWDpagescrollfix').removeClass('shrink');
             }
         });
      </script>
      <!--//Nav script scrollon--> 
      <!--responsiveslides banner-->
      <script src="{{ url('') }}/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
               auto: true,
               pager:true ,
               nav:false,
               speed: 900,
               namespace: "callbacks",
               before: function () {
                  $('.events').append("<li>before event fired.</li>");
               },
               after: function () {
                  $('.events').append("<li>after event fired.</li>");
               }
            });
         
         });
      </script>
      <!--// responsiveslides banner-->    
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="{{ url('') }}/js/jquery.waypoints.min.js"></script>
      <script src="{{ url('') }}/js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->  
      <!-- start-smoth-scrolling -->
      <script src="{{ url('') }}/js/move-top.js"></script>
      <script src="{{ url('') }}/js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 900);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
            var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1100,
               easingType: 'linear'
            };
         
         
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="{{ url('') }}/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>