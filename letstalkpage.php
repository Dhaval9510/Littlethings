<?php

require_once 'submit.php';

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="author" content="" />
      <title>Little Things</title>
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <!-- Bootstrap icons-->
      <link rel="stylesheet" type="text/css" href="css/slick.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />
      <link href="css/font-awesome.min.css" rel="stylesheet" />
   </head>
   <body>
      <!-- Navigation-->
      <nav class="navbar navbar-light bg-light static-top">
         <div class="container">
            <a class="navbar-brand" href="#!">
               <svg class="logo-desktop" width="59" height="62" viewBox="1 0 44 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.9225 25.576H11.0013L11.0013 0H0.000736181L0 36.5766H21.9225V25.576Z" fill="url(#paint0_linear_271_134)"/>
                  <path d="M43.1375 36.6745H32.137L32.137 11.0985H21.2155V0.0979451H43.1379L43.1375 36.6745Z" fill="url(#paint1_linear_271_134)"/>
                  <defs>
                     <linearGradient id="paint0_linear_271_134" x1="21.569" y1="0" x2="21.569" y2="36.6745" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF9501"/>
                        <stop offset="1" stop-color="#FF215E"/>
                     </linearGradient>
                     <linearGradient id="paint1_linear_271_134" x1="21.569" y1="0" x2="21.569" y2="36.6745" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FF9501"/>
                        <stop offset="1" stop-color="#FF215E"/>
                     </linearGradient>
                  </defs>
               </svg>
               <span class="logo-name">littlethings.</span>
            </a>
            <div class="mobile_nav">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div class="menubuttons">
                     <a href="file:///Users/apple/Desktop/NEW%20PROJECT%20YASASWY/New_Web_page/index.html" class="first_nav">Menu</a>
                     <a href="#" class="second_nav">Home</a>
                     <a href="#" class="third_nav">Showreel</a>
                     <a href="file:///Users/apple/Desktop/NEW%20PROJECT%20YASASWY/New_Web_page/letstalkpage.html" class="fourth_nav">Let's Talk</a>
                     <a href="#" class="fifth_nav">littlethings@example.com</a>
                  </div>
               </div>
               <span style="font-size:41px;cursor:pointer" onclick="openNav()">&#9868;</span>
            </div>
            <div class="desktop_nav">
               <a href="file:///Users/apple/Desktop/NEW%20PROJECT%20YASASWY/New_Web_page/index.html" class="dsecond_nav"><i class="fa fa-circle" aria-hidden="true"></i>Home</a>
               <a href="#" class="dthird_nav">Showreel</a>
               <a href="file:///Users/apple/Desktop/NEW%20PROJECT%20YASASWY/New_Web_page/letstalkpage.html" class="dfourth_nav">Let's Talk</a>
            </div>
      </nav>
     


<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>

<!-- Display contact form -->
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" class="form-control" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" placeholder="Name" required="">
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Email address" required="">
    </div>
    <div class="form-group">
        <input type="text" name="subject" class="form-control" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="Subject" required="">
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" placeholder="Write your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    <div class="form-group">
        <input type="file" name="attachment" class="form-control">
    </div>
    <div class="submit">
        <input type="submit" name="submit" class="btn" value="SUBMIT">
    </div>
</form>




     
      <footer class="footer bg-light newfooter">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 h-100 text-lg-start">
                  <div class="firstlinefoot">Have an Idea?</div>
                  <div class="secondlinefoot">Tell us about it</div>
                  <hr>
                  <div class="Letstalkbutton">Let's Talk</div>
                  <div class="email-idd">littlethings@example.com</div>
                  <hr>
               </div>
               <div class="col-lg-6 h-100 text-lg-end">
                  <div class="Social-mediaicons">
                     <div class="sosicon"><i class="fa fa-instagram" aria-hidden="true"></i><a class="socialtext">Instagram</a></div>
                     <div class="sosicon"><i class="fa fa-facebook" aria-hidden="true"></i><a class="socialtext">Facbook</a></div>
                     <div class="sosicon"><i class="fa fa-twitter" aria-hidden="true"></i><a class="socialtext">Twitter</a></div>
                     <div class="sosicon"><i class="fa fa-youtube-play" aria-hidden="true"></i><a class="socialtext">Youtube</a></div>
                     <div class="sosicon"><i class="fa fa-whatsapp" aria-hidden="true"></i><a class="socialtext">Whatsapp</a></div>
                     <div class="sosicon"><i class="fa fa-linkedin" aria-hidden="true"></i><a class="socialtext">Linkedin</a></div>
                  </div>
               </div>
            </div>
         </div>
      </footer>




      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script type="text/javascript" src="js/slick.js"></script>
      <script src="js/scripts.js"></script>
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <!-- * *                               SB Forms JS                               * *-->
      <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
      <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
   </body>
</html>