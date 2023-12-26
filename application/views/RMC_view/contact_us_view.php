
<?php
$this->load->view('RMC_view/layout/header_view.php');
?>

<head>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/contactus.css">
</head>

<style>

.banner {
    position: relative;
    width: 100%;
    height: 532px; /* Adjust the height of the banner */
    background-image: url('assets/image/contactus/Image 3/Image 3.png');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 20px; 
    box-sizing: border-box; 
  }

</style>

<body>
<div class="banner">
    <div class="banner-back">
    <h1 class="banner-title"  >Get In Touch <span class="decoration">Wit</span>h Us</h1>
    <BR>
     <a href="#" class="banner_btn" >Home <i class="fa-solid fa-arrow-right" style="color: #fea92c;"></i> Contact </a>
     </div>
</div>
<br>

<div class="container">
    <h4> <span class="decoration">Get</span> In Touch With Us</h4>
    <br><br>
    <p class="contact-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu urna convallis,<br> fermentum neque sed, suscipit risus.</p>
</div>
<br><Br><br>

<div class="container">
<div class="row">
    <div class="">
    <div class="card card1" style="width: 18rem; ">
    <div class="card-body">
    <h5 class="card-title1"><i class="fa-solid fa-map-location-dot fa-2xl"></i><br><br>Registered Office</h5>
    
    <p class="card-text-con">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="container-sch">
    <div class="clock-icon">
    <i class= " fas fa-clock fa-2xl" style="color: #ffffff;"></i>  
    </div>
    <p class="card-text-con2" >  Working Hours :<Br> 09:00 - 18:00<Br> Mon - Sat</p>
  </div>
  </div>
</div>

    </div>
    <div class="">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title2"><i class="fa-solid fa-phone fa-lg"></i> Phone</h5>
    <h6 class="card-subtitle mb-2 text-muted"> +91 9820536562 </h6><Br>
    <p class="email-icon"><i class="fa-solid fa-envelope fa-xl"></i> Email </p>
    <p class="email-list" >rmcpl_ltd@rediffmail.com<br>rmcpl_ltd@yahoo.com<br>info@ranemanagementconsultant.com</p>
  </div>
</div>
    </div>
</div>
</div>


 <div class="map-container">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.67292617055!2d72.71637172663159!3d19.082502006097524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1700544552767!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div>
 <br>

 <div class="container">
    <div class="row">
        <div class="col-md-5 ">
            <h3>Branch Office</h3>
            <p>Shop No- 07, Kamla Park Building, Phatak Road Near Post Office, Bhayandar West</p>
            <br>
            <h3>Branch Office</h3>
            <p>15, Ground Floor, Sahakar Jyot, Chhatrapati Shivaji Marg, Near Main Municipal Office, Bhayander ( W ),</p>
            <br>
            <h3>Branch Office</h3>
            <p>Meroo Housing Society Ltd., Flat No. 002, Wing-A, Phase 11, Manvel Pada Road, Virar (East), Dist. Palghar - 401303.</p>
        </div>
<div class="col-md-5 index">

<div class="container-form-2">

  <h1 class="head-form-card" >Get In Touch</h1>
<br>
  <form action="/contact" method="post">
     
<div class="form-group1" >
    <div class="form-input-1">
        <input type="text" class="input1" placeholder="First Name" name="first_name" id="first_name" required>
    </div>
 
    <div class="form-input-1">
        <input type="text" class="input1" name="first_name" placeholder="Last Name" id="first_name" required>
    </div>
    </div>
    <br>
 <div class="form-group1">
    <div class="form-input-1">
        <input type="text" class="input1" placeholder="Company" name="first_name" id="first_name" required>
    </div>
 
    <div class="form-input-1">
        <input type="text" class="input1" name="first_name" placeholder="  State" id="first_name" required>
    </div>
</div>
    <Br>
    <div class="form-group2">
<input type="text" class="input2" name="first_name" placeholder="  Country" id="first_name" required>
<br>
<input type="text" class="input3" name="first_name" placeholder="  Phone" id="first_name" required>
<bR>
<input type="text" class="input3" name="first_name" placeholder="  Email" id="first_name" required>
<bR>
<input type="text" class="input4" name="first_name" placeholder="  Message" id="first_name" required>
<br>
<input type="submit" class="input-submit" name="first_name" placeholder="  Submit " id="first_name" required>

</div>

  </form>
  </div>
</div>
 


        </div>
    </div>
 </div>
<bR><bR><br>
 <div class="container">
    <div class="email-input">
        <div class="row">
            <div class="col sub-1">
                <h5 style="font-size: 25px; font-weight:700;">Subscribe & Get More Information</h5><Br>
                <p style="color:white" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu urna convallis, fermentum neque sed, suscipit risus.</p>
            </div>
            <div class="col">

            <form class="search-wrapper cf">
        <input type="text" placeholder="Enter your email..." required style="box-shadow: none">
        <button type="submit"> Subscribe  <i class="fas fa-arrow-circle-right fa-lg"></i></button>
    </form>

            </div>
        </div>
    </div>
 </div>
 <bR><bR><br>

<?php
		$this->load->view('RMC_view/layout/footeer_view.php');
?>