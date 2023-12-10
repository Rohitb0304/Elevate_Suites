<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:ital@0;1&display=swap');

    body {
      padding: 1rem;
      background-color: #dfe6e9;
      font-family: 'Lato', sans-serif;
    }

    .header {
      text-align: center;
    }

    .header img {
      max-width: 200px;
    }

    .rooms {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 1rem;
      margin-top: 1rem;
    }

    .room {
      flex: 1 1 350px;
      background-color: #fff;
      border-radius: 2px;
      box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
      padding: 2rem;
    }

    .room img {
      max-width: 100%;
      height: auto;
    }

    .room h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .room .rate {
      color: #f39c12;
    }

    .room .description,
    .room .full-description {
      line-height: 1.6rem;
      margin-bottom: 1rem;
    }

    .room .show-more-btn,
    .room .show-less-btn {
      color: #0984e3;
      cursor: pointer;
      border: none;
      background: none;
      padding: 0;
      font-size: 0.9rem;
    }

    .room .show-less-btn {
      display: none;
    }

    .room .button {
      display: flex;
      align-items: center;
      margin-top: 1rem;
    }

    .room .button a {
      background-color: #0984e3;
      color: #fff;
      text-decoration: none;
      padding: 0.5rem 1rem;
      border-radius: 4px;
      margin-right: 1rem;
      font-size: 0.9rem;
    }

    .room .button h3 {
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="logo/elevate-suites-logo.png" alt="Hotel Logo">
  </div>

  <section class="rooms">
    <div class="room">
      <img src="images/room-1.png" alt="">
      <h2>Deluxe Rooms</h2>
      <div class="rate">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <p class="description">
        At 32 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
      </p>
      <p class="full-description hide">
        At 32 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
        This luxurious room, with a large bedroom, open balcony, and elegant bathroom features a work desk, a direct-dial phone, electronic safe and tea/coffee maker.
        The room is rigged with a high-definition television, for entertainment.
        The fully furnished bathroom is outfitted with a bathtub and bathrobes, to ensure you live in comfort.
      </p>
      <button class="show-more-btn" onclick="toggleDescription(this)">Show More</button>
      <button class="show-less-btn hide" onclick="toggleDescription(this)">Show Less</button>
      <div class="button">
        <a href="bookings.php">BOOK NOW</a>
        <h3>3,999 rupees<span><br> Per Night</span></h3>
      </div>
    </div>

    <div class="room">
      <img src="images/room-2.png" alt="">
      <h2>Premium Room</h2>
      <div class="rate">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <p class="description">
        At 35 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
      </p>
      <p class="full-description hide">
        At 35 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden or a Pool view.
        This lavish room, splendid with its style and appearance, offers large bedrooms, a seating area, and a balcony.
        The room is outfitted with a stylish work desk, a study table and chair, sofa and a high-definition.
        The elegant bathroom, rain shower, and bathrobes, to revive your senses.
      </p>
      <button class="show-more-btn" onclick="toggleDescription(this)">Show More</button>
      <button class="show-less-btn hide" onclick="toggleDescription(this)">Show Less</button>
      <div class="button">
        <a href="bookings.php">BOOK NOW</a>
        <h3>5,299 rupees<span><br> Per Night</span></h3>
      </div>
    </div>
    <div class="room">
      <img src="images/room-7.png" alt="">
      <h2>Premium Suite</h2>
      <div class="rate">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <p class="description">
      At 69 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden view.</p>
      </p>
      <p class="full-description hide">
      At 69 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden view. 
                A modern suite, equipped with a work desk with direct-dial working desk, phone and tea/coffee maker, make it perfect for a business traveler. 
                The room space comes with a high-definition television and minibar, for entertainment and pleasure respectively. 
                Indulge in the plush bathroom featuring bathtub, shower cubicle, and bathrobes, to feel lively again.</p>
      <button class="show-more-btn" onclick="toggleDescription(this)">Show More</button>
      <button class="show-less-btn hide" onclick="toggleDescription(this)">Show Less</button>
      <div class="button">
        <a href="bookings.php">BOOK NOW</a>
        <h3>9,999 rupees<span><br> Per Night</span></h3>
      </div>
    </div>
    <div class="room">
      <img src="images/room-7.png" alt="">
      <h2>Deluxe Suite</h2>
      <div class="rate">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <p class="description">
      At 75 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Beach view.</p>
      <p class="full-description hide">
      At 75 Sq Mt, this room comes with a King Bed, Inclusive of 30 Mbps WiFi for Unlimited Devices and offers a Garden view. 
                This suite, with world-class comfort, features a work desk with direct-dial working desk phone and tea/coffee maker, to ensure business is smooth. 
                Pour yourself a drink from our fully-stocked minibar and enjoy the view from the private balcony. Freshen up using the fully furnished bathroom provided with a bathtub, shower cubicle, and bathrobes. 
                An air conditioner, safe and 24 hours in-room dining are the standard features.</p>
      <button class="show-more-btn" onclick="toggleDescription(this)">Show More</button>
      <button class="show-less-btn hide" onclick="toggleDescription(this)">Show Less</button>
      <div class="button">
        <a href="bookings.php">BOOK NOW</a>
        <h3>16,299 rupees<span><br> Per Night</span></h3>
      </div>
    </div>
    <div class="room">
      <img src="images/room-7.png" alt="">
      <h2>Executive Suite</h2>
      <div class="rate">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
      <p class="description">
      At 79 Sq Mt, this room comes with a King Bed, Inclusive of 60 Mbps WiFi for Unlimited Devices and offers a Beach view.</p>
      <p class="full-description hide">
      If you are a business person, you probably have scheduled meetings or you need a calm and quiet place where you can deal with your business matters. 
      Executive suite is perfect for business men and women, and top managers of companies because these suites are combining together a fully serviced office,
      meeting room and a luxurious hotel room together.</p>
      <button class="show-more-btn" onclick="toggleDescription(this)">Show More</button>
      <button class="show-less-btn hide" onclick="toggleDescription(this)">Show Less</button>
      <div class="button">
        <a href="bookings.php">BOOK NOW</a>
        <h3>28,999 rupees<span><br> Per Night</span></h3>
      </div>
    </div>
  </section>
<script>
    function toggleDescription(button) {
      const room = button.closest(".room");
      const fullDescription = room.querySelector(".full-description");
      const showMoreBtn = room.querySelector(".show-more-btn");
      const showLessBtn = room.querySelector(".show-less-btn");

      fullDescription.classList.toggle("hide");
      showMoreBtn.classList.toggle("hide");
      showLessBtn.classList.toggle("hide");
    }
  </script>
<?php require('footer.php'); ?>
</body>
</html>

