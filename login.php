<?php
    session_start();
    require_once "db.php";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sqlLogin = "SELECT * FROM user WHERE email = '" . $email. "' and password = '" . md5($password). "'";
        $resultLogin = mysqli_query($con, $sqlLogin);
        if(mysqli_num_rows($resultLogin) > 0){
            header("location: registration.php");
            if ($row = mysqli_fetch_array($resultLogin)) {
                $personalId = $row['personal_id'];
                $email = $row['email'];
                session_start();
                $_SESSION['personal_id'] = $personalId;
                $_SESSION['email'] = $email;
                header("Location: home_page.php");
            } 
        }else {
            $error_message = "Incorrect Email or Password!!!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/css/reset.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/home-page-style.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/login-page-style.css" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <title>AlgoTech</title>
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
                    <div class="after-head">
                        <h2>AlgoTech</h2>
                        <p>Pajisuni me kompjuterin m&#235; t&#235; mir&#235;</p>
                        <input type="text" style="margin-left: 355px; border-radius: 0px;" class="text-button" name="search" placeholder="Kërkoni këtu...">
                        <input type="button" value="Search" class="search-btn" name="submit-search-btn">
                    </div>
                <section class="st-section">
                    <section class="nd-section">
                        <section class="rd-section">
                            <div style="width: 1000px; height: auto; background-color: #3f3f3f; margin-left: -50px; padding-bottom: 50px;">
                                <br>
                                <br>
                                <div style="margin-left: 50px;" >
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                                        <input type="submit" class="btn btn-primary" name="login" value="submit">
                                        <br>You don't have account?<a href="registration.php" class="mt-3">Click Here</a>
                                    </form>
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

