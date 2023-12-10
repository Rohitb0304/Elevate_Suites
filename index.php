<!DOCTYPE html>
<html lang="en" dir="ltr">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elevate Suites</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  <!--CHATBOT CODE STARTS-->
  <script>(function(w, d) { w.CollectId = "6485e1048b00e559957b6632"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
  <!--CHATBOT CODE ENDS-->
  <script>
    function showConfirmation() {
      alert("If rooms are available, we will contact you soon. Thank you!");
    }
  </script>
<style>
  .elevate{
    color: #13578e;
  }
</style>
</head>

<body>


  <header>
    <div class="content flex_space">
      <div class="logo">
        <img src="logo/png/logo-no-background.png" alt="">
      </div>
      <div><h1 class="elevate">Elevate your lifestyle</h1></div>
      <div class="navlinks">
        <ul id="menulist">
          <li><a href="index.php">home</a> </li>
          <li><a href="about_us.php">About Us</a> </li>
          <li><a href="rooms.php">rooms</a> </li>
          <li><a href="news.php">news</a> </li>
          <li><a href="contact.php">contact</a> </li><br><br>
      <!--    <li> <i class="fa fa-search"></i> </li>-->
        </ul>
        <span class="fa fa-bars" onclick="menutoggle()"></span>
      </div>
    </div>
  </header>


  <script>
    var menulist = document.getElementById('menulist');
    menulist.style.maxHeight = "0px";

    function menutoggle() {
      if (menulist.style.maxHeight == "0px") {
        menulist.style.maxHeight = "100vh";
      } else {
        menulist.style.maxHeight = "0px";
      }
    }
  </script>


  <section class="home">
    <div class="content">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/banner-1.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>A LUXURY BUSINESS HOTEL IN THE HEART OF Alibaug
              Elevate Suites delivers a dynamic experience that reflects Alibaug's innovative, entrepreneurial and cosmopolitan spirit. From our Hotel's vibrant restaurants and lounges to its tranquil gardens, this is where the city comes to connect and be inspired.</p>
            <div class="flex">
              <a href="contact.php"><button class="secondary-btn">CONTACT US</button></a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-2.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>A LUXURY BUSINESS HOTEL IN THE HEART OF Alibaug
              Elevate Suites delivers a dynamic experience that reflects Alibaug's innovative, entrepreneurial and cosmopolitan spirit. From our Hotel's vibrant restaurants and lounges to its tranquil gardens, this is where the city comes to connect and be inspired.</p>
            <div class="flex">
              <a href="contact.php"><button class="secondary-btn">CONTACT US</button></a>  
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/banner-3.png" alt="">
          <div class="text">
            <h1>Spend Your Holiday</h1>
            <p>A LUXURY BUSINESS HOTEL IN THE HEART OF Alibaug
              Elevate Suites delivers a dynamic experience that reflects Alibaug's innovative, entrepreneurial and cosmopolitan spirit. From our Hotel's vibrant restaurants and lounges to its tranquil gardens, this is where the city comes to connect and be inspired.</p>
            <div class="flex">
              <a href="contact.php"><button class="secondary-btn">CONTACT US</button></a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>

<section class="book">
  <div class="container flex_space">
    <div class="text">
      <h1> <span>Book </span> Your Rooms </h1>
    </div>
    <div class="form">
      <form class="grid" method="post" action="bookings.php" onsubmit="showConfirmation()">
        <!--<input type="text" name="room" placeholder="Room" required>-->
        <input type="date" name="arrival_date" placeholder="Arrival Date" required>
        <input type="date" name="departure_date" placeholder="Departure Date" required>
        <input type="number" name="adults" placeholder="Adults" required>
        <input type="number" name="children" placeholder="Children" required>
        <input type="submit" value="CHECK AVAILABILITY">
      </form>
    </div>
  </div>
</section>



  <section class="about top">
    <div class="container flex">
      <div class="left">
        <div class="heading">
          <h1>WELCOME</h1>
          <h2>Elevate Suites</h2>
        </div>
        <p>Elevate Suites is a luxurious hotel nestled in the heart of Alibaug. With its prime location, the hotel offers guests convenient access to popular attractions, vibrant city life, and a wide array of dining and entertainment options.

          At Elevate Suites, we strive to provide an exceptional hospitality experience that surpasses expectations. Our beautifully designed rooms and suites are thoughtfully appointed with modern amenities and stylish decor, creating a comfortable and inviting atmosphere for our guests.</p>
        <a href="about_us.php"><button class="primary-btn">ABOUT US</button></a>
      </div>
      <div class="img-right">
        <img src="images/about.png" alt="">
      </div>

    </div>
  </section>

  <section class="counter top">
    <div class="container grid">
      <div class="box">
        <h1>1520</h1>
        <hr>
        <span>Customer</span>
      </div>
      <div class="box">
        <h1>1250</h1>
        <hr>
        <span>Happy Customers</span>
      </div>
      <div class="box">
        <h1>800+</h1>
        <hr>
        <span>Families visited</span>
      </div>

    </div>
  </section>


  <section class="rooms">
    <div class="container top">
      <div class="heading">
        <h1>EXPLORE</h1>
        <h2>Our Rooms</h2>
       
      </div>

      <div class="content mtop">
        <div class="owl-carousel owl-carousel1 owl-theme">
          <div class="items">
            <div class="image">
              <img src="images/room-1.png" alt="">
            </div>
            <div class="text">
              <h2>Deluxe Room</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p> At 32 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
              </p>
              <div class="button flex">
               <a href="bookings.php"><button class="primary-btn">BOOK NOW</button></a>
                <h3>₹3,999/- <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-2.png" alt="">
            </div>
            <div class="text">
              <h2>Premium Room</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>At 35 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
              </p>
              <div class="button flex">
                <a href="bookings.php"><button class="primary-btn">BOOK NOW</button></a>
                <h3>₹5,299/- <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-3.png" alt="">
            </div>
            <div class="text">
              <h2>Premium Suite</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>At 69 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden view.
              </p>
              <div class="button flex">
                <a href="bookings.php"><button class="primary-btn">BOOK NOW</button></a>
                <h3>₹9,999/- <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-4.png" alt="">
            </div>
            <div class="text">
              <h2>Deluxe Suite</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>At 75 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Beach view.
              </p>
              <div class="button flex">
               <a href="bookings.php"><button class="primary-btn">BOOK NOW</button></a>
                <h3>₹16,299/- <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          <div class="items">
            <div class="image">
              <img src="images/room-8.png" alt="">
            </div>
            <div class="text">
              <h2>Executive Suite</h2>
              <div class="rate flex">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>At 79 Sq Mt, this room comes with a King Bed, Inclusive of 60 Mbps WiFi for Unlimited Devices and offers a Beach view.
              </p>
              <div class="button flex">
                  <a href="bookings.php"><button class="primary-btn">BOOK NOW</button></a>
                <h3>₹28,999/- <span> <br> Per Night </span> </h3>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 40,
      nav: true,
      dots: false,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2,
          margin: 10,
        },
        1000: {
          items: 3
        }
      }
    })
  </script>



  <section class="gallery">
    <div class="container top">
      <div class="heading">
        <h1>PHOTOS</h1>
        <h2>Our Gallery</h2>

      </div>
    </div>

    <div class="content mtop">
      <div class="owl-carousel owl-carousel1 owl-theme">
        <div class="items">
          <div class="img">
            <img src="images/gallery-1.png" alt="">
          </div>
          <div class="overlay">
            <span class="fa fa-image"> </span>
            <h3>A Living room of the Hotel</h3>
          </div>
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-2.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-3.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-4.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-5.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-6.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-4.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-3.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-1.png" alt="">
          </div>
        
        </div>
        <div class="items">
          <div class="img">
            <img src="images/gallery-6.png" alt="">
          </div>
        
        </div>
      </div>
    </div>
  </section>


  <script>
    $('.owl-carousel1').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 1000,
      autoplayHoverPause: true,
      navText: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 4,
        },
        1000: {
          items: 6
        }
      }
    })
  </script>


  <section class="services top">
    <div class="container">
      <div class="heading">
        <h1>SERVICES</h1>
        <h2>Our Services</h2>
        <p>Whether you are travelling for business or pleasure, the luxury hotel services offered by the five star Grand Palace Hotel make it an ideal choice for your stay in Elevate Suites.
      </div>


      <div class="content flex_space">
        <div class="left grid2">
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-champagne-glasses"></i>
              <h3>Delious Food</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-person-biking"></i>
              <h3>Fintness</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-wifi-strong"></i>
              <h3>Strong WiFi</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-air-freshener"></i>
              <h3>Air Conditioned Rooms</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-swimming-pool"></i>
              <h3>A Giant Swimming Pool</h3>
            </div>
          </div>
          <div class="box">
            <div class="text">
              <i class="fa-solid fa-room-service"></i>
              <h3>Room Service(24-hour)</h3>
            </div>
          </div>
          

        </div>
        <div class="right">
          <img src="images/service.png" alt="">
        </div>
      </div>
    </div>
  </section>




  <section class="Customer top">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>“The uniquely designed resort blends well with nature. 
            The exquisite countryside, breathtaking views and exciting nature trails will assure you
             of a memorable holiday at one of the most breathtaking Elevate Suites in the region.</p>
          <h3>Elevate Suites</h3>
          <!--<label>Julia Robertson</label>-->
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>“Lovely Hotel with Elevate Suites as the backdrop!”</p>
          <h3>Malinda Gunawardana</h3>
          <!--<label>Julia Robertson</label>-->
        </div>
        <div class="item">
          <i class="fa-solid fa-quote-right"></i>
          <p>“The uniquely designed resort blends well with nature. 
            The exquisite countryside, breathtaking views and exciting nature trails will 
            assure you of a memorable holiday at one of the most breathtaking Elevate Suites in the region.</p>
          <h3>Elevate Suites</h3>
          <!--<label>Elevate Suites</label>-->
        </div>
      </div>
    </div>
  </section>
  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1,
        },
        1000: {
          items: 1
        }
      }
    })
  </script>

  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>
  
<?php require('footer.php'); ?>  

 
</body> 
 
</html>