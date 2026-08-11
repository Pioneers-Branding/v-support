 <style>
 .footer-widget.widget-about .contact li a {
    color: #ffffff;
}
.footer-widget.widget-about .contact li a:hover {
    color: #ffffff;
}
 .footer-links-div{
             /*border:2px solid red;*/
             display:flex;
             flex-direction:row;
             justify-content:space-around;
             width:600px;
         }
         .footer-map{
                width:250;
                height:150; 
         }
     @media all and (min-width: 550px) and (max-width: 950px) {
         .footer-links-div{
             /*border:2px solid red;*/
             display:flex;
             flex-direction:row;
             justify-content:space-around;
         }
         
     }
     @media all and (max-width: 950px) {
         .footer-map-div{
             width:80vw;
         }
          .footer-map{
                width:80vw;
                height:150px; 
         }
     }
     @media (min-width: 1200px){
.footer-bottom {
    padding: 15px 0;
}}
 </style>
 <footer class="bg_img" data-background="assets/images/"style="background-color:black;color:white" >
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4 mb--50">
                   
                    <div class="col-lg-3">
                   
                     
                       <div class="footer-widget widget-about">
                        <div>
                            <a href="index">
                                <img src="assets/images/logo white.png" alt="logo">
                            </a>
                        </div>
                        <p class="pt-2">V-Supporting Lives is a prestigious organization with multiple branches, partnered with KiDZEE, GD Goenka Healthcare Academy, CoDaC, Teacher Training Institute, and KiDZ CLUB. We take pride in offering a comprehensive range of after-school activities, preschool education, career training programs, and empowerment initiatives.</p>
                        
                      
                      
                    </div>
                    </div>
                    <div class="footer-links-div">
                        <div class="col-lg-4 ">
                            <div class="footer-widget widget-about">
                                <h5 class="title text-white">Important Links</h5>
                               
                                <ul class="contact">
                                   
                                      <li><a href="kidzee">KIDZEE</a></li>
                                    <li><a href="kids-club">KiDZ CLUB</a> </li>
                                 
                                     <li><a href="codac">CoDaC</a></li>
                                      <li><a href="tti">TEACHERS TRAINING INSTITUTION</a> </li>
                                     <li> <a href="gd-goenka">GD GOENKA Healthcare Academy </a></li>
                                    <!--<li><a href="#">Blogs</a> </li>-->
                                    <!-- <li></li>-->
                                    <!--<li>Kids Club </li>-->
                                   
                                </ul>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-3 ">
                            <div class="footer-widget widget-about">
                                <h5 class="title text-white">Quick Links</h5>
                               
                                <ul class="contact">
                                    <li><a href="index">Home</a></li>
                                    <li><a href="about">About</a></li>
                                     <li><a href="gallery">Gallery</a> </li>
                                      <li><a href="event">Events</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                     </ul>
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget widget-about footer-map-div">
                            <h5 class="title text-white">Contact Us</h5>
                          
                         
                            <div>
                               
                               </div>
                               <ul class="contact">
                            
                                <li style="color:white;"><i class="fas fa-home"></i>Opposite Kesarval Gardens, Near Birla Cross, Panjim-Margaon Highway, Verna, Goa, 403801</li>
                                <li><i class="fas fa-headphones-alt"></i><a href="tel:+91-9226746748" style="color:white;">+91-9226746748</a></li>
                              
                                <li><i class="fas fa-globe-asia"></i><a href="https://www.v-supportinglives.com" style="color:white;">www.v-supportinglives.com</a></li>
                                <ul class="social-icons mt-3">
                                    <li class="text-white">
                                        <a href="#" class="facebook" style="padding-left:6px;"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="https://www.youtube.com/@Vsupportinglives-iw2lw" class="twitter"style="padding-left:6px"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="#" class="linkedin"style="padding-left:6px"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="mr-2">
                                        <a href="#" class="instagram text-white"style="padding-left:6px"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <!--<li>-->
                                    <!--    <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>-->
                                    <!--</li>-->
                                </ul> 
                            </ul>
                              
                        </div>
                    </div>
                </div>
                          <p class="pt-5"><b>Disclaimer:</b>V Supporting Lives, a respected organization, collaborates closely with partners like Kidzee, GD Goenka Healthcare Academy, CoDaC, TTI, and KiDZ CLUB. We excel in providing holistic preschool education, post-school engagements, career-oriented training, and empowerment initiatives.</p>

            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>
                    &copy; 2023 All Rights Reserved. Designed by <a
                        href="https://brandingpioneers.com/" target="_blank">Branding Pioneers</a>
                </p>
            </div>
        </div>
    </footer>
    
    <script>
            function limitNumberLength(input, maxLength) {
                if (input.value.length > maxLength) {
                    input.value = input.value.slice(0, maxLength);
                }
            }
        </script>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
                var form = document.querySelector('.contact-form');
            
                form.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent form from submitting initially
            
                    var recaptchaResponse = document.querySelector('#g-recaptcha-response').value;
            
                    if (recaptchaResponse.length === 0) {
                        alert('Please complete the reCAPTCHA challenge.');
                    } else {
                        // If reCAPTCHA is valid, submit the form
                        form.submit();
                    }
                });
            });
        </script>
        
        
        					
<!--<script>-->
<!--	if (!document.querySelector('#ftlamdf9q')) {-->
<!--		var newDiv = document.createElement('div');-->
<!--		newDiv.setAttribute('key', 'Popup Congrats Dark');-->
<!--		newDiv.setAttribute('class', 'ft');-->
<!--		newDiv.setAttribute('id', 'ftlamdf9q');-->
<!--		var newScript = document.createElement('script');-->
<!--		newScript.setAttribute('src', 'https://cdn.fouita.com/widgets/0x1fbc19.js');-->
<!--		newDiv.appendChild(newScript);-->

<!--		document.body.appendChild(newDiv);-->
<!--	}-->
<!--</script>-->
    
    