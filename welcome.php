<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- metas -->
    <meta charset="utf-8"/>
    <meta name="author" content="Bunchhun"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="PHP, Laravel"/>
    <meta name="description" content="Web and Cloud Technology 2"/>
    <!-- title -->
    <title>Welcome PHP</title>
    <!-- favicon -->
    <link ref="shortcut icon" href="./assets/logo/favicon/favicon.ico"/>
    <link rel="apple-touch-icon" href="./assets/logo/favicon/apple-icon57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/logo/favicon/android-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/logo/favicon/apple-icon-144x144.png"/>
    <!-- plugins -->
    <link rel="stylesheet" href="./style/plugins/plugins.css">
    <!-- theme core css -->
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
<!-- MAIN WRAPPER
================================================== -->
<div class="main-wrapper">
    <!-- HEADER
    ================================================== -->
    <header class="position-absolute w-100 sm-position-relative transparent-header">
        <div class="navbar-default">
            <div class="container lg-container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12">
                        <div class="menu_area alt-font">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                                <div class="navbar-header navbar-header-custom">
                                    <!-- start logo -->
                                    <a href="#" class="navbar-brand inner-logo"><img id="logo" src="./assets/logo/FE_logo.jpeg" alt="logo"></a>
                                    <!-- end logo -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ABOUT
    ================================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 hover-style3 text-center text-lg-start">
                    <div class="px-3 px-md-5 px-lg-0">
                        <img src="./assets/images/department.jpg" alt="...">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <h2 class="mb-3"><?php echo "Welcome" . $_SESSION["username"] ?></h2>
                        <p class="display-28 mb-1-8">Bachelor of
                            Information Technology Engineering (ITE) program at Faculty of
                            Engineering, Royal University of Phnom Penh is designed to provide highquality training in
                            Information Technology which meets the current and
                            future labor market requirements by emphasizing a broad foundation of
                            computer organization, software, and mathematics both theoretical and
                            practical aspects.</p>
                        <p class="mb-1-8">Research:</p>
                        <ul class="list-style6 ps-0 mb-2-2">
                            <li>Artificial Intelligence</li>
                            <li>Data Mining</li>
                            <li>Image Processing and Analysis</li>
                        </ul>
                        <a href="#!" class="butn style-one fill">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER
    ================================================== -->
    <footer class="pt-6 pt-sm-8 pt-lg-10">
        <div class="container">
            <div class="row pb-6 pb-sm-8 pb-lg-10">
                <div class="col-sm-6 col-lg-4 mb-4 mb-sm-5 mb-lg-0">
                    <img src="./assets/logo/logo-fe.svg" class="mb-4 w-md-50 w-lg-65 w-xl-55" alt="footer-logo">
                    <h5 class="h6 font-weight-300 line-height-normal text-white-90 w-md-85 mb-4">
                        <span class="text-warning">ITE</span> drive you to the professional level.
                    </h5>
                    <ul class="list-unstyled social-icon01 p-0 m-0">
                        <li><a href="#!"><i class="fab fa-facebook-f">
                                </i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter">
                                </i></a></li>
                        <li><a href="#!"><i class="fab fa-youtube">
                                </i></a></li>
                        <li><a href="#!"><i class="fab fa-linkedinin"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4 mb-sm-5 mb-lg-0">
                    <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">Services</h3>
                    <ul class="footer-list02">
                        <li><a href="#!" class="text-white-60 hover-white">Web Design</a></li>
                        <li><a href="#!" class="text-white-60 hover-white">Development</a></li>
                        <li><a href="#!" class="text-white-60 hover-white">WordPress</a></li>
                        <li><a href="#!" class="text-white-60 hover-white">Online Marketing</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                    <div class="ps-0 ps-lg-5">
                        <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">About Us</h3>
                        <ul class="footer-list02">
                            <li><a href="#!" class="text-white-60 hover-white">About Us</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">Work Portfolio</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">Our Team</a></li>
                            <li><a href="#!" class="text-white-60 hover-white">Price Plan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h3 class="h5 font-weight-500 mb-3 mb-lg-4 text-white normal">Newsletter</h3>
                    <div class="mb-0">
                        <!-- start form here -->
                        <form class="quform" action="quform/newsletter-two.php" method="post" enctype="multipart/formdata" onclick="">
                            <div class="quform-elements">
                                <div class="row">
                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us"/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->
                                    <!-- Begin Submit button -->
                                    <div class="col-md-12">
                                        <div class="quform-submitinner">
                                            <button class="btn btn-primary w-100 py-2" type="submit">
                                                <span>Subscribe</span></button>
                                        </div>
                                        <div class="quform-loadingwrap text-center"><span class="quform-loading"></span>
                                        </div>
                                    </div>
                                    <!-- End Submit button -->
                                </div>
                            </div>
                        </form>
                        <!-- end form here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center border-top py-4 border-color-lightwhite">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-white-90 mb-0">&copy; Copyright
                            IT Engineering <span class="current-year"></span>. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- bootstrap -->
<script src="./style/plugins/bootstrap5/js/bootstrap.bundle.min.js">
</script>
</body>
</html>