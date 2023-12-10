<!DOCTYPE html>
<html>
<head>
  <title>Contact Information</title>
  <style>
    .contact-info {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
      text-align: center;
    }
    .header{
      text-align: center;
    }
    .header img{
      display: inline-block;
      
    }

    .contact-info h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .contact-info p {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .contact-form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 5px;
      text-align: center;
    }

    .contact-form h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .contact-form label {
      display: block;
      margin-bottom: 10px;
      text-align: left;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .contact-form button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #45a049;
    }
    footer {
    position: relative;
    display: flex; /* Added display property */
    background: #282834;
    color: #b6b7b9;
    padding: 5% 0 2% 0;
  }

  .links {
    color: #b6b7b9; /* Color for the links text */
  }

  .links a {
    color: #b6b7b9; /* Color for the links */
    text-decoration: none; /* Remove underline from links */
  }

  .links a:hover {
    color: #7fc142; /* Color when hovering over links */
  }

  footer .grid {
    grid-template-columns: 2fr 2fr 3fr;
  }


  footer p {
    color: #b6b7b9;
    font-size: 15px;
    line-height: 10px;
    text-align: center;

  }

  footer .icon i {
    margin: 10px 10px 10px 0;
    color: #b6b7b9;
  }

  footer h2 {
    color: #fff;
    margin-bottom: 10px;
  }

  footer li {
    margin-bottom: 20px;
  }

  footer i {
    color: #7fc142;
    margin: 20px 0;
    margin-right: 20px;
  }

  footer label {
    margin: 20px 0;
  }

  footer links {
    color: rgba(0,0,200,40);
  }

  .legal {
    padding: 15px 0;
    background: #282834;
    color: #b6b7b9;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
  }
  </style>
</head>

<body>
  <div class="header">
    <img src="logo/elevate-suites-logo.png" alt="Hotel Logo">
  </div>
  <div class="contact-info">
    <h2>Contact Information</h2>
    <p><strong>Address:</strong> Elevate Suites, Alibaug, Maharashtra, India</p>
    <p><strong>Phone:</strong> +91 9373380280</p>
    <p><strong>Email:</strong> elevate.suites.business@gmail.com</p>
    <p><strong>Website:</strong> www.elevatesuites.com</p>
  </div>

  <div class="contact-form">
    <h2>Contact Us</h2>
    <form action="submit_form.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>

  </head>
  <body>
    
  <footer>
  <div class="container grid">
    <div class="box">
      <img src="logo/png/logo-no-background - Copy.png" alt="">
      <p></p>

      <div class="icon">
        <a href="instagram.com/rohit4103_"><i class="fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/rohit.bansode.4103">
          <i class="fa fa-facebook-f"></i>
        </a>
        <a href="@rohit_rajratna">
          <i class="fa fa-twitter"></i>
        </a>
        <a href="https://maps.app.goo.gl/zUjHD7yXqCUZJRox9"></a>
      </div>
    </div>

    <div class="links">
      <h2>Links</h2>
      <ul>
        <li><a href="about_us.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="privacypolicy.php">Privacy Policy</a></li>
      </ul>
    </div>

    <div class="box">
      <h2>Contact Us</h2>
      <p></p>
      <i class="fa fa-location-dot"></i>
      <label>Elevate Suites, Alibaug, Maharashtra, India </label> <br>
      <i class="fa fa-phone"></i>
      <label>+91-9373380280</label> <br>
      <i class="fa fa-envelope"></i>
      <label>elevate.suites.business@gmail.com</label> <br>
      <i class="fa fa-map-location-dot"></i>
      <iframe class= "m-50 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3780.70808947171!2d72.88445600000001!3d18.632195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTjCsDM3JzU1LjkiTiA3MsKwNTMnMDQuMCJF!5e0!3m2!1sen!2sin!4v1686767218144!5m2!1sen!2sin" width="300" height="200" style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <h3>Address</h3>
      <a href="https://maps.app.goo.gl/zUjHD7yXqCUZJRox9" target="_blank" class="d-inline-block text-decorration-none text-dark">
        <i class="bi bi-geo-alt-fill"></i>Elevate Suites, Alibaug, Maharashtra
      </a>
    </div>
  </div>
</footer>

<div class="legal">
  <p class="container">Copyright © 2023 - ELEVATE SUITES Hotel Group. All rights reserved.</p>
</div>

  </body>

</html>
