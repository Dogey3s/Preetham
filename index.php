<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./static/index.css"/>
  <script> 
      function login(){
        window.location.href = "./login.php";
      }
      function signup(){
        window.location.href = "./registration.php";
      }
      function drop(){
        alert("SigUp or login to avail services!!!");
      }
  </script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./Assets/WhatsApp Image 2023-12-14 at 19.44.43_194b21a6.jpg" alt="Plegasus Entertainment Limited" height="65">Plegasus LTD
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutus.html">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false" disabled onclick="drop()">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./marriage.html">Marriage</a></li>
                        <li><a class="dropdown-item" href="./college.html">College & School Events</a></li>
                        <li><a class="dropdown-item" href="./birthday.html">Birthday Events</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Replace the search form with login and signup buttons -->
            <div class="d-flex">
                <button type="button" class="btn btn-outline-custom-orange me-2" onclick="login()">Login</button>
                <button type="button" class="btn btn-custom-orange" onclick="signup()">Signup</button>
            </div>
        </div>
    </div>
</nav>
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Welcome to OUR Company</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">"Welcome to the heart of extraordinary event experiences at [Plegasus Event Management Hub]! From the enchanting union of love in weddings to the vibrant celebrations of college events and the joyous milestones of birthdays, we are your partners in crafting unforgettable moments. Our passion is to turn your dreams into reality, ensuring each event is a masterpiece of joy, creativity, and perfection. Join us on this exciting journey, where every occasion becomes a cherished memory. Let the magic of [Your Event Management Hub] transform your celebrations into extraordinary experiences!"</p>
      </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="./Assets/87567585-banner-event-management-concept-vector-illustration-with-icons.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="moving-van" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Features:</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="./Assets/calendar-check.svg" alt="a briefcase icon" height="30"/>
        </div>
        <h3 class="fs-2 text-body-emphasis">Why Our Event Manager?</h3>
        <p>Our team of professional  are trained to prioritize efficiency, organization, and attention to detail. We understand that your possessions are more than just objects - they are a reflection of your life, memories, and experiences. That's why we take extra care to ensure that everything is packed and transported with the utmost care and attention.
          </p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="./Assets/bus-front.svg" alt="bus icon" height="30"/>
        </div>
        <h3 class="fs-2 text-body-emphasis">Countrywide</h3>
        <p>The "Country Wide" feature is a strategic addition to our event management platform, aiming to cater to a diverse audience and a multitude of events taking place throughout the entire country. This feature ensures that users have seamless access to event-related information, services, and opportunities spanning various regions.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
          <img src="./Assets/chat-square-heart.svg" alt="heart icon" height="30"/>
        </div>
        <h3 class="fs-2 text-body-emphasis">Personal Touch</h3>
        <p>A heartfelt addition to our event management platform that transforms every interaction into a personalized and unforgettable experience. In a world where events are more than just dates on a calendar, our "Personal Touch" brings a human touch to the digital realm, ensuring that every user feels seen, valued, and connected.</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./Assets/Marriage.jpg" class="d-block w-100" alt="couple image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Marriage</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./Assets/WhatsApp Image 2023-12-14 at 21.03.22_fe9c2d96.jpg" class="d-block w-100" alt="family image">
          <div class="carousel-caption d-none d-md-block">
            <h5>School/College</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./Assets/light-birthday-cake-decorated-with-white-flowers-background-restaurant_616126-862.png" class="d-block w-100" alt="family image">
          <div class="carousel-caption d-none d-md-block">
            <h5>Birthday</h5>
            <p></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="fot">
    <div class="container-fluid">
      <footer class="py-3 my-4 footer custom-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h5 class="text-uppercase mb-4">Quick Links</h5>
              <ul class="list-unstyled mb-0">
                <li><a href="./index1.php" class="text-body-secondary">Home</a></li>                
                <li><a href="./aboutus.html" class="text-body-secondary">About</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h5 class="text-uppercase mb-4">Connect With Us</h5>
              <ul class="list-unstyled mb-0">
                <li><a href="#" class="text-body-secondary"><img src="./Assets/facebook.svg" alt="facebook logo"/>  Facebook</a></li>
                <li><a href="#" class="text-body-secondary"><img src="./Assets/twitter.svg" alt="twitter logo"/> Twitter</a></li>
                <li><a href="https://www.instagram.com/preetham_k_i_n_g?igsh=cGpkYXZtamYxZW0y" class="text-body-secondary"><img src="./Assets/instagram.svg" alt="instagram logo"/> Instagram</a></li>
              </ul>
            </div> <br>
            <div class="col-lg-4">
              <h5 class="text-uppercase mb-4">Contact Us</h5>
              <ul class="list-unstyled mb-0">
                <li>Email: contact@plegasus.com</li>
                <li>Phone: +1 (123) 456-7890</li>
                <li>Address: 123 Event Street, Cityville</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center text-body-secondary mt-3">
          <p>&copy; 2023 Plegasus LTD. All rights reserved.</p>
        </div>
      </footer>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
