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
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              <a class="nav-link" href="about.php">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="package.php">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="book.php">Book</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="heading" style="background:url(images/booking-bg.jpg) no-repeat ">
    <h1>Booking</h1>
    </div>

  <section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
      <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name" name="name" id="" required>
      </div>
      <div class="inputBox">
        <span>email:</span>
        <input type="email" placeholder="enter your email" name="email" id="">
      </div>
      <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="address" id="" required>
      </div>
      <div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your number" name="phone" id="" required>
      </div>
      <div class="inputBox">
        <span>where to :</span>
        <input type="text" placeholder="place you want to visit" name="location" id="" required>
      </div>
      <div class="inputBox">
        <span>how many :</span>
        <input type="number" placeholder="number of guests" name="guests" id="" required>
      </div>
      <div class="inputBox">
        <span>arrivals:</span>
        <input type="date"name="arrivals" required>
      </div>
      <div class="inputBox">
        <span>leaving:</span>
        <input type="date"name="leaving" required>
      </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
    </form>
  </section>










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