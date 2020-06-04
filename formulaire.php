<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$Result = "";
if (isset($_POST['mail']) && isset($_POST['message'])) {

  date_default_timezone_set('Etc/UTC');
  require 'PHPMailer.php';
  require 'SMTP.php';
  require 'Exception.php';
//Create a new PHPMailer instance
  $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
  $mail->isSMTP();

//Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
  $mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "testbonapartetest83@gmail.com";
//Password to use for SMTP authentication
  $mail->Password = "B0n@parte";
//Set who the message is to be sent from
  $mail->setFrom($_POST['mail']);
//Set an alternative reply-to address

  $mail->addAddress('lauranebci@gmail.com', 'John Doe');
//Set the subject line
  $mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
  $mail->Body = $_POST['message'];
  $mail->AltBody = 'Ceci est un message texte';
//Attach an image file

  $mail->AddAttachment($_FILES["fichier"]["tmp_name"], $_FILES["fichier"]["name"]);

  if ($mail->send()) {

    $Result = "Message envoyé ! ;-)";
  }

}

?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link href="css/style.css" rel="stylesheet" type="text/css"/>
  <link href="css/formulaire.css" rel="stylesheet" type="text/css"/>
  <meta charset="UTF-8">
  <title></title>

</head>

<body id="lpb">

<?php
include 'includes/header.php';
?>
<div class="text-center">
  <div id="tropbelle">
    <form method="post" action="formulaire.php" enctype="multipart/form-data">

      <div class="form-group">
        <label for="exampleInputEmail1">Adresse email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Entrer Votre email" name="mail">

      </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1"> Message </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                  placeholder="Entrer Votre Message ici ..." name="message"></textarea>
      </div>

      <div class="form-group">
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fichier">
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
      <?php
      echo $Result;
      ?>

    </form>

  </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
