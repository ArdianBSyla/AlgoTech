<?php
require_once "db.php";

if (isset($_POST['signup'])) {
    $personalId = mysqli_real_escape_string($con, $_POST['personalId']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sqlLogin = "SELECT * FROM user WHERE email = '" . $email. "'";
    $resultLogin = mysqli_query($con, $sqlLogin);
    if(mysqli_num_rows($resultLogin) > 0){
        $email_error = "This email is already taken";
    }

    $sqlLoginPersonalId = "SELECT * FROM user WHERE personal_id = '" . $personalId. "'";
    $sqlLoginPersonalId = mysqli_query($con, $sqlLoginPersonalId);
    if(mysqli_num_rows($sqlLoginPersonalId) > 0){
        $personal_id_error = "This personalId is already taken";
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $password_error = "Password must be minimum of 6 characters";
    }       
    if($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        $sql = "INSERT INTO user(personal_id, first_name, last_name, email ,password) VALUES('" . $personalId . "','" . $firstName . "','" . $lastName . "', '" . $email . "', '" . md5($password) . "')";
        $result = mysqli_query($con, $sql);
        if($result){
            header("location: login.php");
            exit();
        }
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/css/reset.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/home-page-style.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/login-page-style.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <title>
            Regjistrohuni
        </title>
    </head>
    <script src="./assets/script/validations.js"></script>
    <script src="./assets/script/home-page.js"></script>
    <body id="my-img" onload="changeimage(5)">
        <div class="container"> 
             <header id="headeri">
                 <div>
                     <p>
                         <a href="home_page.php" class="footerSubmitButton stylesBtn"> HOMEPAGE</a>  |  
                         <a href="products.php" class="footerSubmitButton stylesBtn">PRODUCTS</a>  |  
                         <a href="aboutUs.php" class="footerSubmitButton stylesBtn">ABOUT US</a>  |  
                         <a href="login.php" target="_blank" class="footerSubmitButton stylesBtn">LOG IN</a>  |  
                         <a href="signup.php" target="_blank" class="footerSubmitButton stylesBtn">SIGN UP</a>
                     </p>
                 </div>
                 <div class="icons">
                     <a
                      href="https://www.linkedin.com/"
                      target="”_blank”"
                      class="icon icon--linkedin"
                    ></a>
                    <a
                      href="https://www.twitter.com/"
                      target="”_blank”"
                      class="icon icon--twitter"
                    ></a>
                    <a
                      href="https://www.pinterest.com/"
                      target="”_blank”"
                      class="icon icon--pinterest"
                    ></a>
                    <a
                      href="mailto:ardianbsyla@gmail.com?subject = Feedback&body = Message"
                      target="”_blank”"
                      class="icon icon--google-plus"
                    ></a>
                    <a href="https://rss.app/" target="”_blank”" class="icon icon--rss"></a>   
                  </div>
             </header>
             <section class="start-section">
                 <div id="dark-back">
                     <div id="div-for-err" class="after-head">
                         <h2>AlgoTech</h2>
                         <p>Pajisuni me kompjuterin m&#235; t&#235; mir&#235;</p>
                         <input type="text" style="margin-left: 355px; border-radius: 0px;" class="text-button" name="search" placeholder="Kërkoni këtu...">
                         <input type="button" value="Search" class="search-btn" name="submit-search-btn">
                     </div>
                    <div style="width: 960px; height: auto; background-color: #3f3f3f; margin-left: 20px;">
                        <br>
                        <br>
                        <div style="margin-left: 20px;" >
                            <form action="" style="padding: 20px;">
                                <svg height="130" width="500">
                                    <defs>
                                      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%"
                                        style="stop-color:rgb(255,255,0);stop-opacity:1" />
                                        <stop offset="100%"
                                        style="stop-color:rgb(255,0,0);stop-opacity:1" />
                                      </linearGradient>
                                    </defs>
                                    <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
                                    <text fill="#ffffff" font-size="35" font-family="Georgia"
                                    x="30" y="86">AlgoTech</text>
                                  Sorry, your browser does not support inline SVG.
                                  </svg>
                                </form>
                            <table>
                                <tr>
                                    <td>
                                        <img src="./assets/icons/signUp-image.png" alt="login" height="400">
                                    </td>
                                    <td>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstName" class="form-control" value="" maxlength="50" required="">
                                                <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastName" class="form-control" value="" maxlength="50" required="">
                                                <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Personal number</label>
                                                <input type="text" name="personalId" class="form-control" value="" maxlength="50" required="">
                                                <span class="text-danger"><?php if (isset($personal_id_error)) echo $personal_id_error; ?></span>
                                            </div>
                                            <div class="form-group ">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                                                <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                                                <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                                            </div>  
                                                <input type="submit" class="btn btn-primary" name="signup" value="submit">
                                                Already have a account?<a href="login.php" class="btn btn-default">Login</a>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            </section>
            </section>
            </section>
            <footer class="footerDiv">
                <div class="st-footer-div">
                    <address>
                        <p class="headParagraph">KONTAKTI</p>
                        <p>Algo Tech</p>
                        <p>Rr.Zahir Pajaziti, 10000</p>
                        <p>Kosova</p>
                        <p>42000</p>
                        <p>Tel: +383 (0) 44 123 123</p>
                        <p>Fax: +383 (0) 44 123 123</p>
                        <p>Email: ardianbsyla@gmail.com</p>
                    </address>
                    <div>   
                        <p class="headParagraph">LINQE TE SHPEJTA</p>
                        <p><a href="http://www.facebook.com">Facebook</a></p><hr>
                        <p><a href="http://www.twitter.com">Twitter</a></p><hr>
                        <p><a href="http://www.linkedin.com">Linkedin</a></p><hr>
                        <p><a href="http://www.youtube.com">Youtube</a></p><hr>
                    </div>
                    <div>
                        <p class="headParagraph">NGA FAQJA</p>
                        <p><b>Zbritje në Algo Tech</b></p>
                        <p>Postuar nga Gashi.</p>
                        <p class="notif-p">Këtë javë kemi zbritje të madhe në Algo Tech. Zbritja përfshinë shumë produkte të shumë kërkuara.</p>
                        <a class="notif-a" href="./aboutUs.php">Lexoni më shumë >></a>
                    </div>
                    <div>
                        <p class="headParagraph">MERRNI NJOFTIMET TONA</p>
                        <form name="contactForm" method="post" onsubmit="return validateContactForm()">
                            <input type="text" name="emri" placeholder=" Emri:" class="text-button">
                            <p id="nameContactValidation"></p>
                            <input   name="email"  placeholder=" Email:" class="text-button" style="margin-top: 15px;">
                            <p id="emailContactValidation"></p>
                            <input type="submit" value="DËRGO" class="footerSubmitButton">
                            <a href="#headeri" class="footerSubmitButton kthehu-btn" >KTHEHU</a>
                        </form>
                    </div>
                </div>
                <div class="last-footer-div">
                    <p>Copyright &copy; 2020 - All Rights Reserved - Algo Tech</p>
                </div>
            </footer>
        </div>
    </body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Registration Form in PHP with Validation | Tutsmake.com</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8 col-offset-2">
<div class="page-header">
<h2>Registration Form in PHP with Validation</h2>
</div>
<p>Please fill all fields in the form</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstName" class="form-control" value="" maxlength="50" required="">
        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastName" class="form-control" value="" maxlength="50" required="">
        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
    </div>
    <div class="form-group">
        <label>Personal number</label>
        <input type="text" name="personalId" class="form-control" value="" maxlength="50" required="">
        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
    </div>
    <div class="form-group ">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
    </div>  
        <input type="submit" class="btn btn-primary" name="signup" value="submit">
        Already have a account?<a href="login.php" class="btn btn-default">Login</a>
</form>
</div>
</div>    
</div>
</body>
</html> -->