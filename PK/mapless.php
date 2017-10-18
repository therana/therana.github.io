<?php

    require dirname(__FILE__)."/j-folder/php/csrf.php";
    $new_token = new CSRF('contact');

?>

<!doctype html>
<!--[if lt IE 7 ]><html itemscope itemtype="https://schema.org/" id="ie6" class="ie" lang="en-US"><![endif]-->
<!--[if IE 7 ]>   <html itemscope itemtype="https://schema.org/" id="ie7" class="ie" lang="en-US"><![endif]-->
<!--[if IE 8 ]>   <html itemscope itemtype="https://schema.org/" id="ie8" class="ie" lang="en-US"><![endif]-->
<!--[if IE 9 ]>   <html itemscope itemtype="https://schema.org/" id="ie9" class="ie" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!--><html itemscope itemtype="https://schema.org/" lang="en-US"><!--<![endif]-->
<head>

    <meta charset="utf-8">

    <title>Your FoodRating</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="j-folder/css/j-forms.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- If you need the Minified CSS -->
    <!-- <link rel="stylesheet" href="build/style.min.css"> -->

        <!-- Modernizer, cause some browsers suck -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body">


    <section class="fix-top-bottom container-fluid" id="top-fixed">
        <p>Vielen Dank für Ihren Besuch</p>
    </section>

    <section id="inner-sections">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
                <div class="col-md-7">
                    <div class="right-text">
                        <h2>Hat es Ihnen bei uns gefallen?</h2>
                        <ul class="list-inline btn-nav">
                            <li><a href="https://www.tripadvisor.ch/UserReviewEdit-g1190221-d3447742-Gasthof_zur_Post-Hasliberg_Canton_of_Bern.html" class="green-btn wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">Ja <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                            <li><a role="button" data-toggle="modal" data-target="#contact" data-original-title class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">Nein <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="bottom-container">
            <div class="row">
                <div class="col-md-5">
                    <div class="left-text wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <h3>Ihre Meinung ist uns wichtig!</h3>
                        <h4>Jetzt bewerten und Sie erhalten 5% Rabatt auf Ihre Rechnung!</h4>
                    </div>
                </div>
                <div class="col-md-7">
                        <img src="assets/img/gasthof-zur-post.jpg" alt="hotel-image" class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                </div>
            </div>
        </div>
    </section>

    <section id="modal-form">
        <div class="container">
            <div class="row">
                <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="panel-title text-center" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span> Get In Touch</h4>
                            </div>
    <div id="contact-bottom">
        <div class="container">
        <div class="row text-center">
            <div class="contFrm wrapper wrapper-400">

                <form action="j-folder/php/action.php" method="post" class="j-forms" id="j-forms" novalidate>

                    <div class="content">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="inner">
                                <!-- start token -->
                                <div class="token">
                                    <?php echo $new_token->get_token();?>
                                </div>
                                <!-- end token -->

                                <!-- start name -->
                                <div class="unit">
                                    <div class="input">
                                        <label class="icon-right" for="name">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input type="text" placeholder="Your Name" id="name" name="name">
                                    </div>
                                </div>
                                <!-- end name -->

                                <!-- start email -->
                                <div class="unit">
                                    <div class="input">
                                        <label class="icon-right" for="email">
                                            <i class="fa fa-envelope-o"></i>
                                        </label>
                                        <input type="email" placeholder="Your Email" id="email" name="email">
                                    </div>
                                </div>
                                <!-- start phone -->
                                <div class="unit">
                                    <div class="input">
                                        <label class="icon-right" for="phone">
                                            <i class="fa fa-phone"></i>
                                        </label>
                                        <input type="text" placeholder="Telephone or Mobile No" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-10 col-md-offset-1">
                            <div class="inner">
                                <!-- start textarea -->
                                <div class="unit">
                                    <div class="input">
                                        <textarea placeholder="your message..." spellcheck="false" name="message"></textarea>
                                    </div>
                                </div>
                                <!-- end textarea -->

                                <!-- start response from server -->
                                <div id="response"></div>
                                <!-- end response from server -->

                            <div class="footer">
                                <button type="submit" class="primary-btn">Send Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- end /.footer -->


                    </div>
                    <!-- end /.content -->
                </form>
            </div>
            </div>
        </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="upper">
        <div id="google-map wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"">
            <div id="map"></div>
        </div>
    </div>
    <section class="fix-top-bottom container-fluid" id="bottom-fixed">
        <ul class="list-inline">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <p>Um Ihren Rabatt zu erhalten zeigen Sie unserem Personal einfach Ihre Bewertung</p>
    </section>





    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        <!-- Scripts -->
        <script src="j-folder/js/jquery.maskedinput.min.js"></script>
        <script src="j-folder/js/jquery.validate.min.js"></script>
        <script src="j-folder/js/jquery.form.min.js"></script>
        <script src="j-folder/js/j-forms.js"></script>
        <script src="assets/js/libs/wow.min.js"></script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/scripts.min.js"></script>


</body>
</html>
