<?php
include ("header.php");
?>

<style>
* {
  box-sizing: border-box;
}

.cont {
  position: relative;
  width: 33.3%;
  width: 33.3%;
  height: 33.3%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.cont:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>

<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo FRONT_SITE_PATH?>shop">Home</a></li>
                        <li class="active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
       <!-- <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Our Location</h4>
                                <p>012 345 678 / 123 456 789</p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Contact us Anytime</h4>
                                <p>Mobile: 012 345 678</p>
                                <p>Fax: 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Write Some Words</h4>
                                <p><a href="#">Support24/7@example.com </a></p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div> -->


<!------------------------ founder Detail ----------------------------->
    <br><br>
    <center>
        <h1 style="font-family: Cursive; background-color: LightBlue; Color: White; font-size: 35px; margin-right:70px; margin-left:70px ">Founders of Dark Town Cafe
        </h1>

    </center>
 

 
<div class="row">
  <div class="cont">
    <a href="https://instagram.com/_143_vishal?igshid=YmMyMTA2M2Y="><img src="assets/img/vishal.jpg" alt="Vishal" class="image">
    <div class="overlay">
    <div class="text">
            <h2>Vishal</h2>
        <p class="title">Creator and Editor</p></div>
    </div> 
     <a href="https://instagram.com/_143_vishal?igshid=YmMyMTA2M2Y=" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on Instagram </p></a>
  </div> </a>
  <div class="cont">
    <a href="https://www.linkedin.com/in/garv-chawla-b2364b229"><img src="assets/img/garv.jpg" alt="Garv" class="image">
    <div class="overlay">
    <div class="text">
           <h2>Garv</h2>
           <p class="title">Creator and UI Designer</p></div>
    </div> 
    <a href="https://www.linkedin.com/in/garv-chawla-b2364b229" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on LinkedIn </p></a> 
  </div> </a>
  <div class="cont">
    <a href="https://www.linkedin.com/in/harsh-rana-7b17b0230/"> <img src="assets/img/harsh2.jpg" alt="Darshan" class="image">
    <div class="overlay">
    <div class="text"> 
         <h2>Harsh</h2>
         <p class="title">Creator and Editor</p></div>
    </div>  
    <a href="https://www.linkedin.com/in/harsh-rana-7b17b0230/" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on LinkedIn </p></a>
  </div></a>


   
</div>
 

<!-- ******************************************* Get in Touch *********************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="contact-message-wrapper">
                            <h4 class="contact-title">GET IN TOUCH</h4>
                            <div class="contact-message">
                                <form id="contact-form" action="contact_us_submit.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="name" placeholder="Full Name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="email" placeholder="Email Address" type="email" required>
                                            </div>
                                        </div>
										<div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="mobile" placeholder="Mobile" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style mb-20">
                                                <input name="subject" placeholder="Subject" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style">
                                                <textarea name="message" placeholder="Message" required></textarea>
                                                <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
include("footer.php");
?>