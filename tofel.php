<?php
   $title = "English Proficiency TOFEL"; 
   include ('header.php') ;
 ?>



<style type="">

/******************************************
EVENTS
******************************************/

.event-title.tagline-message h3 {
    font-size: 64px;
}

.event-title p {
    font-size: 18px;
    padding: 10px 0 20px;
}

.event-boxes .box {
    padding: 10px;
}

.event-desc {
    padding: 20px 20px 10px;
}

.box .event-desc h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    padding: 0;
}

.box .event-desc small {
    background-color: #111;
    color: #ffffff;
    padding: 0 10px;
}

.teammembers img {
    width: 100%;
}

.teammembers:hover {
    cursor: pointer;
}

teammembers .magnifier {
    overflow: hidden;
}

.teammembers .magnifier p {
    padding-bottom: 10px;
}

.teammembers:hover .magnifier,
.entry:hover .magnifier {
    zoom: 1;
    filter: alpha(opacity=100);
    opacity: 1;
}

.teammembers {
    overflow: hidden;
    position: relative;
}

.visible-buttons1 {
    visibility: hidden;
    margin: 0 auto;
    opacity: 0;
    position: absolute;
    text-align: center;
    -webkit-transition: all 0.7s ease 0s;
    -moz-transition: all 0.7s ease 0s;
    -ms-transition: all 0.7s ease 0s;
    -o-transition: all 0.7s ease 0s;
    transition: all 0.7s ease 0s;
    bottom: -50%;
    left: 0;
    right: 0;
    padding: 50px 20px 40px;
    position: absolute;
    text-align: center;
}

.visible-buttons1 h4 {
    padding: 0;
    margin: 0;
    font-size: 18px;
}

.teammembers .magnifier {
    left: 0 !important;
    bottom: 0 !important;
    right: 0 !important;
    top: 0 !important;
}

.entry:hover .visible-buttons1 {
    opacity: 1;
    bottom: 0;
    visibility: visible;
}

.teambuttons p {
    color: #ffffff;
    padding: 0 30px 10px;
}

.teammembers .social-links i {
    color: #ffffff;
}

.teammembers .social-links a {
    color: #ffffff;
    display: inline-block;
    position: relative;
    width: 30px;
    font-size: 20px;
}

.teamdesc {
    border: 1px solid #eee;
    padding: 30px 30px;
}

.teamdesc h4 {
    padding: 0;
    margin: 0 0 5px;
    font-weight: 700;
    font-size: 18px;
}

.teamdesc p {
    display: block;
    font-style: italic;
    padding-bottom: 0;
    margin: 0;
}


