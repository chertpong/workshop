@extends('app')

@section('content')
    <div ng-controller="homeController">
        <div class="row " id="slidediv">
            <section class="container-fluid" id="sec1">
                <div id="carousel" class="carousel slide carousel-fade col-md-offset-3 fit" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                        <li data-target="#carousel" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner brownshadow">
                        <div class="active item">
                            <img class="img-responsive" src="https://c2.staticflickr.com/6/5655/22360803525_2fe4d688d8_b.jpg">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://c1.staticflickr.com/1/580/22371477131_0090674b52_b.jpg">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://c2.staticflickr.com/6/5795/22360807025_f943722364_b.jpg">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://c1.staticflickr.com/1/629/21738039214_f98f5f4bd7_b.jpg">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://c2.staticflickr.com/6/5703/22334806556_df71d062ab_b.jpg">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="https://c2.staticflickr.com/6/5802/22360840685_21f548b534_b.jpg">
                        </div>
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

        <section id="history">
            <div class="row" id="history-div">
                <div class="container" >
                    <h1 id="history-head">History
                        <ul class="nav navbar-nav navbar-right">
                            <li><button class="button button-circle button-tran hvr-fade" onclick="changeLanguageToTh()">TH</button></li>
                            <li><button class="button button-circle button-tran hvr-fade" onclick="changeLanguageToEn()">EN</button></li>
                        </ul>
                    </h1>
                    <hr>
                    <div class="temple-history">
                        <p id="th-his">วัดเจย์ดีหลวง หรือ "วัดโชติการาม" หรือ "ราชกุฏคาร" ก็เรียกสร้างในสมัยพระเจ้าแสนเมืองรัชกาลที่ 7 แห่งราชวงศ์มังราย(ครองราชย์ พ.ศ. 1929-1944) ไม่ปรากฎปีที่สร้างวัดแน่ชัด
                            วัดเจย์ดีหลวงเป็นพระอารามหลวงแบบโบราณที่แบ่งเขต พุทธาวาส/สังฆวาสอีก 4 ที่ตั้งรายล้อมเขตพุทธาวาสอยู่ทั้ง 4 ทิศ กิจวัตรประจำวัน เช่น ไหว้พระสวดมนต์แต่ละสังฆวาสหรือคณะ ต่างคนต่างทำในวิหารของตน
                            ถ้าเป็นงานสำคัญๆจึงจะร่วมกันในพระวิหารหลวงและประกอบสังฆกรรม อันเป็นสัฆกิจร่วมกันในพระอุโบสถ ซึ่งมีอยู่แห่งเดียวในเขตพุทธาวาสที่ได้ชื่อว่า "วัดเจย์ดีหลวง" ตั้งแต่โบราณกาลมาเพราะถือเอาพระธาตุเจดีย์หลวงเป็นเนมิตกนามกล่าวได้ว่าเป็นเจติย
                            สถานโบราณสูงใหญ่ที่สุดของไทย<br>
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;ช่วงพุทธศักราช 2471-2481 ถือได้ว่าเป็นทศวรรษการปรับปรุงเปลี่ยนแปลง เพื่อสร้างสรรค์พัฒนาใหม่ในทุกๆด้านของวัดเจดีย์หลวงทำการรื้อถอนสิ่งปรักหักพัง แล้วถางป่าที่ขึ้นคลุมเสนาสนะโบราณสถานต่างๆออก
                            แล้วสร้างเสริมเสนาสนะใหม่ให้เป็นวัดสมบูรณ์แบบในเวลาต่อมา จนมีพระสงฆ์สามเณรอยู่ประจำปีละมากๆหลังจากถูกทิ้งร้างมานานและจัดตั้งสำนักเรียน พระปริยัติธรรมขึ้นให้เป็นศูนย์กลางการศึกษาปริยัติศึกษาแผนใหม่ในจังหวัดเชียงใหม่
                            ด้วยการมองการณ์ไกล และผลงานที่เป็นรูปธรรมดังกล่าวจึงทำให้วัดเจดีย์หลวงได้เลื่อฐานะขึ้นเป็น "พระอารามหลวงชั้นตรี" ชนิด "วรวิหาร" เป็น "วัดเจดีย์หลวงวรวิหาร" เมื่อปีพุทธศักราช 2481 เป็นต้นมา
                        </p>

                        <p id="en-his">It was in May , 1932 that I had the auspicious occasion to be ordained as a novice
                            at Wat Chedi Luang when I was approaching the age of 15. The reason is that four persons of my age,
                            who were also my relatives at Muang District, Lamphun Province, had come to stay at Wat Chedi Luang
                            before I came to reside here, the were determined to ordain as novices before the rain retreat,
                            In the meantime, Mr.Saengthong, my older brother, who was doing some business in the city, learned
                            that my relatives were about to be ordained as a novice, He wanted me, to resort to monastive life
                            so that I could study Thai language, It was good luck for me to have such an opportunity, without
                            which I would have goine somewhere else.

                            Upon first entering the temple, the thing that attracted my eye and impressed me was
                            grand ruined pagoda.The condition of the pagoda as i saw it in 1932 is the same even now as i am writing
                            this article(1990).It is wonderful that during the span of 58 years Chedi Luang or the grand pagoda is
                            still in the same condition,not more ruined despite undergoing several earthquqkes, especially the 2 strong
                            earthquakes of September 1989. The reliquaty could survive such incident.It seemed to be a miracle, It should be acknowledge
                            that a certain group of people in Chiang Mai being aware of its significance,met together and decided to do restorations,
                            Cooperation was expressed by the Sangha Order,government allocated restoration budgets for three successive
                            years from 1990 through 1992
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contents">
            <div id="content-section-header" class="col-xs-12 col-md-8 col-md-offset-2"><h2>New content</h2></div>
            <div ng-repeat="content in contents track by $index">
                <div id="[[content +$index]]" class="panel panel-default">
                    <div class="panel-heading">[[content.title]]</div>
                    <div class="panel-body" ng-bind-html="[[content.content]]"></div>
                </div>
            </div>
        </section>


        <section class="contact" id="contact">
            <div class="container-fluid v-center" id="contactbox">
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
            </div>
        </section>


        {{--<script>$("#slideshow > div:gt(0)").hide();--}}
        {{--setInterval(function() {--}}
        {{--$('#slideshow > div:first')--}}
        {{--.fadeOut(1000)--}}
        {{--.next()--}}
        {{--.fadeIn(1000)--}}
        {{--.end()--}}
        {{--.appendTo('#slideshow');--}}
        {{--},  4000);--}}
        {{--</script>--}}

    </div>


@endsection