<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>login</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
    <link href="/projects/librarymangsys2/css/login/mmenu.css" rel="stylesheet" type="text/css">
    <link href="/projects/librarymangsys2/css/login/mmenu.positioning.css" rel="stylesheet" type="text/css">

    <!-- Stylesheet -->
    <link href="/projects/librarymangsys2/css/login/style.css" rel="stylesheet" type="text/css">









    
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-color: cyan;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>



<body>
    <?php include '_header.php'; ?>
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Signin</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Signin</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->
    <!-- Start: Cart Section -->

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="signin-main">
                    <div class="container">
                        <div class="woocommerce">
                            <div class="woocommerce-login ">
                                <div class="company-info signin-register ">
                                    <div class="col-md-offset-0 border-dark-left margin-auto col-md-12">


                                        <div class="row ">
                                            <div class="my-auto mx-auto col-md-6">
                                                <div class="company-detail bg-dark margin-auto">
                                                    <div class="signin-head">
                                                        <h2>Sign in</h2>
                                                        <span class="underline left"></span>
                                                    </div>
                                                    <form class="login" action="_handleLogin.php" method="post">



                                                        <p class="form-row form-row-first input-required">

                                                            <input type="text" class="form-control" id="loginEmail"
                                                                name="loginEmail" aria-describedby="emailHelp" placeholder="User name">
                                                        </p>

                                                        <p class="form-row input-required">
                                                            <!-- <label>
                                                                        <span class="first-letter">Password</span>
                                                                        <span class="second-letter">*</span>
                                                                    </label> -->
                                                            <input type="password" class="form-control" id="loginPass"
                                                                name="loginPass" placeholder="User password">

                                                            >
                                                        </p>



                                                        <div class="clear"></div>
                                                        <div class="password-form-row">
                                                            <p class="form-row input-checkbox">
                                                                <input type="checkbox" value="forever" id="rememberme"
                                                                    name="rememberme">
                                                                <label class="inline" for="rememberme">Remember
                                                                    me</label>
                                                            </p>
                                                            <p class="lost_password">
                                                                <a href="#">Forgot Password ?</a>
                                                            </p>
                                                        </div>
                                                        <input type="submit" value="Login" name="login"
                                                            class="button btn btn-default">
                                                        <div class="clear"></div>
                                                    </form>
                                                </div>
                                            </div>


                                            <div class="mx-auto my-auto col-md-6">
                                                <div class="company-detail new-account bg-light margin-right">
                                                    <div class="new-user-head">
                                                        <h2>Create New Account</h2>
                                                        <span class="underline left"></span>
                                                        <p>please register youreself.</p>
                                                    </div>
                                                    <form class="login" action="_handleSignup.php" method="post">
                                                        <p class="form-row form-row-first input-required">

                                                            <input type="text" class="form-control" id="signupEmail"
                                                                name="signupEmail" aria-describedby="emailHelp"
                                                                placeholder="User Email">
                                                        </p>
                                                        <p class="form-row input-required">
                                                            <!-- <label>
                                                                        <span class="first-letter">Password</span>
                                                                        <span class="second-letter">*</span>
                                                                    </label> -->
                                                            <input type="password" class="form-control"
                                                                id="signupPassword" name="signupPassword"
                                                                placeholder="User password">
                                                        </p>
                                                        <p class="form-row input-required">
                                                            <!-- <label>
                                                                        <span class="first-letter">Confirm Password</span>
                                                                        <span class="second-letter">*</span>
                                                                    </label> -->
                                                            <input type="password" class="form-control"
                                                                id="signupcPassword" name="signupcPassword"
                                                                placeholder="Confirm password">
                                                        </p>
                                                        <div class="clear"></div>
                                                        <input type="submit" value="Signup" name="signup"
                                                            class="button btn btn-default">
                                                        <div class="clear"></div>
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

            </main>
        </div>
    </div>








    <!-- End: Cart Section -->



</body>


</html>