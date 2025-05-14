<?php
session_start();

include("connection.php");
include("auth.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>U</span>ltra <span>S</span>oude</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="accueil">accueil</a></li>
            <li><a href="machine.html" data-after="Machine">Machine</a></li>
            <li><a href="thermoplastiques.html" data-after="thermoplastiques">Thermoplastique</a></li>
            <li><a href="A propos.html" data-after="A propos">A propos</a></li>
            <li><a href="contact.html" data-after="Contact">Contact</a></li>
            <li><a href="Entreprise.html" data-after="Contact">Entreprise</a></li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Soudage <span></span></h1>
        <h1>des thermoplastiques <span></span></h1>
        <h1>par ultrason<span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->



  <!-- entreprise -->
  <a name="Entreprise">
    <section id="services">
      <div class="services container">
        <div class="service-top">
          <h1 class="section-title">Entrepr<span>i</span>sse</h1>
          <p> Nontre site web est le leader sur le marché de la technologie de soudage par ultrasons. Notre portefeuille de produits comprend des machines de soudage par ultrasons, des générateurs et des automates de commande. Vous attendent chez nous : plus de 520 collègues motivés dans le monde entier et une technique unique. </p>
        </div>
        <div class="service-bottom">
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>&nbsp;Emerson</h2>
            <p>
            <h2>Email</h2>
            <h1>Emerson@gmail.com</h1>
            <h1><a href="mailto:thermo@gmail.com"> thermo@gmail.com</a></h1>
            </p>
            <h2>Adresse</h2>
            <h1>Japan,Sweden,America</h1>
            <h2>Tél</h2>
            <h1>+1 234 123 1234</h1>
            <h1>+1 234 123 1234</h1>

          </div>
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>&nbsp;thermoplace</h2>
            <p>
            <h2>Email</h2>
            <h1>therplace@gmail.com</h1>
            <h1>ultrasons@gmail.com</h1>
            </p>
            <h2>Adresse</h2>
            <h1>france,Sweden,Thailand <br></h1>
            <h2>Tél</h2>
            <h1>+49 86 501 1034</h1>
            <h1>+49 23 872 9246</h1>

          </div>
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>&nbsp;Hermann</h2>
            <p>
            <h2>Email</h2>
            <h1>harmane@gmail.com</h1>
            <h1>soudagee@gmail.com</h1>
            </p>
            <h2>Adresse</h2>
            <h1>China,German,America</h1>
            <h2>Tél</h2>
            <h1>+86 347 003 1674</h1>
            <h1>+86 234 1863 1234</h1>

          </div>
          <div class="service-item">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
            <h2>&nbsp;Mecasonic</h2>
            <p>
            <h2>Email</h2>
            <h1>meca@gmail.com</h1>
            <h1>sonid@gmail.com</h1>
            </p>
            <h2>Adresse</h2>
            <h1>Turkey,Sweden,Italy</h1>
            <h2>Tél</h2>
            <h1>+43 214 023 8884</h1>
            <h1>+43 986 231 1984</h1>

          </div>
        </div>
      </div>
    </section>
  </a>
  <!-- End entreprise Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/img-2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>Front End Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->



  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>S</span>haif <span>A</span>rfan</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Arfan. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->

</body>

</html>