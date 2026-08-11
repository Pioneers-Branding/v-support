<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>V-Supporting-Lives|Thank-you</title>
 <?php include('header-links.php'); ?>
  <style>
.custom-button::before {
    position: absolute;
    content: "";
    border-radius: 4px;
    height: 100%;
    width: 100%;
    bottom: 0;
    left: 0;
    background: black;
    z-index: 3;
}
.custom-button::after {
   
    background:#a41f14;
   
}

      .min-height-section::before {
  
    background: #a41f14;
  
}
.overlayer {
   
    background:#a41f14;
}
.error-wrapper .error-content {
    max-width: 580px;
    margin: 0 auto;
}
.error-wrapper .main-thumb {
    max-width: 529px;
    margin: 0 auto 0px;
}
@media (min-width: 1400px){
.min-height-section {
    padding: 75px 0;
}}
.inner-logo {
    max-width: 220px;
    margin: 0 auto 17px;
}
.min-height-section {
    padding: 150px 0;
    min-height: 68vh;
   
}

  </style>

  
</head>

<body>
 <?php include('header.php'); ?>

   


    <!-- ==========Error Section Starts Here========== -->
    <section class="error-section min-height-section bg_img" style="background-color:white">
        <div class="container">
            <div class="error-wrapper">
                <div class="inner-logo">
                    <a href="./index.html"><img src="./assets/images/v-support-logo.png" alt="error"></a>
                </div>
                <div class="main-thumb">
                    <img src="./assets/images/THANK YOU 2.png" alt="error">
                </div>
                <div class="error-content">
                    <h3 class="title">We appreciate your assistance.</h3>
                    <p> We Shall Get Back To You Shortly !!!</p>
                    <a href="./index" class="custom-button"><span>go back to home</span></a>
                </div>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>
   
    
    <?php include('script-link.php'); ?>         
   
</body>

</html>