      
     <script src="js/jquery.js"></script>
     <script src="js/jquery.bxslider.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="fa/js/all.js"></script>
     <script>$(document).ready(function(){
    $('.slider').bxSlider(
        {auto:true,}
    );
    
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        },
        1300:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
});</script>

<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
     <script src="js/main.js"></script>
</body>
</html>