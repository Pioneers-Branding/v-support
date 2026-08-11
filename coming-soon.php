<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>About-V-support</title>

   <?php include('header-links.php'); ?>
   </head>
   <body>
       
    <!-- ==========Header Section Starts Here========== -->
 <?php include('header.php'); ?>
    <!-- ==========Header Section Ends Here========== -->
         <!-- ==========Coming Soon Section Starts Here========== -->
    <section class="coming-soon-section min-height-section bg_img" data-background="./assets/images/error-bg.jpg">
        <div class="container">
            <div class="coming-wrapper">
                <div class="inner-logo">
                    <a href="./index.html"><img src="./assets/images/v-support-logo.png" alt="error"></a>
                </div>
                <ul class="coming-countdown">
                    <li>
                        <h4 class="count-title"><span class="days">00</span></h4>
                        <p class="days_text">days</p>
                    </li>
                    <li>
                        <h4 class="count-title"><span class="hours">20</span></h4>
                        <p class="hours_text">Hours</p>
                    </li>
                    <li>
                        <h4 class="count-title"><span class="minutes">01</span></h4>
                        <p class="minu_text">Minutes</p>
                    </li>
                    <li>
                        <h4 class="count-title"><span class="seconds">20</span></h4>
                        <p class="seco_text">Secounds</p>
                    </li>
                </ul>
                <h1 class="coming-soon-title">Coming Soon</h1>
                <h3>Empowering Homepreneur and Homemakers</h3>
            </div>
        </div>
    </section>
    <!-- ==========Coming Soon Section Ends Here========== -->
     <script>
        jQuery(document).ready(function ($) {
            $('.coming-countdown').countdown({
                date: '31/09/2023 05:00:00',
                offset: +2,
                day: 'Day',
                days: 'Days'
            },
                function () {
                    alert('Countdowon Done!');
                });
        });
    </script>
      <?php include('script-link.php'); ?>         
   </body>
   </html>