<?php
ob_start();
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
    <title>Login PHP</title>
    <!-- favicon -->
    <link ref="shortcut icon" href="./assets/logo/favicon/favicon.ico"/>
    <link rel="apple-touch-icon" href="./assets/logo/favicon/apple-icon57x57.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/logo/favicon/android-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/logo/favicon/apple-icon-144x144.png"/>
    <!-- plugins -->
    <link rel="stylesheet" href="style/plugins/plugins.css">
    <!-- theme core css -->
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
<!-- MAIN WRAPPER -->
<div class="main-wrapper">
    <!-- LOGIN COVER -->
    <div class="d-flex align-items-center position-relative min-vh-100 login-cover">
        <!-- start left panel -->
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center h-100vh px-0 bg-img primary-overlay"
             data-overlay-dark="6" databackground="img/bg/account-cover.jpg">
            <div class="w-100 p-1-9 text-center">
                <div class="mt-5 position-absolute right top left p-1-9 mx-auto w-50 z-index-9">
                    <a href="#"><img src="/assets/logo/logo-fe.svg" alt="..."></a>
                </div>
                <div class="position-relative z-index-9">
                    <h1 class="text-white font-weight-normal">Join Us</h1>
                    <p class="text-white-90 mb-0 w-85 w-xl-70 mx-auto">Being a student is easy. Learning requires actual
                        work.</p>
                </div>
                <div class="position-absolute right bottom left text-center text-white p-1-9 z-index-9">
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-0 mt-1">&copy; <span class="text-white-85">IT Engineering</span></p>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-item mb-0 ps-0">
                                <li class="list-inline-item"><a href="#!" class="text-white-80 hover-white">Privacy</a>
                                </li>
                                <li class="list-inline-item"><a href="#!" class="text-white-80 hover-white">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end left panel -->
        <!-- start form -->
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-md-8 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3 my-5">
                    <div class="mb-2-6">
                        <h2 class="font-weight-normal mb-0">Hello
                            <span class="text-primary"><?php echo "M2" ?></span></h2>
                        <p class="mb-0">Login to your account.</p>
                    </div>
                    <form action="login.php" method="post">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Your username">
                                </div>
                            </div>
                            <!-- End Input -->
                            <!-- Input -->
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Your password">
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-7 mb-2 mb-sm-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="login-remember">
                                    <label class="custom-control-label display-30" for="login-remember">Keep me signed in</label>
                                </div>
                            </div>
                            <div class="col-sm-5 text-start text-sm-end">
                                <a href="#" class="m-link-muted small-text-primary">Forgot password?</a>
                            </div>

                            <div class="col-md-12 center">
                                <button type="submit" class="butn style-one fill d-block w-100 mt-4 mb-2">Sign In</button>
                            </div>
                        </div>
                        <div class="text-center text-small mt-4">
                            <span>Don't have an account yet? <a href="#" class="text-primary">Register</a></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- end form -->
    </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "Hengly" && $password == "123") {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
        die();
    }
}
?>
<!-- bootstrap -->
<script src="./style/plugins/bootstrap5/js/bootstrap.bundle.min.js">
</script>
</body>
