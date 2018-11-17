<!DOCTYPE html>

<html>
  <head>
      <link rel="stylesheet" href="style_footer_header.css"/>
      <link rel="stylesheet" href="style.css"/>
      <link rel="stylesheet" href="style_accueil.css"/>
      <link rel="icon" href="Images/Logo2.png"/>
      <title> SpaceX </title>
  </head>

  <body>
      <!-- <?php include("header.html"); ?> -->

    <section id="contenu_principal">

    	<a href="SpaceX.php" class="div_accueil_G" id="spacex_accueil">
    		<div class="images_accueil"> <img id="image_spacex" src="Images/Logo.png"> </div>
    	</a>

    	<a href="ElonMusk.php" class="div_accueil_D" id="elonmusk_accueil">
    		<div class="texts_accueil"> <p> Elon Musk </p> </div>
    		<div class="images_accueil"> <img src="Images/ElonMusk.png"></div>
    	</a>

    	<a href="Fusees.php" class="div_accueil_G" id="fusees_accueil">
    		<div class="images_accueil"> <img src="Images/Falcon9.png"> </div>
    		<div class="texts_accueil"> <p> Fusées </p> </div>
		</a>

    	<a href="" class="div_accueil_D" id="concurrents_accueil">
    		<div class="texts_accueil"> <p> Concurrents </p> </div>
    		<div class="images_accueil"> <img src="Images/NASA.png"> </div>
    	</a>
      	
    </section>
    
      <?php include("footer.html"); ?>
  </body>
</html>
