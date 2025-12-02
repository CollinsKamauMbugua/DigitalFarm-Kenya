<?php require 'session-user.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <title>Home Page | DigitalFarm Kenya</title>
  </head>
  <body>
    <header>
    <div class="logo">
        <img src="./img/logo1.jpeg" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">Digital</span>Farm <span style="color: white;">Kenya</span></p>

        <li style="position: absolute; width:120px; margin-left: 900px; margin-top:-80%; padding: 10px;list-style:none; border-right:1px solid white; border-left:1px solid white;"> <a href="adm-logout.php" style="padding:20px; color:White; font-size:20px; text-decoration:none;">Log-out</a> </li>
        </div>
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li class="current"> <a href="home.php">Home</a> </li></td>
            <td><li><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>




    </header><hr style="margin-bottom: 3%;">

    <section id="container"  style="margin-bottom: 3%;">
      <div class="tile">
        <a href="animal.php"> <button><img src="./img/Farm-Animals.jpg" alt=""><p>Animal Husbandry</p></button> </a>
        <a href="plants.php"> <button><img src="./img/plt1.jpeg" alt=""><p>Crop Cultivations.</p></button> </a>
        <!-- <a href="medic.php"> <button><img src="./img/meds.png" alt=""><p>Medical Assists</p></button> </a><br><br> -->
        <a href="about.php"> <button id="btn-ex"><img src="./img/abt.png" alt=""><p>About Us</p></button> </a><br><br>
        <a href="forum.php"> <button id="btn-ex"><img src="./img/forum.png" alt=""><p>Go to Forum</p></button> </a>
      </div>
      <div class="pic">
        <!-- <img src="./img/bike1.jpg" alt=""> -->
      </div>
    </section>

    <?php include("footer.php"); ?>

  </body>
</html>
