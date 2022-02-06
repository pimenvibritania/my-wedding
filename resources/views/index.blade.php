
<!DOCTYPE html>
<html style='height:100%'>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yayang & Pimen Wedding</title>
        <link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}" >
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta property="og:image" content="https://i.imgur.com/7H6DrbU.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1024">
        <meta property="og:image:height" content="1024">
        <meta property='og:title' content='You Are Invited to The Wedding of Yayang &amp; Pimen'>
        <meta property='og:description' content='Villa Yudhistira | Saturday, February 12th, 2022'>
        <meta property='og:type' content='article'>

        <!-- Facebook and Twitter integration -->

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

        <!-- Animate.css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/owl.theme.default.min.css">

        <!-- POPUP -->
        <link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/popup_style.css'>

        <!-- Theme style  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/styling.css">

        <link rel="stylesheet" href="{{asset('sakura-master/dist/sakura.css')}}" />

        <link rel="stylesheet" href="{{asset('css/front.css')}}">
        <!-- Modernizr JS -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <style>

            #overlay_popup {
                    position: fixed; /* Sit on top of the page content */
                    width: 100%; /* Full width (cover the whole page) */
                    height: 100%; /* Full height (cover the whole page) */
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background-color: rgba(0,0,0,0.5); /* Black background with opacity */;
                }

            @media(max-width : 720px)
            {
                #fh5co-header
                {

                    background-image:url({{asset('assets/images/background_mobile_blur.jpg')}});
                }

                #fh5co-header2
                    {

                        background-image:url({{asset('assets/images/background_mobile_blur.jpg')}});
                        background-attachment: scroll;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height:100vh;
                    }
            }
            @media(min-width : 720px)
            {
                #fh5co-header
                {
                    background-image:url({{asset('assets/images/background_desktop.jpg')}});

                }

                #fh5co-header2
                    {
                        background-image:url({{asset('assets/images/background_desktop.jpg')}});
                        background-attachment: fixed;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height:100vh;
                    }
            }


            .float
            {
                position: fixed;
                width: 50px;
                height: 50px;
                bottom: 95px;
                right: 20px;
                background-color: #DE8081;
                opacity: 0.5;
                color: #FFF;
                border-radius: 50px;
                text-align: center;
                padding-top:9px;
                z-index: 1;

            }

            .videoWrapper
            {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                padding-top: 25px;
                height: 0;
            }
            .videoWrapper iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

        </style>
        <style>
            #map-canvas { height:450px;}
        </style>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnoeeEmBRf90KfK7VVcQWwMUz43zGtE-Y&sensor=false" type="text/javascript"></script>
                <!-- Link Swiper's CSS -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/css/swiper.min.css'>
                    <!-- Demo styles -->
    </head>
    <body>
        <audio loop preload='auto'  id="myAudio">
            <source src="{{asset('assets/audio/lajang.mp3')}}">
        </audio>

        <a onclick="playAudio()" type="button" id='un-mute' class='float'><img src='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/images/music-mute.png' width='30px;'></a>
        <a onclick="pauseAudio()" type="button" id='mute'  class='float'><img src='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/images/music.png' width='30px;'></a>


        <div class='modal fade right' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalPreviewLabel' aria-hidden='true' style='width:100%;overflow: hidden;' data-backdrop=static; data-keyboard=false;>
            <div class='modal-dialog-full-width modal-dialog momodel modal-fluid' role='document'>
                <div class='modal-content-full-width modal-content '>
                    <div id='fh5co-header2'>
                        <div id='overlay_popup' style='text-align:center; color:white;padding:10px;'>

                            <div style='color:#DE8081;font-family: Lora, serif;margin-top:10px;'>
                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:14px;margin-bottom:40px;letter-spacing:2px;'>
                                Official Wedding Website
                                </span>

                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:20px;font-weight:bold;letter-spacing:2px;'>
                                Hi,
                                </span>

                                <span style='color:white;font-family: Cormorant Infant, serif;display:block;font-size:35px;margin-bottom:25px;letter-spacing:-1px;'>
                                {{$name}}
                                </span>

                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:14px;letter-spacing:2px;'>
                                We are inviting you to join our wedding.
                                </span>

                                <span style='color:white;font-family: Cormorant Infant, serif;display:block;font-size:40px;margin-bottom:5px;letter-spacing:-1px;'>
                                Yayang & Pimen
                                </span>

                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:15px;margin-bottom:5px;'>
                                With all due respect, to prevent the transmission of the COVID-19 pandemic, we would like to ask all guests to wear a mask (except when eating, drinking and taking photos), maintain hand hygiene, and keep social distancing.
                                <br><br>
                                With love, Yayang and Pimen
                                <br><br>
                                </span>

                            </div>
                            <button type='button' class='btn' data-dismiss='modal' onclick='playAudio()' style='background-color:#DE8081;color:white;'>OPEN INVITATION</button>
                            <div style='color:white;font-family: Lora, serif;margin-top:50px;'>
                                <span style='font-family: Montserrat, sans-serif; font-weight:bold;letter-spacing:1px;display:block;margin-top:20px;font-size:10px;'>pimenvibritania.tech</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-loader"></div>

        <div id="pages">
            <nav class="fh5co-nav" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="fh5co-logo"><a href="">Wedding<strong>.</strong></a></div>
                        </div>



                    </div>

                </div>
            </nav>

            <header id="fh5co-header" class="fh5co-cover" role="banner" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="display-t">
                                <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                    <h1>Yayang &amp; Pimen</h1>
                                    <h2>We Are Getting Married</h2>
                                            <div class='gaya' id="hitungmundur1" style='background-color:#DE8081'>0<span>DAY</span></div>
                                            <div class='gaya' id="hitungmundur2" style='background-color:#DE8081'>0<span>HOUR</span></div>
                                            <div class='gaya' id="hitungmundur3" style='background-color:#DE8081'>0<span>MINUTE</span></div>
                                            <div class='gaya' id="hitungmundur4" style='background-color:#DE8081'>0<span>SECOND</span></div>
                                    <div style='clear:both'><br></div>
                                    <p>
                                        <a target="_blank" href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Yayang%20Pimen%20Wedding%20Day&dates=20220212T090000/20220212T170000&details=Kami+akan+sangat+gembira+ketika+kita+bisa+bertemu+di+acara+kami.%3Cbr%3E%3Cbr%3Esalam+hangat%3Cbr%3EYayang+-+Pimen&location=Villa+Yudhistira,+Jl.+Raya+Cicatih,+Bangbayang,+Kec.+Cicurug,+Kabupaten+Sukabumi&pli=1&uid=1521339627addtocalendar&sf=true&output=xml" class='btn btn-default btn-sm' style='color:#DE8081;' target='blank'>Save the date</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="fh5co-couple">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <h2 style='color:#DE8081;'>Hello!</h2>
                            <p>In the name of Allah SWT the most beneficent and the most merciful, we are pleased to share joy at the wedding of us</p>

                        </div>
                    </div>
                    <div class="couple-wrap animate-box">
                        <div class="couple-half">
                            <div class="groom">
                                <img src="{{asset('assets/images/CPW.png')}}" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-groom">
                                <h3 style='color:#DE8081;'>Siti Khodijah al-Ayyubi</h3>
                                <!-- untuk deskripsi mempelai -->
                                <p><i style='font-size:12px;'>The Daughter Of</i><br> Mr. K.M. Daud al-Ayyubi<br>Mrs. Evi Mahdalena</p>
                            </div>
                        </div>
                        <p class="heart text-center"><i class="icon-heart2" style='color:#DE8081;'></i></p>
                        <div class="couple-half">
                            <div class="bride">
                            <img src="{{asset('assets/images/CP.png')}}" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-bride">
                                <h3 style='color:#DE8081;'>Pirman Abdurohman</h3>
                                <!-- untuk deskripsi mempelai -->
                                <p><i style='font-size:12px;'>The Son Of</i><br>Mr. Sahidin<br>Mrs. Ai Mahbubah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="container">
                    <div class="couple-wrap animate-box">
                        <div class="col-md-12" style='text-align:center;'>
                            <img src='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/images/arrum.png' width='100%'><br><br>
                            And of His signs is that He created for you from yourselves mates that you may find tranquillity in them and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.<br>QS Ar-Rum : 21
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-event" class="fh5co-bg" style="background-color:#DE8081; min-height:1050px;">
                <div class="overlay"></div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <span>Our Special Events</span>
                            <h2>Wedding Events</h2>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class='col-md-auto col-md-offset-3 col-sm-6 text-center' style='margin-bottom:10px;'>
                            <div class='event-wrap animate-box loc'>
                                <h3>
                                    RECEPTION
                                </h3>
                                <div class='event-col'>
                                    <i class='icon-clock'></i>
                                    <span>
                                        09:00
                                            - 17:00
                                    </span>
                                </div>
                                <div class='event-col'>
                                    <i class='icon-calendar'></i>
                                    <span>February 12th, 2022</span>
                                </div>
                                <p><label style='font-weight:normal; font-size:22px;'>Villa Yudhistira</label><br>Jl. Raya Cicatih, Bangbayang, Kec. Cicurug, Sukabumi Regency, Jawa Barat 43359</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <p style='color:white;'><br><br>Please join us for a day of love and laughter and celebrate the union of two hearts when they give each other a promise of sharing lifetime</p>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center animate-box">
                        <span style="
                            font-family: Work Sans, Arial, sans-serif;
                            font-size: 13px;
                            font-weight:600;
                            letter-spacing: 2px;
                            ">KEEP ON</span>
                        <h2 style="
                            font-family: Sacramento, Arial, serif;
                            font-size: 40px;
                            line-height:1.5;
                            font-weight:bold;
                            color: #DE8081;
                            ">Health Protocol</h2>
                    </div>
                </div>
                <div class="container-test">
                    <div class="overlay"></div>
                    <div class="card-test">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/mask-white.png">
                                </div>
                                <p class="text-center">Mask Required</p>
                            </div>
                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/hand-white.png">
                                </div>
                                <p class="text-center">Using Hand Sanitizer</p>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/sabun-white.png">
                                </div>
                                <p class="text-center">Wash Your Hands</p>
                            </div>
                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/suhu-white.png">
                                </div>
                                <p class="text-center">Check Body Temperature</p>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/kerumunan-white.png">
                                </div>
                                <p class="text-center">No Crowding</p>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-center color-white">
                                    <img src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn/images/jarak-white.png">
                                </div>
                                <p class="text-center">Keep Distance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-event" class="fh5co-bg" style="background-color:#DE8081;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <span>Our Location</span>
                            <h2>Find Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="display-t">
                            <div class="display-tc">
                                <div class="col-md-10 col-md-offset-1">
                                    <div style='width:100%'>
                                        <a href='https://www.google.com/maps/dir//Villa+Yudhistira,+Jalan+Raya+Cicatih,+Bangbayang,+Sukabumi+Regency,+West+Java/@-6.784054,106.7440671,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x2e69cdc8aa945073:0x9a7a07df8dee5c5d!2m2!1d106.7790866!2d-6.7840552' style='color:white' target='blank'>
                                            <button class='button_map' style='background-color:#DE8081; width:100%; float:left; color:#ffffff'><span style='display:block; margin-bottom:-10px; font-size:12px;'>Open In</span>Google Maps</button>
                                        </a>
                                    </div>
                                    <div style='display:block; clear:both;'></div>
                                    <div style='background-color:red; text-align:center'>
                                        <div id='map-canvas'>
                                            <iframe
                                            width='100%'
                                            height='100%'
                                            frameborder='0' style='border:0'
                                            src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63390.132782258035!2d106.7440671!3d-6.784054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cdc8aa945073%3A0x9a7a07df8dee5c5d!2sVilla%20Yudhistira!5e0!3m2!1sen!2sid!4v1644157795081!5m2!1sen!2sid' allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center animate-box">
                                <span style="
                                    font-family: Work Sans, Arial, sans-serif;
                                    font-size: 13px;
                                    font-weight:600;
                                    letter-spacing: 2px;
                                    ">OUR MEMORIES</span>
                                <h2 style="
                                    font-family: Sacramento, Arial, serif;
                                    font-size: 40px;
                                    line-height:1.5;
                                    font-weight:bold;
                                    color: #DE8081;
                                    ">Gallery</h2>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/1.jpg')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/2.jpg')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/3.jpg')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/4.jpg')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/5.jpg')}}"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('assets/images/6.jpg')}}"/>
                        </div>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block"></small>
                                <small class="block"><a style='color:#DE8081;' target="_blank" href="https://instagram.com/yayang010596">Yayang</a> - <a style='color:#DE8081;' target="_blank" href="https://instagram.com/pimenvibritania">Pimen</a></small>
                                <small class="block"><b>THANK YOU</b></small>
                            </p>
                            <br>
                            <br>
                            <p>
                                &copy; Yayang & Pimen Wedding Invitation by pimenvibritania.
                                <small class="block">
                                    <a style='color:#DE8081;' href='https://www.instagram.com/pimenvibritania/' target='blank'><i class="icon-instagram"></i> @pimenvibritania</a>&nbsp;&nbsp;
                                    <a style='color:#DE8081;' href="https://pimenvibritania.tech" target='blank'><i class="icon-globe"></i> www.pimenvibritania.tech</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
        </div>

        <script src="{{asset('sakura-master/dist/sakura.js')}}" text="text/javascript"></script>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

        <!-- jQuery -->
        <!--<script src="js/jquery.min.js"></script>-->

        <!-- jQuery Easing -->
        <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>

        <!-- Bootstrap -->
        <!--<script src="js/bootstrap.min.js"></script>-->

        <!-- Waypoints -->
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>

        <!-- Carousel -->

        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

        <!-- countTo -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/jquery.countTo.js"></script>

        <!-- Stellar -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/jquery.stellar.min.js"></script>
        <!-- Magnific Popup -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/jquery.magnific-popup.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/magnific-popup-options.js"></script>

        <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/simplyCountdown.js"></script>
        <!-- Main -->
        <script src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/main.js"></script>

        <script  src="https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/index.js"></script>

        <script>
            var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

            // default example
            simplyCountdown('.simply-countdown-one', {
                year: d.getFullYear(),
                month: d.getMonth() + 1,
                day: d.getDate()
            });

            //jQuery example
            $('#simply-countdown-losange').simplyCountdown({
                year: d.getFullYear(),
                month: d.getMonth() + 1,
                day: d.getDate(),
                enableUtc: false
            });
        </script>
        <script>
        Hitung();

        function Hitung()
        {

            tahun = 2022;
            bulan = 02;
            hari = 12;
            jam = 09;
            menit = 00;
            detik = 00;


            setTimeout(function()
            {
                tglTarget = new Date(tahun, (bulan - 1), hari, jam, menit, detik, 00);
                tglSkrg = new Date();
                tglSkrg = new Date(tglSkrg.getFullYear(), tglSkrg.getMonth(), tglSkrg.getDate(), tglSkrg.getHours(), tglSkrg.getMinutes(), tglSkrg.getSeconds(), 00, 00);
                var sisaHari = parseInt((tglTarget-tglSkrg)/86400000);
                var sisaJam = parseInt((tglTarget-tglSkrg)/3600000);
                var sisaMenit = parseInt((tglTarget-tglSkrg)/60000);
                var sisaDetik = parseInt((tglTarget-tglSkrg)/1000);
                detik = sisaMenit*60;
                detik = sisaDetik-detik;
                menit = sisaJam*60;
                menit = sisaMenit-menit;
                jam = sisaHari*24;
                jam = (sisaJam-jam) < 0 ? 0 : sisaJam-jam;
                hari = sisaHari;
                mulaiHitung(hari,jam, menit,detik,tahun);
            }, 1000);
        }

        function mulaiHitung(hari, jam, menit, detik, tahun){
        document.getElementById("hitungmundur1").innerHTML=""+hari+"<span>DAYS</span>";
        document.getElementById("hitungmundur2").innerHTML=""+jam+"<span>HOURS</span>";
        document.getElementById("hitungmundur3").innerHTML=""+menit+"<span>MINUTES</span>";
        document.getElementById("hitungmundur4").innerHTML=""+detik+"<span>SECONDS</span>";
        Hitung();
        }

        </script>

    <!-- Swiper JS -->
        <script src='https://cdn.jsdelivr.net/gh/pimenvibritania/cdn@master/js/swiper.min.js'></script>

                <!-- Initialize Swiper -->

        <script>
        document.getElementById('mute').style.display = 'none';

        var x = document.getElementById("myAudio");
        function playAudio() {
            x.play();
            document.getElementById('un-mute').style.display = 'none';
            document.getElementById('mute').style.display = 'inline-block';
        }
        function pauseAudio() {
            x.pause();
            document.getElementById('mute').style.display = 'none';
            document.getElementById('un-mute').style.display = 'inline-block';
        }
        </script>
        <script>
            var sakura = new Sakura('body', {
                colors: [
                    {
                        gradientColorStart: 'rgba(255, 183, 197, 0.9)',
                        gradientColorEnd: 'rgba(255, 197, 208, 0.9)',
                        gradientColorDegree: 120,
                    },
                    {
                        gradientColorStart: 'rgba(255,189,189)',
                        gradientColorEnd: 'rgba(227,170,181)',
                        gradientColorDegree: 120,
                    },
                    {
                        gradientColorStart: 'rgba(212,152,163)',
                        gradientColorEnd: 'rgba(242,185,196)',
                        gradientColorDegree: 120,
                    },
                ],
                delay: 200,
            });
        </script>
        <script>
            const swiper = new Swiper('.swiper-container', {
                loop: true, // creates a infinite loop of slides
                navigation: { // activate navigation with navigation buttons
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {// activate paginations
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                },

                // keyboard and mousewheel navigation
                keyboard: true,
                mousewheel: true,

                // for other than sliding effect

                // effect: 'creative',
                // creativeEffect: {
                //  prev: {
                //      // will set `translateZ(-400px)` on previous slides
                //      translate: [0, 0, -400],
                //  },
                //  next: {
                //      // will set `translateX(100%)` on next slides
                //      translate: ['100%', 0, 0],
                //  },
                // },
                // effect: 'coverflow',
            })
        </script>
    </body>
</html>
