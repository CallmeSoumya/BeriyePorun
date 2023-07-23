<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Welcome to iCoder,Blog of Coding warriors.">
    <title>BeriyePorun</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position: fixed; left: 0; top:0; width: 100vw; z-index: 1000;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">BeriyePorun</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="package.php">Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book.php">Book now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- navbar -->
    <div class="slider">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>Welcome to BeriyePorun</h2>
              <p>Travel around the India</p>
              
              <button class="btn btn-primary" onclick="location.href='http:package.php'";>Discover tour</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
                <h2>The Best Tourism</h2>
                <p>Discover the new Places</p>
              
                <button class="btn btn-primary" onclick="location.href='http:package.php'";>Discover tour</button>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h2>Explore,Discover,Travel</h2>
                <p>Make your tour worthwhile</p>
                <button class="btn btn-primary" onclick="location.href='http:package.php'";>Discover tour</button>
                
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>



 <!-- services portion start -->

<section class="services">
<h1 class="heading-title">our services</h1>
<div class="box-container">
    <div class="box">
        <img src="images/adventure.png" alt="" srcset="">
        <h3>adventure</h3>
    </div>
    <div class="box">
        <img src="images/tourguide.png" alt="" srcset="">
        <h3>tour guide</h3>
    </div>
    <div class="box">
        <img src="images/trekking.png" alt="" srcset="">
        <h3>trekking</h3>
    </div>
    <div class="box">
        <img src="images/camping.png" alt="" srcset="">
        <h3>camping</h3>
    </div>
    <div class="box">
        <img src="images/offroad.png" alt="" srcset="">
        <h3>offroad</h3>
    </div>
</div>
</section>

<!-- home about section -->
<section class="home-about">
    <div class="image">
        <img src="images/logo.png" class="p-2" style=" border-radius:60%; border:2px solid black" alt="">
    </div>
<div class="content">
    <h3>about us</h3>
    <p>'BeriyePorun'

We are a main online travel organization in Bengal giving the best as far as a class can tell with the objective to be ‘ Bengal ‘s Travel Planner.’ </p>
<p>

Through our site, our versatile applications, and our other related stages, recreation, and business voyagers can investigate, explore, analyze costs and book an extensive variety of administrations taking into account their movement needs.

Since our origin in 2006, in excess of 7 million clients have utilized at least one of our exhaustive travel-related administrations, which incorporate local and global air ticketing, lodging appointments, homestays, occasion bundles, transport ticketing, rail ticketing, exercises, and subordinate administrations.

With more than 83,000 inns contracted crosswise over Bengal, we are Bengal’s biggest stage for residential lodgings.</p>
    <a href="about.php" class="btn">read more</a>

</div>
</section>


