<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Strive Personal Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Strive Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- nav -->
    <link href="css/menufullpage.css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    <header>
        <!--nav -->
        <a href="#menu" class="menu-link">
            <span>toggle menu</span>
        </a>
        <nav id="menu" class="panel">
            <ul>
                <li>
                    <a href="<?php echo base_url(); ?>" class="active">Beranda</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>datajalan">Data Jalan</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>login">Login</a>
                </li>
            </ul>
        </nav>
        <!-- //nav -->
        <!-- logo -->
        <div class="logo_wthree">
            <a href="index.html">
                <i class="fab fa-node-js"></i>
            </a>
        </div>
        <!-- //logo -->
    </header>
    <!-- //header -->
    <!-- banner -->
    <section class="slide-wrapper">
        <!-- banner slide -->
        <div class="agile_banner bg1">
            <div class="layer">
                <div class="container">
                    <div class="banner_text_wthree">
                        <div class="d-flex">
                            <h1>welcome to </h1>
                            <h2>&nbsp;my site</h2>
                        </div>
                        <div id="text" class="banner_text_w3ls my-md-5 my-3"></div>
                        <ul class="list-inline bnr_list_w3">
                            <li class="list-inline-item">
                                <a class="btn  text-white  scroll" href="<?php echo base_url(); ?>portfolio">view my work </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn  text-white bg-dark scroll" href="<?php echo base_url(); ?>contact">contact me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-->
    <!-- footer -->
    <footer>
        <div class="cpy-right text-center py-4">
            <p class="text-white">© 2018 Strive. All rights reserved | Design by
                <a href="http://w3layouts.com"> W3layouts.</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- few java snippets-->
    <script src="js/strive.js"></script>
    <!-- banner text animation -->
       <script>
        //text effect

        document.addEventListener('DOMContentLoaded', function (event) {

            var dataText = [
                "Hi there, Iam  James smith.",
                "I'm  UI/UX designer.",
                "I have strong knowledge in web development",
                "As well as in photohsop, css3",
                "Cross browser compiled layout"
            ];

            // type one text in the typwriter
            // keeps calling itself until the text is finished
            function typeWriter(text, i, fnCallback) {
                // chekc if text isn't finished yet
                if (i < (text.length)) {
                    // add next character to h1
                    document.getElementById("text").innerHTML = text.substring(0, i + 1) +
                        '<span aria-hidden="true" class="banner_text_w3ls"></span>';

                    // wait for a while and call this function again for next character
                    setTimeout(function () {
                        typeWriter(text, i + 1, fnCallback)
                    }, 50);
                }
                // text finished, call callback if there is a callback function
                else if (typeof fnCallback == 'function') {
                    // call callback after timeout
                    setTimeout(fnCallback, 1000);
                }
            }
            // start a typewriter animation for a text in the dataText array
            function StartTextAnimation(i) {
                // check if dataText[i] exists
                if (i < dataText[i].length) {
                    // text exists! start typewriter animation
                    typeWriter(dataText[i], 0, function () {
                        // after callback (and whole text has been animated), start next text
                        StartTextAnimation(i + 1);
                    });
                }
            }
            // start the text animation
            StartTextAnimation(0);
        });
    </script>

    <!-- //banner text animation -->
    <!-- nav -->
    <script src="js/menuFullpage.min.js"></script>
    <!-- //nav -->
    <!-- smooth scroll -->
    <script src="js/SmoothScroll.min.js "></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
</body>

</html>