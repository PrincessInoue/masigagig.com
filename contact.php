<?php
if (isset($_POST["submit"])){
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $body = $message;

    //Always set content-type when sending HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    //Another header
    $headers .= 'From: irene.hapa@gmail.com';

    $mail = mail($to, $body, $message, $headers);


    if($mail){
        echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
}



?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "contact.css">
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel = "stylesheet" href = "https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src = "https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-----NavigationBar---->
    <section id = "navbar-bar">
     <nav class ="navbar navbar-expand-lg navbar-light">
   <a class = "navbar-brand" href = "main.html"><img src = "logo.jpg"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
     <span class = "navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item">
         <a class="nav-link" href="main.html">HOME</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="aboutus.html">ABOUT US</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="service.html">SERVICES</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="contact.html">CONTACT US</a>
       </li>
     </ul>
   </div>
   </nav>


   <div class="container">
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Let's get in touch</h3>
        <p class="text">
          Feel free to contact us if you have any inquries
        </p>

        <div class="info">
          <div class="information">
            <img src="iemog/location.png" class="icon" alt="" />
            <p>Bay 16 Cervantes Compound, KM 17 West Service Road,
              Paranaque, 1700 Metro Manila</p>
          </div>
          <div class="information">
            <img src="iemog/email.png" class="icon" alt="" />
            <p>SOON</p>
          </div>
          <div class="information">
            <img src="iemog/phone.png" class="icon" alt="" />
            <p>8832-0332</p>
          </div>
        </div>

        <div class="social-media">
          <p>Connect with us :</p>
          <div class="social-icons">
            <a href="https://www.facebook.com/profile.php?id=100057282286502" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-google"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">

        <form action="contact.php" autocomplete="off" method = "GET">
          <h3 class="title">Contact us</h3>
          <div class="input-container">
            <input type="name" name="name" class="input" />
            <label for="">Full Name</label>
            <span>Name</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Your Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Message</label>
            <span>Message</span>
          </div>
        
          <input type="submit" name = "submit" value="Send" class="btn" />
         
        </form>
      </div>
    </div>
  </div>

    <script src = "app.js"></script>
        

    </section>
    </body>

</html>