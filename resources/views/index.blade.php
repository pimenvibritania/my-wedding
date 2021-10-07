
<!DOCTYPE html>
<html style='height:100%'>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>test wedding</title>
        <link rel="icon" type="image/png" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/images/logo.png" >
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta property='og:image' content='https://grinvitation.com/00.asset/images/yanitayugawedding/background_desktop_1421.jpg'>
        <meta property='og:title' content='You Are Invited to The Wedding of Yanita &amp; Yuga'>
        <meta property='og:description' content='Kediaman Mempelai Wanita | December 12th, 2020'>
        <meta property='og:type' content='article'>
        <meta property='og:url' content='https://grinvitation.com/yanitayugawedding'>

        <!-- Facebook and Twitter integration -->

        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

        <!-- Animate.css -->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/bootstrap.css">

        <!-- Magnific Popup -->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/magnific-popup.css">

        <!-- Owl Carousel  -->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/owl.theme.default.min.css">

        <!-- POPUP -->
                <link rel='stylesheet' type='text/css' href='popup_style.css'>

        <!-- Theme style  -->
        <link rel="stylesheet" href="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/css/style.css">

        <!-- Modernizr JS -->
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/modernizr-2.6.2.min.js"></script>
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
                    background-image:url(https://grinvitation.com/00.asset/images/yanitayugawedding/background_mobile_1421.jpg);
                }

                #fh5co-header2
                    {
                        background-image:url(https://grinvitation.com/00.asset/images/yanitayugawedding/background_mobile_1421.jpg);    						 background-attachment: scroll;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                            background-size: cover;
                            height:100vh;
                    }
            }
            @media(min-width : 720px)
            {
                #fh5co-header
                {
                    background-image:url(https://grinvitation.com/00.asset/images/yanitayugawedding/background_desktop_1421.jpg);
                }

                #fh5co-header2
                    {
                        background-image:url(https://grinvitation.com/00.asset/images/yanitayugawedding/background_desktop_1421.jpg);    						background-attachment: fixed;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        background-size: cover;
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
                background-color: #af9e96;
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

                <!-- Link Swiper's CSS -->
        <link rel='stylesheet' href='https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/slider/css/swiper.min.css'>
                    <!-- Demo styles -->
    </head>
    <body>
        <audio loop preload='auto'  id="myAudio">
            <source src="https://grinvitation.com/00.asset/backsound/CalumScott-YouAreTheReason.mp3">
        </audio>

        <a onclick="playAudio()" type="button" id='un-mute' class='float'><img src='https://grinvitation.com/yanitayugawedding/lib_template/elegante2/images/music-mute.png' width='30px;'></a>
        <a onclick="pauseAudio()" type="button" id='mute'  class='float'><img src='https://grinvitation.com/yanitayugawedding/lib_template/elegante2/images/music.png' width='30px;'></a>


        <div class='modal fade right' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalPreviewLabel' aria-hidden='true' style='width:100%;overflow: hidden;' data-backdrop=static; data-keyboard=false;>
            <div class='modal-dialog-full-width modal-dialog momodel modal-fluid' role='document'>
                <div class='modal-content-full-width modal-content '>
                    <div id='fh5co-header2'>
                        <div id='overlay_popup' style='text-align:center; color:white;padding:10px;'>

                            <div style='color:#af9e96;font-family: Lora, serif;margin-top:80px;'>
                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:14px;margin-bottom:5px;letter-spacing:2px;'>
                                Official Wedding Website
                                </span>



                                <span style='color:white;font-family: Cormorant Infant, serif;display:block;font-size:40px;margin-bottom:5px;letter-spacing:-1px;'>
                                Yanita & Yuga
                                </span>

                                <span style='color:white;font-family: Montserrat, sans-serif;display:block;font-size:15px;margin-bottom:5px;'>
                                With all due respect, to prevent the transmission of the COVID-19 pandemic, we would like to ask all guests to wear a mask (except when eating, drinking and taking photos), maintain hand hygiene, and keep social distancing.
                                <br><br>
                                With love, Yanita and Yuga
                                <br><br>
                                </span>

                            </div>
                            <button type='button' class='btn' data-dismiss='modal' onclick='playAudio()' style='background-color:#af9e96;color:white;'>OPEN INVITATION</button>
                            <div style='color:white;font-family: Lora, serif;margin-top:50px;'>
                                <span style='font-family: Montserrat, sans-serif; font-weight:bold;letter-spacing:1px;display:block;margin-top:20px;font-size:10px;'>grinvitation.com</span>
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
                                    <h1>Yanita &amp; Yuga</h1>
                                    <h2>We Are Getting Married</h2>


                                            <div class='gaya' style='background-color:#af9e96'>0<span>DAY</span></div>
                                            <div class='gaya' style='background-color:#af9e96'>0<span>HOUR</span></div>
                                            <div class='gaya' style='background-color:#af9e96'>0<span>MINUTE</span></div>
                                            <div class='gaya' style='background-color:#af9e96'>0<span>SECOND</span></div>
                                            <p><a href='https://calendar.google.com/calendar/r/eventedit?text=Yanita Yuga Wedding Day&amp;dates=20201212T110000/20201212T180000&amp;ctz=Asia/Jakarta&amp;details=Kami akan sangat gembira ketika kita bisa bertemu di acara kami.<br><br>salam hangat<br>Yanita - Yuga&amp;location=Kediaman Mempelai Wanita&amp;pli=1&amp;uid=1521339627addtocalendar&amp;sf=true&amp;output=xml' class='btn btn-default btn-sm' style='color:#af9e96;' target='blank'>Save the date</a></p>
                                    <div style='clear:both'><br></div>
                                    <!--<div class="simply-countdown simply-countdown-one"></div>-->

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
                            <h2 style='color:#af9e96;'>Hello!</h2>
                            <p>In the name of Allah SWT the most beneficent and the most merciful, we are pleased to share joy at the wedding of us</p>

                        </div>
                    </div>
                    <div class="couple-wrap animate-box">
                        <div class="couple-half">
                            <div class="groom">
                                <img src="https://grinvitation.com/00.asset/images/yanitayugawedding/CPW_1421_13-06-19.jpg" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-groom">
                                <h3 style='color:#af9e96;'>Yanita Tri Rachmayanti, S.Pd</h3>
                                <!-- untuk deskripsi mempelai -->
                                <p><i style='font-size:12px;'>The Daughter Of</i><br>Mr. H. Oman Abdul Rahman<br>Mrs. Hj. Rohayati</p>
                            </div>
                        </div>
                        <p class="heart text-center"><i class="icon-heart2" style='color:#af9e96;'></i></p>
                        <div class="couple-half">
                            <div class="bride">
                                <img src="https://grinvitation.com/00.asset/images/yanitayugawedding/CPP_1421_13-06-19.jpg" alt="groom" class="img-responsive">
                            </div>
                            <div class="desc-bride">
                                <h3 style='color:#af9e96;'>Yuga Febrianugrah, S.H</h3>
                                <!-- untuk deskripsi mempelai -->
                                <p><i style='font-size:12px;'>The Son Of</i><br>Mr. H. Yusep Anton Suhartono, S.E<br>Mrs. Hj. Yuyun Widyaningsih</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-gallery" class="fh5co-section-gray">
                <div class="container">
                    <div class="couple-wrap animate-box">
                        <div class="col-md-12" style='text-align:center;'>
                            <img src='https://grinvitation.com/yanitayugawedding/lib_template/elegante2/images/arrum.png' width='100%'><br><br>
                            And of His signs is that He created for you from yourselves mates that you may find tranquillity in them and He placed between you affection and mercy. Indeed in that are signs for a people who give thought.<br>QS Ar-Rum : 21
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-event" class="fh5co-bg" style="background-color:#af9e96; min-height:1050px;">
                <div class="overlay"></div>
                <div class="container" >
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <span>Our Special Events</span>
                        <h2>Wedding Events</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t" >
                        <div class="display-tc" >
                            <div class="col-md-10 col-md-offset-1">


                                        <div class='col-md-6 col-sm-6 text-center' style='margin-bottom:10px;'>
                                            <div class='event-wrap animate-box'>
                                                <h3>
                                                AKAD
                                                </h3>
                                                <div class='event-col'>
                                                    <i class='icon-clock'></i>
                                                    <span>
                                                        09:00
                                                            - 11:00
                                                    </span>
                                                </div>
                                                <div class='event-col'>
                                                    <i class='icon-calendar'></i>
                                                    <span>December 12th, 2020</span>
                                                </div>
                                                <p><label style='font-weight:normal; font-size:22px;'>Kediaman Mempelai Wanita</label><br>Jl. Sirkuit Sentul Rt.04 Rw.06 Ds. Leuwinutug Kec. Citeureup Kab. Bogor</p>


                                            </div>
                                        </div>

                                        <div class='col-md-6 col-sm-6 text-center' style='margin-bottom:10px;'>
                                            <div class='event-wrap animate-box'>
                                                <h3>
                                                WEDDING RECEPTION
                                                </h3>
                                                <div class='event-col'>
                                                    <i class='icon-clock'></i>
                                                    <span>
                                                        11:00
                                                            - 18:00
                                                    </span>
                                                </div>
                                                <div class='event-col'>
                                                    <i class='icon-calendar'></i>
                                                    <span>December 12th, 2020</span>
                                                </div>
                                                <p><label style='font-weight:normal; font-size:22px;'>Kediaman Mempelai Wanita</label><br>Jl. Sirkuit Sentul Rt.04 Rw.06 Ds. Leuwinutug Kec. Citeureup Kab. Bogor</p>


                                            </div>
                                        </div>

                                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                                    <p style='color:white;'><br><br>Please join us for a day of love and laughter and celebrate the union of two hearts when they give each other a promise of sharing lifetime</p>
                                </div>
                                <div style='clear:both;display:block;'></div>
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
                            <span>Our Memories</span>
                            <h2 style='color:#af9e96;'>Gallery</h2>
                            <p></p>
                        </div>
                    </div>
                    <div class="row row-bottom-padded-md">
                        <div class="col-md-12">
                            <ul id="fh5co-gallery-list">


                                <li class='one-third animate-box' data-animate-effect='fadeIn' style='background-image: url(https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_1_11-48-09.jpg); '>
                                    <a href='https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_1_11-48-09.jpg' class='color-'>
                                        <div class='case-studies-summary'>
                                            <span></span>
                                            <h2></h2>
                                        </div>
                                    </a>
                                </li>

                                <li class='one-third animate-box' data-animate-effect='fadeIn' style='background-image: url(https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_2_11-48-13.jpg); '>
                                    <a href='https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_2_11-48-13.jpg' class='color-'>
                                        <div class='case-studies-summary'>
                                            <span></span>
                                            <h2></h2>
                                        </div>
                                    </a>
                                </li>

                                <li class='one-third animate-box' data-animate-effect='fadeIn' style='background-image: url(https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_3_11-48-13.jpg); '>
                                    <a href='https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_3_11-48-13.jpg' class='color-'>
                                        <div class='case-studies-summary'>
                                            <span></span>
                                            <h2></h2>
                                        </div>
                                    </a>
                                </li>

                                <li class='one-third animate-box' data-animate-effect='fadeIn' style='background-image: url(https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_4_11-48-13.jpg); '>
                                    <a href='https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_4_11-48-13.jpg' class='color-'>
                                        <div class='case-studies-summary'>
                                            <span></span>
                                            <h2></h2>
                                        </div>
                                    </a>
                                </li>

                                <li class='one-third animate-box' data-animate-effect='fadeIn' style='background-image: url(https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_5_11-48-13.jpg); '>
                                    <a href='https://grinvitation.com/00.asset/images/yanitayugawedding/galery_1421_5_11-48-13.jpg' class='color-'>
                                        <div class='case-studies-summary'>
                                            <span></span>
                                            <h2></h2>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                            <center>To get the full value of joy you must have someone to divide it with.<br>(Mark Twain)</center>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-event" class="fh5co-bg" style="background-color:#af9e96;">
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

                                                <a href='https://www.google.com/maps/dir//-6.5209602,106.8594687/@-6.5188128,106.8538628,15.04z?hl=id-ID' style='color:white' target='blank'>
                                                    <button class='button_map' style='background-color:#af9e96; width:100%; float:left; color:#ffffff'><span style='display:block; margin-bottom:-10px; font-size:12px;'>Open In</span>Google Maps</button>
                                                </a>
                                                                                        </div>
                                    <div style='display:block; clear:both;'></div>
                                    <div style='background-color:red; text-align:center'>
                                        <!DOCTYPE html>
    <html style='height:100%'>
    <head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style>
    #map-canvas { height:450px;}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnoeeEmBRf90KfK7VVcQWwMUz43zGtE-Y&sensor=false" type="text/javascript"></script>
    </head>
    <body>

    <div id='map-canvas'>
    <iframe
    width='100%'
    height='100%'
    frameborder='0' style='border:0'
    src='https://www.google.com/maps/embed/v1/place?key=AIzaSyDrjr1yktnXr5zrXT0gMWkPGDfr7_gPOQ0
        &q=-6.520960, 106.859469' allowfullscreen>
    </iframe>
    </div>
        </body>
    </html>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-testimonial">
                <div class="container">
                    <div class="row">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                <span>Best Wishes</span>
                                <h2 style='color:#af9e96;'>Friends Wishes</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                                                        <div class='swiper-container'>
                                        <div class='swiper-wrapper'>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Sarah Nurhidayati
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        alhamdulillah yuyun ✨ Barakallahu lakuma wa baraka&#039;alaikuma wa jama&#039;a bainakuma fii Khoir :)
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Bpk Sandra SEKNEG
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga menjadi keluarga sakinah mawaddah warrahmah serta dikaruniai keturunan yang sholeh dan sholehah.. <br />
    <br />
    Aamiin Yaa Robbal&#039;alamiin..
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Bpk Andre Andriyanto dan Istri
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga menjadi keluarga sakinah mawadah warrahmah
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Pryta Untari
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        semoga dilancarkan segala sesuatunya sampai hari H Yanita dan Yuga..❤
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Syahla &amp; Bintang
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga lancar sampai hari H dan menjadi pasangan yang samawa, aamiin🤗❤️
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Nayla
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga persiapan dan acara nya lancar dan semoga samawa aamiin😊😊
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Aa Adad dan Istri
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Barakallahu lakuma wa baraka&#039;alaikuma wa jama&#039;a bainakuma fii Khoir :)
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Rasna dan Farhan
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Congrat happy wadding samawa till jannah aamminnn
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Bpk Toto Rukminto dan Istri
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Mohon maaf, ada acara yg sama keluarga istri.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Kel Besar Bi Yati
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Happy wedding a uga sm teh yanita semoga menjadi keluarga samawa aamiin yra 🤲
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Janah
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Alhamdulillah Yanita, ikut bahagia walaupun tidak mengetahui jalan cerita kalian secara detail. Selamat menempuh hidup baru, semoga menjadi istri sholihah dan suami yang sholih
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Novia Fitriana
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Barakallah 💖 Semogaa lancar segala persiapan dan acaranya nanti
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Sarah Safira
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga lancar sampe hari H ya cuuu
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Tiwi Nurfauziah
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Wish you both Happy ever after ❤️❤️
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Intan dan Suami
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Bismillah<br />
    Ma syaa Allah tabarakaAllah<br />
    <br />
    Semoga Allah mudahkan dan lancarkan pernikahan Nita dan Yuga <br />
    Aamiin <br />
    <br />
    barakAllah Fiykum 🌻
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Eza dan Isty
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        I wish for all best wishes for you, your partner and your family. God bless you Ka Yuga and Ka Nita :)
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Nabel
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Selamat yaa ka yuga dan teh yanita.. Alhamdulillah bisa lanjutin ke jenjang yg serius dan mulia, semoga selalu diberikan keberkahan dalam setiap langkah.<br />
    Sakinah, mawadah, warahmah yaa kakak2ku 🌹💐
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Nurazmi Syahla
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        huaaaa setelah bertahun tahun akhirnya menuju halal jugaaa.... semoga samawa dan cepet kasih keponakan buat akuuuuw, aamiin❤️❤️
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Dina Liftiani
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Setelah bertahun tahun... barakallah ya yun, semoga kalian sllu dalam lindungan Allah SWT dan bahagia selalu<br />
    Love ur both 💛✨
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Jabal
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Moga lancar persiapannya sampai hari H Nita &amp; Yuga😁
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Fadil
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Selamat menempuh hidup baru  dan lancar sampai selesai .
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Eva Mutia
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        selamat ya yanita dan yuga, semoga sakinah mawadah warohmah, bahagia selalu;)
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Shintya dan Dwiky
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Hwaaaa sebentar lagi ya beh🤗🤗, semoga semua lancar, jadi istri Sholehah nya Yuga, new chapter ya beh semoga bahagia selalu 🌈 hwappy for u beh 💙💙
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Windi Pitriasari
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga di berikan kelancaran lancar sampai hari H nya ya say...  Sakinah. Mawadah warohmah ❤❤❤
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Tary Lestary
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        MasyaAllah pasangan fenomenal 😂 semoga segala sesuatunya di permudah sama Allah dan tetap dalam lindungan Allah SWT aamiin 🙏 selamat Nita dan Yuga 👰🕴️
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Nina Hunaeni
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Barakallah yaa Nita&amp;Yuga..❤❤ <br />
    Semoga selalu dilancarkan dari sebelum dan sesudah menikah. Semoga kelak rumahtangga kalian selalu diberikan keberkahan dan kebahagiaan. Diberikan anak yg sholeh dan sholehah.. aamiiin🤗🤗<br />
    Bahagiaa selalu ya, Nita&amp;Yuga!!<br />
    Love You, Nit!!😍❤❤
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Resti Novianti
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga sakinah mawadah warahmah
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Siti Hasya
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga lancar sampai hari H. Barakallah💐💐💐
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Avri Oktaviani
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Barakallah yunn Alhamdulillah sampai juga perjalanan menuju halalnya😍😍😍 lancar, dan sehat selalu insyaallah hadir sampai bertemu nanti ya cantik💕💕
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Syarifah
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Terharu dan ikut senang lihat kamu mau menjalin rumah tangga 😍 semoga selalu di beri kemudahan dan kelancaran sampai hari H 🙏🙏 ❤
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Alaw dan lutfi
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Sebagai manusia yang menyaksikan perjalanan kisah kalian dari mulai aku kenal kamu,  ikut bahagia juga terharu,  semoga kelak rumahtangga nya selalu diberkahi Allah swt,  bahagia selalu,  dan segera diberikan momongan, duet perut ndut ayooo 😋😋💓 love you my best nit sayang!!
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Bpk H. Tri Jaya dan Istri
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga Menjadi pasangan yang SAMAWA, sampai kakek nenek.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Yusgie Sevya
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        “Happy marriage my dear, hope you will be a family is always filled with happiness.” Luv! ❤️🌈
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Ayu Fitria A
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Barakallah neng nita cantikk. <br />
    Semoga semuanya lancar sampai hari H yaa. Samawa ya cantik. <br />
    Aamiin 🤲🏻😘
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Tth Ntaa dan Abang
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        HapPy wedding adeku sayang (yanita &amp; yuga)...<br />
    <br />
    Doa yg terbaik ya buat kalian<br />
    <br />
    ❤ Semoga menjadi keluarga &quot;SAMARA&quot;<br />
    ❤ Setia ampe akhir hayat<br />
    <br />
    Amiin allahumma amiin 😇🤲
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Bpk (Beny) Tri Tama
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Happy wedding
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Mang Dendi dan Istri
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Semoga jadi keluarga yg syakinah mawada wa&#039;rohmah Amin.., aminnn YRA
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Princess &amp; Barbie
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Turut bahagia :))<br />
    Semoga langgeng<br />
    Sampe maut memisahkan<br />
    Aminnnn.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            Yola Dan Suami
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        happy wedding ya 🤗di lancarkan sampai hari H nya,mudah2an jadi keluarga samawa dan cepet di kasih momongan amin 🙏🥰
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class='swiper-slide'>
                                                    <div style='width:80%; font-size:14px; text-align:center; margin-left:10%;margin-right:10%'>
                                                        <h3 style='text-transform:capitalize;'>
                                                            pimen
                                                            <span style='display:block; font-family: Open Sans, Arial, sans-serif; font-size:12px; margin-top:5px; text-transform:lowercase;'>

                                                            </span>
                                                        </h3>
                                                        <p style='font-size:14px; margin-top:15px;'>
                                                        Sorry I couldn&#039;t attend your event, but I always wish you all the best of happiness!<br />
    <br />
    Congratulations on your marriage caping!!
                                                        </p>
                                                    </div>
                                                </div>
                                                                                            </div>
                                        <!-- Add Arrows -->
                                        <div class='swiper-button-next'></div>
                                        <div class='swiper-button-prev'></div>
                                    </div>
                                    <div style='clear:both;'><br><br></div>

                                <div style='width:90%; margin-left:5%; margin-right:5%;'>
                                <form class='form-inline' method='post' action='act-wishes'>
                                    <input type='hidden' name='id_event' value='1421'>

                                    <div class='form-group' style='display:block; width:100%;'>

                                        <input type='hidden' name='header_link' value='https://grinvitation.com/yanitayugawedding'>
                                        <input type='name' class='form-control' id='name' placeholder='Name' name='nama' required style='width:100%;'>

                                    </div>

                                            <div style='clear:both;margin-bottom:5px;'></div>
                                            <div class='form-group' style='display:block; width:100%;'>
                                                <select name='attending' class='form-control' id='attending' required style='width:100%;'>
                                                    <option value=''>Are You Attending ?</option>
                                                    <option value='Attending'>Attending</option>
                                                    <option value='Tentative'>Tentative</option>
                                                    <option value='Not Attending'>Not Attending</option>
                                                </select>
                                            </div>
                                            <div style='clear:both;margin-bottom:5px;'></div>
                                            <div class='form-group' style='display:block; width:100%;'>
                                                <select name='person' class='form-control' id='person' required style='width:100%;'>
                                                    <option value='1'>1 Person</option>
                                                    <option value='2'>2 Persons</option>
                                                </select>
                                            </div>
                                            <div style='clear:both;margin-bottom:5px;'></div>
                                        <div class='form-group'style='display:block; width:100%;'>
                                            <textarea class='form-control' id='wishes' placeholder='Wishes' rows='10' name='isi_ucapan' required style='width:100%;'></textarea>
                                        </div>


                                    <div style='clear:both;margin-bottom:5px;'></div>
                                    <div style='width:100%;'>
                                        <button type='submit' class='btn btn-block' style='color:white; background-color:#af9e96;'>CONFIRM</button>
                                    </div>
                                </form>
                                </div>
                                                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer id="fh5co-footer" role="contentinfo">
                <div class="container">

                    <div class="row copyright">
                        <div class="col-md-12 text-center">
                            <p>
                                <small class="block"></small>
                                <small class="block"><a style='color:#af9e96;' href="">Yanita</a> - <a style='color:#af9e96;' href="">Yuga</a></small>
                                <small class="block"><b>THANK YOU</b></small>
                            </p>
                            <br>
                            <br>
                            <p>
                                    &copy; Yanita & Yuga Wedding Invitation by Grinvitation.
                                <small class="block">
                                    <a style='color:#af9e96;' href='https://www.instagram.com/grinvitation/' target='blank'><i class="icon-instagram"></i> @grinvitaton</a>&nbsp;&nbsp;
                                    <a style='color:#af9e96;' href="https://grinvitation.com" target='blank'><i class="icon-globe"></i> www.grinvitation.com</a>
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
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/jquery.countTo.js"></script>

        <!-- Stellar -->
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/jquery.stellar.min.js"></script>
        <!-- Magnific Popup -->
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/jquery.magnific-popup.min.js"></script>
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/magnific-popup-options.js"></script>

        <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/simplyCountdown.js"></script>
        <!-- Main -->
        <script src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/main.js"></script>

        <script  src="https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/index.js"></script>

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

                tahun = 2020;
                bulan = 12;
                hari = 12;
                jam = 11;
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
        <script src='https://grinvitation.com/yanitayugawedding/lib_template/elegante2/js/slider/js/swiper.min.js'></script>

                <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
        });
        </script>

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
    </body>
</html>