<!-- package portion -->
<h4 class="heading-title">Our Packages</h4>
<div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/manali.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Shimla-Kulu-Manali</h5>
              <p class="card-text">
                Howrah-Kalka-Shimla-Kulu-Manali-Kalka-Howrah
              <b><p>15 Days 16 Nights</p>Fare: 25000/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/kashmir.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
            <h5 class="card-title">Kashmir with Vaishnodevi</h5>
              <p class="card-text">
                Howrah-Jammu-Katra-Pahelgam-Srinagar-Sonamarg-Gulmarg-Howrah
                <b><p>11 Days 12 Nights</p>Fare: 26995/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/kedar.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Kedarnath</h5>
              <p class="card-text">
              <p class="card-text">
                Howrah-Haridwar-Rishikesh-Badrinath-Kedarnath-Haridwar-Howrah
                <b><p>15 Days 16 Nights</p>Fare: 25000/-INR per person</b>
              </p>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/puri.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Puri</h5>
              <p class="card-text">
                Howrah-Puri-Konark-Chilka-Puri-Howrah
              <b><p>6 Days 7 Nights</p>Fare: 13500/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/leh.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Ladakh</h5>
              <p class="card-text">
                Howrah-Delhi-Leh-Nubra Valley-Kargil-Leh-Delhi-Howrah
              <b><p>12 Days 13 Nights</p>Fare: 35500/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/darjeeling.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Darjeeling-Gangtok</h5>
              <p class="card-text">
                Sealdah-NJP-Darjeeling-Gangtok-Pelling-NJP-Sealdah
              <b><p>12 Days 13 Nights</p>Fare: 16500/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
    </div>
    </div>
        <div class="container">
      <div class="row">
        <div class="col-sm-4 py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/kaziranga.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Assam</h5>
              <p class="card-text">
                Howrah-Guwahati-kamakshya-Kaziranga-Shilong-Guwahati-Howrah
              <b><p>12 Days 13 Nights</p>Fare: 16000/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4  py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/rajastan.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Rajastan</h5>
              <p class="card-text">
                Howrah-Jodhpur-Jaisalmer-Mount Abu-Bikaner-Jaipur-Sealdah
              <b><p>14 Days 15 Nights</p>Fare: 27900/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 py-3 py-sm-0">
          <div class="card box-shadow">
            <img src="images/hyderabad.jpg" class="card-img-top" alt="Check your connection" />
            <div class="card-body">
              <h5 class="card-title">Hyderabad</h5>
              <p class="card-text">
                Howrah-Vizag-Araku Valley-Hyderabad-Howrah
              <b><p>8 Days 9 Nights</p>Fare: 18000/-INR per person</b>
              </p>
              <a href="book.php" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    
<!-- home offer section  -->
<section class="home-offer">
    <div class="content">
        <h3>upto 20% off</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quis labore harum facilis nisi soluta!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- footer section staRTS -->



<footer class="footer">
        <div class="ft-container">
            <div class="ft-row">
                <div class="footer-col">
                <h4>Name</h4>
                <ul>
        <li><a href="home.php"><i class="bi bi-chevron-right"></i></i>home</a></li>
        <li><a href="about.php"><i class="bi bi-chevron-right"></i>about</a></li>
        <li><a href="package.php"><i class="bi bi-chevron-right"></i>package</a></li>
        <li><a href="book.php"><i class="bi bi-chevron-right"></i>book</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
        <li><a href="#"><i class="bi bi-chevron-right"></i>ask question</a></li>
        <li><a href="#"><i class="bi bi-chevron-right"></i>about us</a></li>
       <li><a href="#"><i class="bi bi-chevron-right"></i>privacy policy</a></li>
        <li><a href="#"><i class="bi bi-chevron-right"></i>terms of service</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact us</h4>
                <ul>
                    <li><p style="color: #bbbb;"><i class="bi bi-phone" style="margin-right: 7px; color: #ffff;"></i>7003354475</p></li>
                    <li><p style="color: #bbbb;"><i class="bi bi-whatsapp" style="margin-right: 7px; color: #ffff;"></i>9831708471</p></li>
                    <li><p style="color: #bbbb;"><i class="bi bi-envelope" style="margin-right: 7px; color: #ffff;"></i>BeriyePorun@gmail.com</p></li>
                    <li><p style="color: #bbbb;"><i class="bi bi-geo" style="margin-right: 7px; color: #ffff;"></i>Dankuni,pin:712311,West Bengal,India</p></li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1840.6038437673778!2d88.28123554045322!3d22.68331122791607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f8832407519897%3A0x55a53f88440cb4e0!2sKali%20Mandir!5e0!3m2!1sen!2sin!4v1689839355843!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow us</h4>
                <div class="social-links">
                <a href="https://www.facebook.com/soumyajit.chandra.1276" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/soumya.jit_17/" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/soumyajit-chandra-699953254" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://twitter.com/Soumya091117" target="_blank"><i class="bi bi-twitter"></i></a>  
            </div>
            </div>
        </div>    
        </div>
        <div class="ft-copyright">
            <p>© Copyright by BeriyePorun. All rights reserved. Developed by Soumyajit Chandra.</p>
        </div>
    </footer>


    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
  </body>
</html>