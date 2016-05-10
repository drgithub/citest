<?php
$logined = isset($this->session->userdata['userlogin']);
$registered = isset($this->session->userdata['notify']);
?>
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
    <body onload="Materialize.toast('<?php
    if ($registered) {
        echo $this->session->userdata['notify']['msg'];
        $this->session->unset_userdata('notify');
    }
    ?>', 4000)">

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
        <nav class="red" role="navigation">
            <a id="logo-container" href="./" class="brand-logo left-align"><img src="assets/img/Dinosaur.png" class="circle" height="64px"></a>
            <div class="right nav-wrapper">
                <div class="row white">
                    <?php
                    if ($logined) {
                        require 'logoutform.php';
                    } else {
                        require 'loginform.php';
                    }
                    ?>
                </div>
            </div>
        </nav>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center white-text text-lighten-2">DISC Members Portal</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Best Solution. Nothing Less.</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="assets/img/mback1.png" alt="Unsplashed background img 1"></div>
        </div>
        <div class='row'>
            <div class="col s10 m6">
                <div class="section" style="position: absolute;">
                    <h1 class="grey-text text-darken-3" style="font-weight: bold;margin-top:0px;">Savings?<br>make it<br><span class="red-text text-accent-4" style="font-weight: bold">UNLIMITED</span>.</h1>
                </div>
                <img src="assets/img/tree.jpeg" width="100%" height="100%">
            </div>
            <div class="col s12 m6">
                <?php
                if ($logined) {
                    require 'userprofile.php';
                } else {
                    require 'regform.php';
                }
                ?>
            </div>
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
    </body>
</html>