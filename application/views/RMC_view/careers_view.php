<?php
$this->load->view('RMC_view/layout/header_view.php');
?>
<head>
<link rel="stylesheet" href="<?php base_url(); ?>assets/css/careers.css">

</head>
<style>

/* styles.css */


.banner {
      position: relative;
      width: 100%;
      height: 500px; /* Adjust the height of the banner */
      background-image: url('assets/image/Careers/architecture-concept-with-building-plan/architecture-concept-with-building-plan@2x.png'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      color: white;
      text-align: left; /* Align text to the left within the banner */
      padding: 20px; /* Add padding for text */
      box-sizing: border-box; /* Include padding in width/height calculation */
    }
.banner-2{
      position: relative;
      width: 100%;
      height: 500px; 
      background-image: url('assets/image/Careers/Rectangle 107/Working Groups Banner.jpg'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      color: white;
      text-align: left; /* Align text to the left within the banner */
      padding: 20px; /* Add padding for text */
      box-sizing: border-box; /* Include padding in width/height calculation */
}
.banner-3{
      position: relative;
      width: 100%;
      height:700px; 
      background-image: url('assets/image/Careers/Image 3/Image 3.png'); /* Replace with your image URL */
      background-size: cover;
      background-position: center;
      color: white;
      text-align: left; /* Align text to the left within the banner */
      padding: 20px; /* Add padding for text */
      box-sizing: border-box; /* Include padding in width/height calculation */
}
</style>

<div class="banner">
  <div class="banner_back">
    <h1>Careers</h1>
    <BR>
  <a href="#" class="banner_btn" >Join our team of game-changers!</a>
</div>
</div>

<div class="container">
  <br><br>
<h4><span class="decoration">If we have</span> any openings we will contact you!</h4>
<br><br>
  <!-- <div class="container-form">
    <form action="#" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" >
      </div>
      <div class="form-group">
        <label for="resume">Resume:</label>
        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" >
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" ></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div> -->
  <div class="container-form">
  <form method="post" action="<?=base_url('email')?>" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" >
        </div>
        <div class="form-group">
            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" >
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" ></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
  </form>

</div>
  </div>
  <br>


  <div class="banner-2">
<center><h1 class="banner-2-text "><span class="decoration">Working</span> Groups</h1></center><br>
<p class="banner-2-para">You are in charge of your career, but you’re not alone.<br> We are organized to help you with Career Coaches, Progress Managers, & Trainers focused<br> on your individual career needs.</p>
  </div>
<br><br>
<div class="banner-3">
<h1 class="banner-3-head">
  <spna style="font-size:66px">Start Your Career at</span>
  <span style="font-size:34px; font-weight: 700; "><span class="decoration"><br> Rane Man</span>agement Consultant Pvt.Ltd</span></h1>
  <br>
  <p  class="banner-3-text">We are always looking for great people to join our team & will accept resumes for consideration.</p>
  <button class="banner-3-btn">
    See Open Position
    <i class="fas fa-arrow-circle-right fa-lg"></i>
  </button>
  </div>
  
<?php
		$this->load->view('RMC_view/layout/footeer_view.php');
?>
