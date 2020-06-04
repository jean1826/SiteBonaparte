<?php

if (!isset($type)) {
  $type = 0;
}

?>


<header>
  <div>
    <img src="images/logo-merci1.png" alt="" height="150" width="150"/>
    <?php
    switch ($type) {
      case 0:
        echo '<img src="images/bonmerci.jpg" alt="" id="merci"/>';
        break;

      case 1:
        echo '<img src="images/transparent.png" alt="" id="merci"/>';
        break;
      case 2:
        echo '<img src="images/mercibrique.jpg" alt="" id="merci"/>';
        break;
      case 3:
        echo '<img src="images/transparent.png" alt="" id="merci"/>';
        break;
    }

    ?>
    <img src="images/logo-merci2.png" alt="" height="150" width="150"/>
  </div>
  <div id="container">
    <input type="checkbox">
    <span></span> <!-- pain-->
    <span></span> <!--   steak salade tomate oignons chedar-->
    <span></span> <!--   pain -->
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="gallerie.php?type=1&page=LeReseauBonaparte">Le Réseau Bonaparte</a></li>
      <li><a href="gallerie.php?type=3&page=RemerciementsdesHerosduquotidien">Remerciements des héros du quotidien</a></li>
      <li><a href="gallerie.php?type=2&page=produceleves">Productions des élèves</a></li>
      <li><a href="gallerie.php?type=2&page=productionfamille">Productions des familles</a></li>
      <li><a href="gallerie.php?type=2&page=productionspersonnels">Productions du personnel</a></li>
      <li><a href="gallerie.php?type=2&page=momentsdepoesie">Moments de poésie</a></li>
    </ul>
    <ul>
      <li><a href="gallerie.php?type=1&page=lesvideos">Les vidéos</a></li>
      <li><a href="gallerie.php?type=1&page=ilsvoussoutiennent">Ils vous soutiennent</a></li>
      <li><a href="gallerie.php?type=1&page=fabriquonsdesmasques">Fabriquons des masques</a></li>
      <li><a href="gallerie.php?type=1&page=communications">Communication</a></li>
      <li><a href="gallerie.php?type=1&page=bonus">Bonus BTS COM</a></li>
      <li><a href="gallerie.php?type=1&page=actionsolidaires">Actions Solidaires</a></li>
      <li><a href="formulaire.php">Envoyez vos productions</a></li>
    </ul>
  </div>


</header>

