<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IASF</title>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>" type="text/css">

    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <!--logo at tab -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One|Fugaz+One|Lobster|Slabo+27px&display=swap" rel="stylesheet">

    <style>
        .view {

            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTi9197_5AdSVB4Ws-Dtp0p1WY99XX3u6d75ea0FTeJrictKw0i') center;



            min-height: 380px;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            /* Needed to position the navbar */
            position: relative;
            font-family: 'Open Sans', sans-serif;
        }

        .space {
            height: 2rem;
        }

        #navbars {
            overflow: hidden;

        }

        footer .quicklinks {
            text-decoration: none;
            color: white;
        }

    </style>
</head>

<body>

    <header>
        <div class="view">
            <div class="extraspace mask rgba-black-strong">
                <div class="space">
                </div>
                <nav class="navbar  container sticky-top container navbar-expand-lg navbar-dark rgba-orange-strong" id="navbars" width=100%>
                    <a class="navbar-brand" href="<?php echo base_url();?>" style="font-family: 'Patua One', cursive;letter-spacing: 2px;">IASF 2020</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url('index.php/Home');?>">HOME </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('index.php/Agenda');?>">AGENDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('index.php/About');?>">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">BLOG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">CONTACT</a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right action">
                            <li class="nav-item"><a href="#" class="nav-link">SIGN IN </a> </li>
                            <li class="nav-item"><a href="#" class="nav-link">REGISTER</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="ViewContent text-center px-5 py-5">
                    <?php if(isset($ViewContent)){ ?>
                    <?php if($ViewContent == "home") {?>
                    <h1 class='responsive' style='font-size:3vw; color:white;'><strong style="font-family: 'Carter One', cursive;"><?php echo $about ?></strong></h1>
                    <h1 class='responsive' style='font-size:2vw; color:white;'><strong style="font-family: 'Slabo 27px', serif;">Challenge for a Change</strong></h1>
                    <h3 class='responsive' style='font-size:1.5vw; color:white;'><strong style="font-family: 'Slabo 27px', serif;">Jan 4 - 7, 2020</strong></h3>
                    <h3 class='responsive' style='font-size:1.8vw; color:white;'><strong style="font-family: 'Slabo 27px', serif;">Anurag Group of Institutions</strong></h3>
                    <button type="button" class="btn btn-deep-orange btn-rounded text-white waves-effect">REGISTER</button>

                    <?php } else { ?>
                    <h1 class='responsive mt-4' style='font-size:5vw; color:white;'><strong style="font-family: 'Carter One', cursive; text-transform:capitalize"><?php echo $ViewContent ?></strong></h1>
                    <?php }?>

                    <?php }?>
                </div>
            </div>

        </div>
    </header>

    <main>
        <!-- Start your project here-->
        <?php
    if(isset($ViewContent))
    {
        $this->load->view($ViewContent);
    }
    
  ?>
        <!-- /Start your project here-->

    </main>


  <div class="container">
         <hr class="mb-5 mt-5">
     </div>

<div class="container-fluid">
  <marquee behavior="scroll" direction = "left">
  <strong class="h4 responsive">Partners: </strong> &nbsp;
  <img src="<?php echo base_url('assets/images/iucee.jpg');?>"  style="height: 4rem"> &nbsp;&nbsp;
  <img src="<?php echo base_url('assets/images/scale.png');?>"  style="height: 3rem"> &nbsp;&nbsp;
  <img src="<?php echo base_url('assets/images/engineers.jpg');?>" style="height: 4rem" > &nbsp;&nbsp;
  <img src="<?php echo base_url('assets/images/stumagz.jpg');?>" style="height: 3rem" >
 </marquee>
</div>





    <footer class="site-footer bg-dark">
        <div class="container ">
            <div class="row pd-5 pt-5">

            </div>
            <div class="row pb-5 pt-5">
                <!-- col 1 -->
                <div class="col-md-4 mb-5 text-light">
                    <h3 class="mb-4 ">About </h3>
                    <p class="mb-5 text-justify"> IASF is a national level event where students are tasked with global issues from tracks as they choose to solve through research of the cause and solve it using an idea in different approaches under the guidance of facilitators expert in that certain track.</p>
                    <ul class="list-unstyled d-flex">
                        <li><a href="#" class="p-2" target="_blank"><i style="color: #ffc100;" class="fas fa-envelope fa-fw "  title="Mail"></i></a></li>

                        <li><a href="https://www.facebook.com/Iasf_agi-104553714285818/" target="_blank" class="p-2" title="Facebook"><i class="fab fa-facebook-f fa-fw" style="color: #ffc100;"></i></a></li>

                        <li><a href="https://www.instagram.com/p/B4z3VLBp7NR/?igshid=1vsq45qgb9sck" class="p-2" target="_blank" title="Instagram"><i class="fab fa-instagram fa-fw" style="color: #ffc100;"></i></a></li>

                    </ul>

                </div>
                <!-- col 2 -->
                <div class="col-md-5 mb-5 pl-md-5 text-light">
                    <div class="mb-5">
                        <h3 class="mb-4 ">Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block pb-2">
                                <span class="d-block "></span>
                                <span class="text-white "></span>
                            </li>
                            <li class="d-block pb-2">
                                <span class="d-block">Telephone:</span><span class="text-white"></span>
                            </li>
                            <li class="d-block pb-2">
                                <span class="d-block">E-mail:</span><span class="text-white"><a href="mailto:"></a></span>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- col 3 -->
                <div class="col-md-3 mb-5 text-light">
                    <h3 class="mb-4">Quick Links</h3>
                    <ul class="list-unstyled text-light quicklinks">
                        <li><a href="<?php echo base_url();?>index.php/About" class="nav-link text-white">About</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Keypersonnel" class="nav-link text-white">Agenda</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Equipment" class="nav-link text-white">Blog</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Contact" class="nav-link text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- col 4 -->
                <div class="col-md-3">

                </div>

            </div>
            <div class="row pd-5 pt-5 justify-content-center text-center ">
                <p class="grey-text" style="font-size:75%">Site developed by - <a href="#" target="blank" class="blue-grey-text">Mass Coders</a></p>
            </div>
        </div>

    </footer>
    <!-- /Footer -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/mdb.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/owl.carousel.js');?>"></script>

    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {

                document.getElementById("navbars").classList.remove("container");
                document.getElementById("navbars").classList.remove("rgba-orange-strong");
                document.getElementById("navbars").classList.add("warning-color-dark");
                document.getElementById("navbars").style.transition = "all 1s";
                document.getElementById("navbars").style.position = "fixed";
                document.getElementById("navbars").style.width = "100%";



            } else {

                document.getElementById("navbars").classList.add("container");
                document.getElementById("navbars").classList.add("rgba-orange-strong");
                document.getElementById("navbars").classList.remove("warning-color-dark");
                document.getElementById("navbars").style.transition = "all 1s";
                document.getElementById("navbars").style.position = "sticky";



            }
        }

        AOS.init();



        $(document).ready(function() {

            $(".owl-carousel").owlCarousel({

                autoPlay: 5000, //Set AutoPlay to 5 seconds

                items: 5,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                itemsMobile: [479, 1],
                itemsTablet: [768, 2],
                responsive: true

            });
        });

    </script>

</body>

</html>
