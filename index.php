<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/home.css" rel="stylesheet" type="text/css"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
include 'includes/header.php';
?>


<section>
  <article>
    <div id="gauche">

      <p>
        <a href="gallerie.php?type=1&page=LeReseauBonaparte">
          <img src="images/reseaubona.png" alt="" width="300" id="reseaubona"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=3&page=RemerciementsdesHerosduquotidien">
          <img src="images/remerciements.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=2&page=produceleves">
          <img src="images/productionséleves.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=2&page=productionfamille">
          <img src="images/productionsfamilles.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=2&page=productionspersonnels">
          <img src="images/productionpersonnels.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=2&page=momentsdepoesie">
          <img src="images/momentsdepoésie.png" alt="" width="300"/>
        </a>
      </p>

    </div>

    <div id="milieu">


      <video width="590" height="300" controls>
        <source src="video/Soutien aux _héros du quotidien_ Lycée Bonaparte-1.mp4#t=4" type="video/mp4">
        Your browser does not support the <code>video</code> tag.
      </video>
      <img src="images/montage.jpg" alt="" height="300"/>

      <a href="formulaire.php">
        <img src="images/milieu.jpg" alt="" height="390"/>

      </a>

       <a href="gallerie.php?type=1&page=ilsvoussoutiennent">
        <img src="images/bleu.png" alt="" height="390"/>
      </a>

 <a href="gallerie.php?type=3&page=RemerciementsdesHerosduquotidien">
        <img src="images/blanc.png" alt="" height="390"/>
      </a>

       <a href="gallerie.php?type=1&page=fabriquonsdesmasques">
        <img src="images/rouge.png" alt="" height="390"/>
      </a>

   <a href="gallerie.php?type=1&page=lesvideos">
        <img src="images/voirplusdevideo.png" alt="" height="300"/>
      </a>

      <img src="images/BD.jpg" alt="" height="390"/>
    </div>
    <div id="droite">

      <p>
        <a href="gallerie.php?type=1&page=lesvideos">
          <img src="images/lesvidéos.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=1&page=ilsvoussoutiennent">
          <img src="images/ilsvoussoutiennent.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=1&page=fabriquonsdesmasques">
          <img src="images/fabriquonsdesmasques.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=1&page=communications">
          <img src="images/communication.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=1&page=bonus">
          <img src="images/bonus.png" alt="" width="300"/>
        </a>
      </p>
      <p>
        <a href="gallerie.php?type=1&page=actionsolidaires">
          <img src="images/actionssolidaires.png" alt="" width="300"/>
        </a>
      </p>

    </div>
  </article>
</section>

<?php
include 'includes/footer.php';
?>


</body>
</html>