.nopadtop {
    padding-top: 0 !important;
}
.section.gb {
    background-color: #f6f6f6;
}
.parallax {
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    height: 100%;
    position: relative;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.parallax.parallax-off {
    background-attachment: scroll;
    display: block;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    position: relative;
    background-position: top center;
    vertical-align: sub;
    width: 100%;
    z-index: 2;
}



/******************************************
SECTIONS
******************************************/

.event-section {
    height: 100vh;
    height: 100%;
    padding: 5rem 0;
}

.parallax {
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    height: 100%;
    position: relative;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.parallax.parallax-off {
    background-attachment: scroll;
    display: block;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    position: relative;
    background-position: top center;
    vertical-align: sub;
    width: 100%;
    z-index: 2;
}

.no-scroll-xy {
    overflow: hidden !important;
    -webkit-transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    -ms-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.boxed {
    box-shadow: 0 30px 50px 0 rgba(1, 1, 1, 0.18);
    padding: 8rem 4rem 8rem;
    background-color: #ffffff;
    margin-top: -60px;
}

.boxed.boxedp4 {
    padding-top: 4rem;
}

.section {
    background-color: #ffffff;
    padding: 8rem 0;
    position: relative;
    display: block;
}

.section-title {
    margin-bottom: 45px;
}

.text-widget h3,
.section-title h3 {
    margin: 0 0 25px;
    padding: 0;
    line-height: 1;
    font-size: 30px;
    font-weight: 700;
}

.section-title p {
    max-width: 800px;
    margin: 0 auto;
    padding: 0;
    font-size: 16px;
    font-family: 'Droid Serif', sans-serif;
    font-style: italic;
}

.section.gb {
    background-color: #f6f6f6;
}

.section.db {
    background-color: #000000;
}

.overlay {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
    background: url(images/pattern.png) repeat center center rgba(0, 0, 0, 0.7);
}

.video-section {
    position: relative;
}

.slider-bottom {
    position: absolute;
    bottom: 40px;
    left: 0;
    font-size: 10px;
    text-transform: uppercase;
    color: #ffffff;
    letter-spacing: 3px;
    z-index: 11;
    right: 0;
    margin: auto;
    text-align: center;
}

.slider-bottom i {
    display: block;
    font-size: 14px;
    padding: 10px;
}

.home-text-wrapper {
    display: table;
    width: 100%;
    height: 100%;
    max-width: 900px;
    position: relative;
    text-align: center;
    z-index: 11;
}

.home-content {
    position: relative;
}

.home-message {
    display: table-cell;
    height: 100%;
    vertical-align: middle;
}

.home-message p {
    font-size: 54px;
    color: #ffffff;
    padding: 0;
    margin: 0;
    font-weight: 700;
}

.home-message small {
    font-size: 16px;
    font-family: 'Droid Serif', sans-serif;
    font-style: italic;
    display: block;
    padding: 20px 0 35px;
    margin: 0;
}

.nopadtop {
    padding-top: 0 !important;
}

.box {
    background-color: #ffffff;
    padding: 4rem;
    position: relative;
    z-index: 11;
}

.box p {
    padding: 0;
    margin-bottom: 15px;
}

.box i {
    margin-bottom: 30px;
    display: inline-block;
    line-height: 1;
    font-size: 46px
}

.box h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 20px;
    padding: 0;
}

.m30 {
    margin-top: -60px;
}

.readmore {
    font-weight: 700;
    font-size: 15px;
}

.readmore:after {
    content: "\f107";
    vertical-align: middle;
    padding-left: 5px;
    font-family: "Flaticon";
    font-size: 11px;
}

.image-box {
    position: relative;
}

.image-box .overlay {
    background-image: none;
    border-radius: 6px;
    background-color: rgba(0, 0, 0, 0.2);
}

.image-box img {
    width: 100%;
}

.image-box h4 a,
.image-box h4 {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 50%;
    z-index: 1;
    font-size: 20px;
    margin: -7px auto;
    color: #ffffff;
}

hr.invis {
    border: 0;
    margin: 30px 0;
}
.colorpaste
{
  background-color: #01bacf;
  text-transform: uppercase;
}
####upcoming
.newclass
{
  background-color: #black;
  color: white;
}
</style>


<section class="parallax event-section" data-stellar-background-ratio="0.5" style="background-image:url('img/ukevent.jpg') ;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h3 class="  shadow">Study in the UK with Robert Gordon University  13th May 2021</h3>
                            <p class="whitingcheck">13 - 15th May, 2021, Dhaka , Bangladesh - Limited number of guests</p>
                            <a href="#" class="btn btn-primary">GET TICKETS</a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

       <section class="section gb nopadtop">
            <div class="container">
                <div class="row event-boxes">
                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="img/oxford.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste" >Day 1</small>
                            <h4  class="check">Gathering & University of Oxford</h4>
                            <p>The University Of Oxford, established in 1096 and situated in Oxford, England, is the oldest university in the English speaking world. In less than a century, Oxford had achieved an important set of learning and won the praises of popes, kings, and sages by virtue of its antiquity, curriculum, a philosophical system, and privileges.The University’s estate has been growing at around 5% per annum for the last 15 years</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="img/leeds.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Day 2</small>
                            <h4  class="check">University of Leeds</h4>
                            <p>The University of Leeds, established in 1904, is one of the largest higher education institutions in the UK with more than 39,000 students including 9,000 international students from over 170 different countries. Leeds is the top 40 most international university in the world (Times Higher Education 2019) and has been welcoming international students for over 100 years with a global network of nearly 270,000 alumni from over 190 countries including 6 Nobel laureates.</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="box m30">
                            <img src="img/liverpool.jpg" alt="" class="img-responsive">
                            <div class="event-desc">
                            <small style="background-color: #01bacf;" class="colorpaste">Day 3</small>
                            <h4  class="check">University of Liverpool & Conclusion</h4>
                            <p>Founded in 1881, University of Liverpool is amongst the best universities in the UK. It offers a wide range of undergraduate, postgraduate and research programs in popular disciplines including humanities and social sciences, science and engineering and life sciences and management studies. </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>



        <section class="section" style="background-color: black; color: white;" >
            <div class="container">
                <div class="section-title text-center">
                    <h3 class="check uppering">Upcomming Events</h3>
                    <p>At our events, you can meet university representatives and discuss your study prospects, campus life and more in person. You can also have your application assessed and submitted, if sufficient. We currently have 3 active events.</p>
                </div><!-- end title -->

                <div class="row text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="teammembers">
                            <div class="entry">
                                <img src="img/canadaevent.jpg" alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="visible-buttons1 teambuttons">
                                        <p>Including Univeristy of Saskatchewan, University of Toronto, McGill University & many more!</p>
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-skype"></i></a>
                                        </div><!-- end social -->
                                    </div>
                                </div>
                            </div><!-- end box -->
                            <div class="teamdesc Upcomming">
                                <h4 class="check">Education Expo Canada</h4>
                                <p>30th june, 2021</p>
                            </div><!-- end teamdesc -->
                        </div><!-- end teammembers -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="teammembers">
                            <div class="entry">
                                <img src="img/usevent.jpg"  alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="visible-buttons1 teambuttons">
                                        <p>Including Harvard University, University of California, Yale University &
                                        many more!</p>
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-skype"></i></a>
                                        </div><!-- end social -->
                                    </div>
                                </div>
                            </div><!-- end box -->
                            <div class="teamdesc ">
                                <h4 class="check">Education Fair US</h4>
                                <p>13th July, 2021</p>
                            </div><!-- end teamdesc -->
                        </div><!-- end teammembers -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="teammembers">
                            <div class="entry">
                                <img src="img/germanyevent.jpg"  alt="" class="img-responsive">
                                <div class="magnifier">
                                    <div class="visible-buttons1 teambuttons">
                                        <p>We’re committed to work and play our client meeting room transforms  into a table tennis</p>
                                        <div class="social-links">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-skype"></i></a>
                                        </div><!-- end social -->
                                    </div>
                                </div>
                            </div><!-- end box -->
                            <div class="teamdesc">
                                <h4 class="check">Education Expo Germany</h4>
                                <p>17th September, 2021</p>
                            </div><!-- end teamdesc -->
                        </div><!-- end teammembers -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>



<?php include ('footer.php') ?>