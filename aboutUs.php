<!DOCTYPE html>
<html manifest="demo.appcache">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/css/reset.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/home-page-style.css" type="text/css">
        <link rel="stylesheet" href="./assets/css/login-page-style.css" type="text/css">
        
        <title>AboutUs</title>
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
                    <div class="img-div">
                        <div class="mySlide fade" id="slide1" style="display: block;">
                            <img src="./assets/images/desktop-setup-art.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide2">
                            <img src="./assets/images/desktop-setup2.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide3">
                            <img src="./assets/images/desktop.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide4">
                            <img src="./assets/images/desktop-monitors-4.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                        <div class="mySlide fade" id="slide5">
                            <img src="./assets/images/desktop-5.jpg" alt="desktop setup" width="960" height="340">
                        </div>
                    </div>
                </div>
                <div class="scroll-img">
                    <div class="rectangle" id="rec1" onclick="currentSlide(1)" style="background-color: #ffffff;"></div>
                    <div class="rectangle" id="rec2" onclick="currentSlide(2)"></div>
                    <div class="rectangle" id="rec3" onclick="currentSlide(3)"></div>
                    <div class="rectangle" id="rec4" onclick="currentSlide(4)"></div>
                    <div class="rectangle" id="rec5" onclick="currentSlide(5)"></div>
                </div>
                <section class="st-section">
                    <section class="nd-section">
                        <section class="rd-section">
                            <div class="you-here">
                                <p style="margin-left: 30px;">Ju jeni në &nbsp; >> &nbsp; <a id="a-here" href="aboutUs.php">RRETH NESH</a></p>
                            </div>
                            <div style="padding: 20px;">
                                <p style="font-size: 30px; margin-bottom: 100px;">RRETH NESH</p>
                                <canvas id="myCanvas" width="580" height="60" style="border:1px solid #c3c3c3;">
                                </canvas>
                                <script>
                                    var canvas = document.getElementById("myCanvas");
                                    var ctx = canvas.getContext("2d");
                                    var grd = ctx.createLinearGradient(0, 190, 1900, 190);
                                    grd.addColorStop(0, "orange");
                                    grd.addColorStop(1, "red");
                                    ctx.fillStyle = grd;
                                    ctx.font = "30px Georgia";
                                    ctx.fillStyle = grd;
                                    ctx.fillText("TE DHENAT RRETH KOMPANIS TONE", 20, 40);
                                </script>
                                </canvas>
                                <hr size="1" width="100%" color="orange">
                                <div style="padding: 20px;">
                                    <p style="color: #3f3f3f;">AlgoTech, Inc., është kompani amerikane, e themeluar në SHBA. AlgoTech është platformë e përmbajtjes me video dhe studio të produksionit dhe kompani lidere e shitjes online; AlgoTech udhëheq me shërbime të internetit offline në online në Ballkan dhe Diasporën Shqiptare. 
                                        AlgoTech, Inc., është kompania me rritjen më të shpejtë në Ballkan që ofron shërbime të internetit dhe një nga start-ups me investimin më të madh VC nga investitorë me reputacion në Evropë. 
                                        AlgoTech është cilësuar në pozitën e 11 në listën‘Deloitte Technology Fast 50 ranking’ për Europën qendrore dhe në pozitën e parë në regjion, me rritje 1,500% në katër vitet e fundit.
                                        Vizioni ynë është të ndërtojmë ekonominë e internetit në Ballkan, duke u fokusuar në shërbime kryesore që mungojnë në regjion, për një treg prej rreth 12 milion banorë.</p>
                                </div>
                                <form name="feedbackForm" method="post" onsubmit="return validateFeedBackForm()">
                                    <div class="feedback-form">
                                        <p style="color: black; padding-bottom: 10px;">Ju lutem shkruani reagimin tuaj ketu !</p>
                                        <textarea id="subject" name="subject" placeholder="Shkruani dicka..." style="width:80%; height: 200px;"></textarea>
                                        <p id="textErrorValidation"></p>
                                    </div>
                                    <input type="submit" value="DERGO" class="footerSubmitButton" style="margin-left: 300px;" >
                                </form>
                            
                                
                                
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
                            <input name="email"  placeholder=" Email:" class="text-button" style="margin-top: 15px;">
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