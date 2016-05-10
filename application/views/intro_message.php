<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Dino IT Solutions Co.</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
        <!--Social Plugins-->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!--Social Plugins-->
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="./" class="brand-logo right"><img src="assets/img/Dino.png" height="56px"></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="./">Home</a></li>
                    <li><a href="web">Web Development</a></li>
                    <li><a href="mobile">Mobile Development</a></li>
                    <li><a href="doc">Document Solutions</a></li>
                    <li><a href="members">Members Portal</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="./">Home</a></li>
                    <li><a href="web">Web Development</a></li>
                    <li><a href="mobile">Mobile Development</a></li>
                    <li><a href="doc">Document Solutions</a></li>
                    <li><a href="members">Members Portal</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons red-text">menu</i></a>
            </div>
        </nav>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center white-text text-lighten-2">#1 IT Solutions Company</h1>
                    <div class="row center">
                        <div onclick="inquireme()" id="download-button" class="btn-large waves-effect waves-light red">Inquire Now!</div>
                    </div>
                    <div class="row center">
                        <h5 class="header col s12 light">Innovative • Quick • Intuitive</h5>
                    </div>
                    <br><br>

                </div>
            </div>
            <div class="parallax"><img src="assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
        </div>


        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Lightning Speed ROI</h5>

                            <p class="light">We did most of the heavy lifting for you to be able to maximize time, quality and profitability of your business. Your investment in our solutions will give you an edge towards the competition and increase your business momentum.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Top-Notch User Experience</h5>
                            <p class="light">Our solutions are proofed by our UX/UI experts to make sure that every action will be executed with ease. UX+Solution = Customer Satisfaction</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Easier to work with</h5>
                            <p class="light">We care for our clients just as we care for our employees. Quality is a product of brainstorming with our geeks and cooperation with our clients. Come and talk to us about your needs and we will provide you the solutions you need. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 lighten-5">Our Technologies : CodeIgniter, WordPress, Java, Android, and VBA </h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="assets/img/background2.jpg" alt="Unsplashed background img 2"></div>
        </div>
        <div class="section" id="inquire">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <!--<p class="left-align light">-->
                    <ul>
                        <li><a href="#inquire" class="red-text" onclick="checkmap()"><i class="material-icons">room</i>A. Mercado St., Magsaysay Heights, Poblacion Toledo City Cebu</a></li>
                        <li><i class="material-icons tiny">phone</i>&nbsp;&nbsp;09322714080</li>
                        <li><i class="material-icons tiny">email</i>&nbsp;&nbsp;drbendanillo@gmail.com</li>
                    </ul>
                    <!--</p>-->
                </div>
            </div>
        </div
    </div>
    <iframe class="valign-wrapper" onmouseout="disablemap()" id="gmap" onload="style.pointerEvents = 'none'" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.580297281672!2d123.63536441433415!3d10.37540396930566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9728d7425aae9%3A0x7b6fc80ef8b66371!2sMercado+St%2C+Toledo+City%2C+Cebu!5e0!3m2!1sen!2sph!4v1462006371950" width="100%" height="640" frameborder="0" style="border:0">
    </iframe>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 lighten-5">Providing IT Solutions for a broad range of industries.</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="assets/img/background3.jpg" alt="Unsplashed background img 3"></div>
    </div>

    <footer class="page-footer red">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of IT professionals providing quality software solutions for your business needs.</br> We code, we eat, we play.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Follow Us</h5>
                    <ul class="white-text left-align">
                        <li>FaceBook <div class="fb-follow" data-href="https://www.facebook.com/drbendanillo" data-height="20" data-layout="button" data-show-faces="false"></div></a</li>
                        <li>Google+&nbsp;&nbsp;&nbsp;&nbsp;<div class="g-follow" data-annotation="none" data-height="20" data-href="//plus.google.com/u/0/104125105329592399429" data-rel="author"></div></li>
                        <!--                        <li><a class="white-text" href="#!">Link 3</a></li>
                                                <li><a class="white-text" href="#!">Link 4</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2016 <a class="brown-text text-lighten-5" href="dummylink"  target="_blank">Dino Rico B. Bendanillo</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/init.js"></script>
    <!-- GREEN SOCK JS Plugin -->
    <script type="text/javascript" src="assets/js/greensock-js/plugins/CSSPlugin.min.js"></script>
    <script type="text/javascript" src="assets/js/greensock-js/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/greensock-js/TimelineLite.min.js"></script>
    <script type="text/javascript" src="assets/js/greensock-js/TweenMax.min.js"></script>
    <script type="text/javascript" src="assets/js/greensock-js/TimelineMax.min.js"></script>
    <script type="text/javascript" src="assets/js/greensock-js/plugins/ScrollToPlugin.min.js"></script>
    <script>
        function inquireme() {
            var tl = new TimelineMax({onComplete: inquirehref});
            var top = $("#inquire").offset().top;
            tl.to(window, 0.5, {scrollTo: {y: top}, ease: Back.easeOut});
        }
        function inquirehref() {
            window.location.href = '#inquire';
        }
        function checkmap() {
            document.getElementById("gmap").style.pointerEvents = "auto";
            var top = $("#gmap").offset().top;
            TweenLite.to(window, 0.7, {scrollTo: {y: top - 30}, ease: Elastic.easeOut});
        }
        function disablemap() {
            document.getElementById("gmap").style.pointerEvents = "none";
        }
    </script>
</body>
</html>