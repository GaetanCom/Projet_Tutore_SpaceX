<!DOCTYPE html>

<?php 
  if(isset($_GET['article'])){
    $titre_article = $_GET['article'];
  } else {
    $titre_article = "Erreur";
  }
  
?>

<?php
    switch($titre_article){
          case ("ElonMusk_Présentation"): 
            $titre_article = "Elon Musk -- Présentation";
            $article = "Articles/ElonMusk_Présentation.html"; break;
          case ("ElonMusk_Entreprises"): 
            $titre_article = "Elon Musk -- Entreprises";
            $article = "Articles/ElonMusk_Entreprises.html"; break;
          case ("ElonMusk_Scandales"): 
            $titre_article = "Elon Musk -- Scandales";
            $article = "Articles/ElonMusk_Scandales.html"; break;


          case ("SpaceX_Présentation"): 
            $titre_article = "SpaceX -- Présentation";
            $article = "Articles/SpaceX_Présentation.html"; break;
          case ("SpaceX_Projets"): 
            $titre_article = "SpaceX -- Projets";
            $article = "Articles/SpaceX_Projets.html"; break;
          case ("SpaceX_Historique"): 
            $titre_article = "SpaceX -- Historique";
            $article = "Articles/SpaceX_Historique.html"; break;
          case ("SpaceX_Historique"): 
            $titre_article = "SpaceX -- Historique";
            $article = "Articles/SpaceX_Historique.html"; break;


          case ("Fusées_Dragon"): 
            $titre_article = "Fusées -- Dragon";
            $article = "Articles/Fusées_Dragon.html"; break;
          case ("Fusées_Falcon9"): 
            $titre_article = "Fusées -- Falcon9";
            $article = "Articles/Fusées_Falcon9.html"; break;
          case ("Fusées_FalconHeavy"):
            $titre_article = "Fusées -- Falcon Heavy"; 
            $article = "Articles/Fusées_FalconHeavy.html"; break;
          case ("Fusées_Starship"): 
            $titre_article = "Fusées -- Starship";
            $article = "Articles/Fusées_Starship.html"; break;

          case ("Economie"): 
            $titre_article = "Economie -- Economie";
            $article = "Articles/Economie.html"; break;
          case ("Economie"): 
            $titre_article = "Economie -- Droits/Juridique";
            $article = "Articles/Droits_Juridique.html"; break;

          case ("Erreur"): 
            $article = "Articles/Mauvaise_page.html"; break;
          default : 
            $article = "Articles/Mauvaise_page.html"; break;
        }
    ?>

<html>
  <head>
      <link rel="stylesheet" href="style_footer_header.css"/>
      <link rel="stylesheet" href="style.css"/>
      <link rel="icon" href="Images/Logo2.png"/>
      <title> <?php echo $titre_article; ?> </title>
  </head>

  <body>
    <?php include("header.html"); ?>
    
    <?php
    if($article != "Articles/Mauvaise_page.html") include("Sous_Menu.php");
    ?>

    <main id="articles">
      	<?php include ($article); ?>
    </main>
    
      <?php include("footer.html"); ?>
  </body>
</html>