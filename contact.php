
<?php
define('SITE_ROOT', __DIR__);
 ?>
   <head>
     <link rel="stylesheet" href="style_footer_header.css"/>
     <link rel="stylesheet" href="style.css"/>
     <link rel="icon" href="Images/Logo2.png"/>
     <title> Fusées | SpaceX </title>
      <link rel="stylesheet" href="master.css">
   </head>
<body>
      <?php
    include("header.html");
    include("totop.php");
       ?>
        <div class="container">
  <form id="contact" action="" method="post">
    <h3>Contact</h3>
    <h4>Envoyez nous un message</h4>
    <fieldset>
      <input name="Nom" placeholder="Nom" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input name="Objet" placeholder="Objet" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea name="Message" placeholder="Tapez votre message ici...." tabindex="3" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<?php
if(isset($_POST['submit'])){
            $nom=$_POST['Nom'];
            $objet=$_POST['Objet'];
            $message=$_POST['Message'];
            require("phpmailer/src/PHPMailer.php");
            require("phpmailer/src/SMTP.php");

              $mail = new PHPMailer\PHPMailer\PHPMailer();
              $mail->IsSMTP(); // enable SMTP

              $mail->SMTPDebug = 0; //0, 1 ou 2
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = 'ssl';
              $mail->Host = "smtp.gmail.com";
              $mail->Port = 465;
              $mail->IsHTML(true);
              $mail->Username = "contactprojettutspacex";
              $mail->Password = "Contact@ProjetTut";
              $mail->SetFrom("contactprojettutspacex@gmail.com");
              $mail->Subject = " ".$objet." par ".$nom."";
              $mail->Body = $message;
              $mail->AddAddress("projettutspacex@gmail.com");

               if(!$mail->Send()) {
                  echo "Mailer Error: " . $mail->ErrorInfo;
               } else {
                  echo "Message envoyé";
               }
          ?>
      </div>
  </div>
  <?php
}
 ?>
        <div class="contenu">
          <?php include("footer.html"); ?>
      </body>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript">
        <?php include("fonction.js") ?>
      </script>

      <script type="text/javascript">
        <?php include("fonction2.js") ?>
      </script>
