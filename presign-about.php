<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/aboutstyle.css">
    <title>Home Page | i-Agro_solution</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./img/logo1.jpeg" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">Digital</span>Farm <span style="color: white;">Kenya</span></p>
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li> <a href="home.php">Home</a> </li></td>
            <td><li><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li class="current"> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>

      <!-- <form class="search" action="index.html" method="post">
        <input type="text" name="s-in" placeholder="Type your search here...">
        <button type="submit" name="search">Search</button>
      </form> -->
    </header><hr style="margin-bottom: 3%;">

    <div class="br-modal">
      <div class="breadcramps">
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
      </div>
    </div>

    <section id="main">
      <div class="container">
        <article id="main-col">
          <p class="page-title" style="position: relative;"><img src="./img/info2.png" height="50" style="position: absolute; top: -12px; left: -10px;">About us</p>
          <p class="parag">Agricultural Finance Corporation Ngong Branch is leading Government Credit institution mandated to provide credit for the sole purpose of developing agriculture. Agriculture is the mainstay of the Kenyan economy where 80% of the Kenyan population which is rural based relies on agriculture as their main support system.
<br>
<b style="font-weight: bold; font-size: 24px; color: darkorange;">Agricultural Finance Corporation Ngong Branch Branch products and services</b><br>
-Horticulture & Floriculture Development Loan<br>
-Water Development Loan<br>
-Seasonal Crop Credit<br>
-School Based Loan <br><br>
           <!-- Also view -->
          <!-- <a href="faq.php" style="font: 16px calibri; font-style: italic; color: lightgreen;">Frequently Asked Questions (FAQs)</a> -->
        </p>

          <h1 class="page-title" style="position: relative;"><img src="./img/find.png" height="50" style="position: absolute; top: -19px; left: -8px;">Find Us</h1>
          <div class="dark" >
	          <div class="find1">
	          	<p>Physical Location:​​ Ngong-Kiserian Rd<br>
Mobile Number: +254-723-919321<br>
Telephone Number: +254-723-919321<br>
Postal Address: P.O. Box: 228-00100, Nairobi<br>
Email Address: info@agrifinance.org</p>
	          </div>
	          <div class="find">
	          	<p>Google Location</p>
              <a href="https://maps.app.goo.gl/CxQsB2wKDVebA99W7?g_st=com.google.maps.preview.copy" target="_blank">
    <img src="./img/maps.jpeg" alt="Google Maps Icon" style="width:50px; height:auto;">
  </a>
	          </div>
          </div>
        </article>

        <aside id="sidebar">
          <div class="dark">
            <h3 class="page-title" style="position: relative;"><img src="./img/afcimg.jpg" height="50" style="position: absolute; top: -12px; left: -10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;how we operate</h3>
            <p>
  <strong>What the Website Does<br></strong>
  Our website is a one-stop platform that serves as both a financial and educational resource for farmers.<br>
  Here's what you can do on the website:
</p>
<ul>
  <li>Access Educational Content: Learn from blogs, videos, and guides on best farming practices.</li>
  <li>Join the Community Forum: Discuss challenges, share tips, and connect with fellow farmers.</li>
  <li>Locate Agro Experts: Find veterinarians, agronomists, and other specialists to help you succeed.</li>
  <li>Stay Updated: Keep up with the latest trends in agriculture, government subsidies, and more.</li>
</ul>

          </div>
        </aside>
      </div>
    </section>
    <?php include('footer.php') ?>
  </body>
