<?php
if (isset($_GET['type']) && isset($_GET['page'])) {
  $type = $_GET['type'];
  $dossier = $_GET['page'];
}
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/gallerie.php?type=<?php echo $type ?>" rel="stylesheet" type="text/css" media="all"/>
  <script src="carrousel.js" type="text/javascript"></script>
  <meta charset="UTF-8">
  <title></title>
  
</head>
<body>

<?php

include 'includes/header.php';

?>
    <div id="tout">
    
    <div id="carousel">

       <div class="hideLeft">
           <img src="images/20200603_210542.jpg" alt=""/>
      </div>

      <div class="prevLeftSecond">
          <img src="images/hero-5151072_960_720.png" alt=""/>
      
      </div>

      <div class="prev">
           <img src="images/20200603_210832.jpg" alt=""/>
      </div>

      <div class="selected">
         <img src="images/medecin.jpg" alt=""/>
        
      </div>

      <div class="next">
        <img src="images/20200603_211103.jpg" alt=""/>
      </div>
     
      <div class="nextRightSecond">
          
           <img src="images/20200603_210846.jpg" alt=""/>
      </div>

      <div class="hideRight">
        
           
             <img src="images/lespetitsmedecins.jpg" alt=""/> 
      </div>

    </div>

   
    </div>
    
<section id="gallerie">
  <?php
  $images = glob($dossier . "/*");

  $i = 1;

  foreach ($images as $image) {
    if ($i == 1) {
      echo '<p>';
    }
    echo '<img src="' . $image . '" />';
    if ($i == 4) {
      echo '</p>';
      $i = 1;
    } else {
      $i++;
    }
  }
  ?>
</section>
<?php
include 'includes/footer.php';
?>


</body>
</html>

