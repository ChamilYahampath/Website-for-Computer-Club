

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <link rel="icon" type="image/x-icon" href="images/Uni logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <img src="images/Uni logo.png" alt="University logo">
          </div>
        </div>

        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
          <a href="index.html">Home</a>
          <a href="#">News</a>
          <a href="#">Events</a>
          <a href="gallery.html">Gallery</a>
          <a href="login.php">Log in</a>
        </div>
    </div>
    

    <div class="banner">
        <div class="row">
            <div class="col-4 col-t-3 col-m-1"></div>
            <div class="form_div col-4 col-t-6 col-m-10">
                <form id="login" method="POST" action="login_validation.php">
                    <h1>Sign in</h1>
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <table>
                        <tr>
                            <td><label for="fname" class="lbl">Email</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="user_name" name="user_name" class="input_box"></td>
                        </tr>
                        <tr>
                            <td><label for="reg_sem" class="lbl">Password</label></td>
                        </tr>
                        <tr>
                            <td><input type="password" id="pwd" name="pwd" class="input_box"></td>
                        </tr>
                    </table>
                    <label class="container_checkbox">
                        <input type="checkbox" id="show_pwd" onclick="pwdBtnToggle()">
                        <span class="checkmark">Show Password</span>
                    </label>
                    <div id="btn_col">
                        <input type="submit" id="signin_btn" value="Sign in">
                    </div>
                    <div id="form_botton_div">
                        <p>Forgot <a href="#">Username/Password</a>?</p>
                        <p>Don't have an account? <a href="#">Sign up</a></p>
                    </div>
                </form>
            </div>
            <div class="col-4 col-t-3 col-m-1"></div>
        </div>
    </div> 
    

    <!--FOOTER section-->
  <footer>
    <div class="row">
        <div class="col-3 f_item col-m-12">
            <a href="#" onclick="topFunction()" ><img class="logo" id="footer_logo" src="img/Uni logo.png" alt="logo"></a>
        </div>
        <div class="col-3 f_item col-m-12">
            <div>
                <h5>About Club</h5>
                <p>About us</p>
                <p>Our Services</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="col-3 f_item col-m-12">
            <div>
                <h5>Get help</h5>
                <p>FAQ</p>
                <p>Our Services</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="col-3 f_item col-m-12">
            <div>
                <h5 id="social_hTag">Social Media</h5>
                <div id="soTag">
                    <a href="#"><img class="socialmedia_logo" src="img/fb_icon_white.png" alt="logo"></a>
                    <a href="#"><img class="socialmedia_logo" src="img/insta_icon_white.png" alt="logo"></a>
                    <a href="#"><img class="socialmedia_logo" src="img/yt_icon_white.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="login.js"></script>
</body>
</html>