@extends('app')

@section('content')
    <div class="row" id="mainrow">
        <section class="container-fluid" id="sec1">
            <div id="slideshow">
                <div>
                    <img  src="https://c2.staticflickr.com/6/5655/22360803525_2fe4d688d8_b.jpg" class="center-block">
                </div>
                <div>
                    <img src="https://c1.staticflickr.com/1/580/22371477131_0090674b52_b.jpg" class="= center-block">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5795/22360807025_f943722364_b.jpg" class="= center-block">
                </div>
                <div>
                    <img src="https://c1.staticflickr.com/1/629/21738039214_f98f5f4bd7_b.jpg" class="= center-block">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5703/22334806556_df71d062ab_b.jpg" class="= center-block">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5802/22360840685_21f548b534_b.jpg" class=" center-block">
                </div>
            </div>
        </section>


        <h1 class="tlt">
            <ul class="texts">
                <li>วัดเจดีย์หลวง</li>
                <li>Wat Chedi Luang</li>
            </ul>
        </h1>

    </div>
    <section id="slide">

    </section>

    <section id="headcontent">
        <div class="content" id="content1">
            <h1 class="headcontent">Content 1</h1>
            <br>
            <div class="row">
                <img src="//placehold.it/444x222/444/FFF" class="img-thumbnail contentpic">
                <p class="contenttext">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="content" id="content2">
            <h1 class="headcontent">Content 2</h1>
            <br>
            <div class="row">
                <img src="//placehold.it/444x222/444/FFF" class="img-thumbnail contentpic">
                <p class="contenttext">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="content" id="content3">
            <h1 class="headcontent">Content 3</h1>
            <br>
            <div class="row">
                <img src="//placehold.it/444x222/444/FFF" class="img-thumbnail contentpic">
                <p class="contenttext">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
        <div class="container-fluid v-center">
            <div class="row" id="contactrow" role="contact">
                <h1>Contact</h1>
                <hr>
            </div>
            <div class="row" id="maprow">
                <div class="center-block" id="map">
                    <iframe width="600" height="450" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B9%80%E0%B8%88%E0%B8%94%E0%B8%B5%E0%B8%A2%E0%B9%8C%E0%B8%AB%E0%B8%A5%E0%B8%A7%E0%B8%87&key=AIzaSyBWppfyH4eapU66D_diyK5b6XeWfHDZRd0&zoom=17" allowfullscreen></iframe>
            </div>
            </div>
            <div class="row center-block" id="address">
                <address>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</address>
            </div>
        </div>
    </section>





        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="../bower_components/angular/angular.js"></script>
<script src="../bower_components/angular-route/angular-route.js"></script>
<script src="../resources/assets/js/app.js"></script>
<script src="../bower_components/jquery/dist/jquery.js"></script>
<script src="../bower_components/jquery.lettering.js"></script>
<script src="../bower_components/jquery.textillate.js"></script>
<script src="../bower_components/bootstrap/js/dropdown.js"></script>
<script src="../bower_components/angular-touch/angular-touch.js"></script>
<script src="../bower_components/angular-carousel/dist/angular-carousel.js"></script>
<script>
    $('.tlt').textillate({
        in: { effect: 'splat' },
        out: { effect: 'foldUnfold', sync: true },
        loop: true
    });
</script>
//smoooth scrolling
<script> $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 600);
                    return false;
                }
            }
        });
    });
</script>
//main pic fade
<script>$("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
    },  4000);
</script>
<script>

    $('.tlt').textillate({
        in: {
            effect: 'fadeIn',delay: '150',
        },
        out:{
            effect: 'flipOutX',
            delay: '150',
            shuffle:'true'
        },
        loop:true
    });

</script>
@endsection