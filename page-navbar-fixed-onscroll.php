<?php
include('./header.php');   // load header
?>
<main role="main" class="container" style="min-height: 1500px;">
    <div class="row">
        <div class="col-12">
            <div class="text-center mb-4">
                <h1 class="display-4 pb-5">Fixed navbar on scrolling</h1>
            </div>
        </div>
        <div class="col-6 offset-3">


        </div>
    </div>
</main>

<?php
include('./footer.php');     // load header 
?>
<script>
    ///////////////// fixed menu on scroll for desktop
    if ($(window).width() > 992) {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 60) {
                $('#navbar_top').addClass("fixed-top");
                $('#navbar_top').addClass("bg-primary").removeClass("bg-light");
                $('#navbar_top').addClass("navbar-dark").removeClass("navbar-light");;
                // add padding top to show content behind navbar
                $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            } else {
                $('#navbar_top').removeClass("fixed-top");
                $('#navbar_top').addClass("bg-light").removeClass("bg-primary");
                $('#navbar_top').addClass("navbar-light").removeClass("navbar-dark");
                // $('#navbar_top');
                // remove padding top from body
                $('body').css('padding-top', '0');
            }
        });
    } // end if
</script>