@extends('app')

@section('content')
    <div class="row" id="mainrow">
        <section class="container-fluid" id="sec1">
            <div id="slideshow">
                <div>
                    <img  src="https://c2.staticflickr.com/6/5655/22360803525_2fe4d688d8_b.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="https://c1.staticflickr.com/1/580/22371477131_0090674b52_b.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5795/22360807025_f943722364_b.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="https://c1.staticflickr.com/1/629/21738039214_f98f5f4bd7_b.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5703/22334806556_df71d062ab_b.jpg" class="img-responsive">
                </div>
                <div>
                    <img src="https://c2.staticflickr.com/6/5802/22360840685_21f548b534_b.jpg" class="img-responsive">
                </div>
            </div>
        </section>

       <div class="row">
           <div id="temple-name" class="col-xs-12 col-md-6 col-md-offset-3">
               <h1 class="tlt">
                   <ul class="texts">
                       <li>วัดเจดีย์หลวง</li>
                       <li>Wat Chedi Luang</li>
                   </ul>
               </h1>
           </div>
       </div>

    </div>
    <section id="history">
            <h1 id="history-head">History
                <ul class="nav navbar-nav navbar-right" id="clang">
                    <li><button class="button button-circle button-tran hvr-fade" onclick="changeLanguageToEn()">TH</button></li>
                    <li><button class="button button-circle button-tran hvr-fade" onclick="changeLanguageToTh()">EN</button></li>
                </ul>
            </h1>
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

                <p id="en-his">It was in May, 1932 that i had the aus

                </p>
            </div>
    </section>

    <section id="headcontent">
        <div class="content" id="content1">
            <h1 class="headcontent">Content 1</h1>
            <br>
            <div class="row contentrow">
                <img src="//placehold.it/444x222/444/FFF" class="img-thumbnail contentpic">
                <p class="contenttext">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="content" id="content2">
            <h1 class="headcontent">Content 2</h1>
            <br>
            <div class="row contentrow">
                <img src="//placehold.it/444x222/444/FFF" class="img-thumbnail contentpic">
                <p class="contenttext">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
            </div>
        </div>
        <div class="content" id="content3">
            <h1 class="headcontent">Content 3</h1>
            <br>
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



@endsection