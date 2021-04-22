<?php
    // if($_SERVER['REQUEST_METHOD'] === 'GET') {
    //     echo $_GET['login'];
    // }
    $login = "";
    $reason = "";
    if(isset($_GET['login'])) {
        $login = $_GET['login'];
    }
    if(isset($_GET['reason'])) {
        $reason = $_GET['reason'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Title</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reboot.css">
        <link rel="stylesheet" href="css/styles.min.css">
    </head>
    <body>
        <a class="return-home" href="index.html"><svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg> Return to Crave</a>
        <div class="login-container">
            <div class="inner-container">
                <svg class="login-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 246.9 600 106.2" enable-background="new 0 246.9 600 106.2" xml:space="preserve">
                    <title>crave mvp2 logo blue</title>
                    <g id="Layer_2">
                        <g id="Layer_1-2">
                            <g id="Layer_2-2">
                                <g id="Layer_1-2-2">
                                    <path fill="#29C2F1" d="M516.3,290c0.2-3.9,0.7-7.7,1.5-11.5c1.8-7.5,4.9-9.2,13.2-10.7c5.3-0.8,10.6-1.2,15.9-1.2      c5.4,0,10.9,0.3,16.2,1.2c13.5,2.3,16.2,5.9,16.2,22.3L516.3,290z M562.9,247.9c-10.6-1.3-21.3-1.3-31.9-0.2      c-16.9,2.2-26.4,5.7-32.3,19.9c-3.8,9.2-5,20.9-5,32.1c0,10.2,1,21.2,4.3,30.3c5.9,15.9,15,19.7,32.9,22.1      c5.3,0.6,10.6,0.9,15.9,0.8c5.5,0,10.9-0.3,16.4-1c16.4-2.2,27.5-7.2,32.9-22.9l-21.1-5c-2.3,5-5.5,6-12,7.5      c-4.9,1.2-10.5,1.5-16.2,1.7c-5.3,0.1-10.5-0.3-15.7-1.2c-8.9-1.5-11.4-3.5-13.4-12.5c-0.9-4-1.4-8-1.5-12h83.2      C601.7,269.2,596.9,252.4,562.9,247.9z M458.6,248.7l-34.3,82.9l-34.3-82.9h-23.7l42,102.2h32.3l41.8-102.2H458.6z M132.8,248.7      v102.2H155v-31.6h27.8l20.7,31.6h24.9l-21.7-33.8c14.5,0,24.9-13.9,24.9-32.9c0-20-9-35.4-33.4-35.4L132.8,248.7z M155,268.5      h42.1c9.9,0,12.5,7.7,12.9,15.7c0.2,8-3,16.2-12.9,16.2H155L155,268.5z M0,299.9c0,10.9,1.2,22.3,4.7,31.3      c6,15.6,15.9,18.5,32.6,20.7c5.3,0.7,10.6,1,15.9,1c5.4,0,10.7-0.3,16-1c17.4-2.2,27.5-6.9,33.3-20.7c1.3-3.3,2.2-6.7,2.7-10.2      l-21.1-4.8c-2.5,10.2-5.7,12.2-14.7,14c-5.4,1-10.8,1.4-16.2,1.3c-5.3,0-10.6-0.5-15.9-1.5c-8.2-1.5-9.9-3.5-11.9-10.4      c-1.5-5.2-2.2-12.5-2.2-19.7c0-7.2,0.7-14.5,2.2-19.7c2-6.9,3.7-8.9,11.9-10.4c5.2-1,10.6-1.5,15.9-1.5      c5.4-0.1,10.9,0.4,16.2,1.3c9,1.8,12.2,3.8,14.7,14l21.1-4.9c-0.5-3.5-1.4-6.9-2.7-10.2c-5.9-13.9-15.9-18.5-33.3-20.7      c-5.3-0.7-10.7-1-16-1c-5.3,0-10.6,0.3-15.9,1c-16.7,2.2-26.6,5.2-32.6,20.7C1.2,277.7,0,289,0,299.9z M350.9,281.5      c0-27.4-19.2-34.6-50.1-34.6c-14,0-28.3,2-38.6,4.9l5.5,18.7c10.8-2.6,22-3.9,33.1-3.7c20.4,0.5,29.6,1.5,28.3,20.7      c-9.4-1-18.8-1.4-28.3-1.3c-33.1,0.7-50,4.7-50,31.4c0,27.9,16.9,35.4,50,35.4c13.7,0,30.9-0.3,50.2-5.9L350.9,281.5z       M329,306.6v24.6c-9.3,1.4-18.8,2-28.3,1.8c-21.2-0.3-28.3-0.5-28.3-15.4c0-12.4,9.9-12.9,28.3-12.9      C310.2,304.8,319.7,305.4,329,306.6L329,306.6z"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <h2>Sign in</h2>
                <p>Welcome back</p>
                <?php if ($login == 'false') { ?>
                    <p class="error"><?php if ($reason == "") { echo "Oops!"; } else { echo $reason; }?></p>
                <?php } ?>
                <div class="previous-logins">
                    <div class="box-container">
                        <div class="prev-inner-container" onclick="account(this)" id="email@gmail.com">
                            <span class="icon-container"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" /></svg> email@gmail.com</span>
                        </div>
                        <div class="remove-container">
                            <a class="remove" onclick="remove(this)" id="1">
                                <span class="left-up"></span>
                                <span class="right-up"></span>
                            </a>
                        </div>
                    </div>
                    <div class="box-container">
                        <div class="prev-inner-container" onclick="account(this)" id="test@gmail.com">
                            <span class="icon-container"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" /></svg> test@gmail.com</span>
                        </div>
                        <div class="remove-container">
                            <a class="remove" onclick="remove(this)" id="2">
                                <span class="left-up"></span>
                                <span class="right-up"></span>
                            </a>
                        </div>
                    </div>
                    <div class="separator">
                        <div class="or">
                            <span>OR</span>
                        </div>
                        <div class="line"></div>
                    </div>
                    <a href="signin.php" class="box-container add-another">
                        <span class="icon-container add-another"><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path></svg> Add another account</span>
                    </a>
                </div>
                <form class="log-in previous-log-in hide-log-in" method="POST" action="validate.php?location=previous">
                    <label class="sr-only" for="email">Email</label>
                    <input class="sr-only" type="email" id="email" name="email">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <input class="sign-in-btn btn btn-blue" type="submit" value="Sign In">
                    <p><a class="sign-up" href="#">Forgot password?</a></p>
                </form>
                <div class="line bottom-line"></div>
                <p><a class="sign-up" href="#">Sign in through TV Provider</a></p>
                <p class="subscribe">New to Crave? <a class="sign-up" href="#">Subscribe now!</a></p>
            </div>
        </div>
        
        <footer>
            <span>Privacy Policy  |  Terms and conditions</span>
            <span>This is for a school project | NAIT 2021</span>
        </footer>
        <script src="js/main.js"></script>
    </body>
</html>