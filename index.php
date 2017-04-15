<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to ORS!</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include 'topmenu.php';
    ?>

<!--
    <div class="secondCarousel">
        <div class="container">
            <div class="row">
                <div id="mobile-carousel anotherCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_1.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 1</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img- rounded" src="images/sq_2.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 2</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_3.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 3</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_4.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 4</span>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_5.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 5</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_6.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 6</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_7.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 7</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xs-3">
                                    <a href="#"><img class="img-responsive img-rounded" src="images/sq_8.jpg">
                                        <div class="carousel-caption" style="color: white; font-size: 20px;">
                                            <span>Demo Image 8</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#anotherCarousel" data-slide="prev" style="top:25%"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#anotherCarousel" data-slide="next" style="top:25%"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
-->

    <!--
        <span id="crossfade">
            <a href="itemlist.php?category=Laptops">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">

                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
            </a>
        </span>
-->

    <div class="container">
                <div class="row">
    <div id="carousel">
        <h1>Mobile Phones</h1>
            
                    <div id="mobile-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="itemdetails.php?itemcode=$item_code>" data-toggle="modal" data-target="#urmin-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/iphone-7.png">
                                            <div class="carousel-caption">
                                                <span>iPhone 7</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#baghban-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/galaxy-s8.png">
                                            <div class="carousel-caption">
                                                <span>Samsung Galaxy S8</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bansiram-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/google-pixel.jpg">
                                            <div class="carousel-caption">
                                                <span>Google Pixel</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bhagat-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/oneplus-3t.jpg">
                                            <div class="carousel-caption">
                                                <span>Oneplus 3T</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#autobat-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/lg-g6.png">
                                            <div class="carousel-caption">
                                                <span>LG G6</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#techno-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/lumia-950.jpg">
                                            <div class="carousel-caption">
                                                <span>Microsoft Lumia 950</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#shree-krishna-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/xiaomi_redmi_note_4.jpg">
                                            <div class="carousel-caption">
                                                <span>Xiaomi RedMI Note 4</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#ravi-modal">
                                            <img class="img-responsive img-rounded" src="images/phones/nexus_6p.png">
                                            <div class="carousel-caption">
                                                <span>Nexus 6P</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#mobile-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#mobile-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>



<!--
        <span id="crossfade">
            <a href="itemlist.php?category=Laptops">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">

                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
            </a>
        </span>
-->
    <div class="container">
                <div class="row">
    <div id="carousel">
        <h1>Cameras</h1>
            
                    <div id="camera-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#urmin-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/canon-70d.jpg">
                                            <div class="carousel-caption">
                                                <span>Canon EOS 70D</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#baghban-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/canon-eos-6d.jpg">
                                            <div class="carousel-caption">
                                                <span>Canon EOS 6D</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bansiram-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/canon-EOS_5D.jpg">
                                            <div class="carousel-caption">
                                                <span>Canon EOS 5D</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bhagat-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/nikon-4281679463.png">
                                            <div class="carousel-caption">
                                                <span>Nikon 4281</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#autobat-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/sony-1.jpg">
                                            <div class="carousel-caption">
                                                <span>Sony Cybershot</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#techno-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/sony-Compact-Digital-Cameras.jpg">
                                            <div class="carousel-caption">
                                                <span>Sony Digital Camera</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#shree-krishna-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/Sony-DSC-W810.jpg">
                                            <div class="carousel-caption">
                                                <span>Sony DSC W810</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#ravi-modal">
                                            <img class="img-responsive img-rounded" src="images/camera/sony.jpg">
                                            <div class="carousel-caption">
                                                <span>Sony Cybershot C128</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#camera-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#camera-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>



   

<!--
        <span id="crossfade">
            <a href="itemlist.php?category=Laptops">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">
                <img class="bottom" src="images/sq_1.jpg">

                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
                <img class="top" src="images/sq_2.jpg">
            </a>
        </span>
-->

        
    <div class="container">
        <div class="row">
            <div id="carousel">
                <h1>Laptops</h1>
                    <div id="laptop-carousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#urmin-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/asus-zenbook-3.jpg">
                                            <div class="carousel-caption">
                                                <span>Asus Zenbook 3</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#baghban-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/macbook-pro.png">
                                            <div class="carousel-caption">
                                                <span>MacBook Pro 15"</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bansiram-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/surface-pro-4.jpg">
                                            <div class="carousel-caption">
                                                <span>Surface Pro 4</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#bhagat-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/macbook-air.jpg">
                                            <div class="carousel-caption">
                                                <span>MacBook Air 13"</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#autobat-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/lenovo-yoga-900.jpg">
                                            <div class="carousel-caption">
                                                <span>Lenovo Yoga 900</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#techno-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/hp-spectre.jpg">
                                            <div class="carousel-caption">
                                                <span>HP Spectre 360</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#shree-krishna-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/dell-inspiron-15-5559.jpg">
                                            <div class="carousel-caption">
                                                <span>Dell Inspiron 15"</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-3">
                                        <a href="" data-toggle="modal" data-target="#ravi-modal">
                                            <img class="img-responsive img-rounded" src="images/laptops/dell-xps-13.jpg">
                                            <div class="carousel-caption">
                                                <span>Dell XPS 13"</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#laptop-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#laptop-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    
    <script>
        $(function(){
            $('.carousel').carousel({
                interval: 2000
            });
        })
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/response.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
