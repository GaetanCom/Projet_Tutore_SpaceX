<nav id="Sous_Menu">
	<?php

		$page = $_GET['article'];

		$ElonMusk =
		"<div id='Sous_Menu_Contenu' >
			<h4> Tous les sujets sur Elon Musk </h4>
			<div> <a href='Article.php?article=ElonMusk_Présentation'> Présentation d'Elon </a> </div>
			<div> <a href='Article.php?article=ElonMusk_Entreprises'> Ses entreprises </a> </div>
			<div> <a href='Article.php?article=ElonMusk_Scandales'> Scandales </a> </div>
		</div>";

		$SpaceX = 
		"<div id='Sous_Menu_Contenu'>
			<h4> D'autres sujet sur SpaceX </h4>
			<div> <a href='Article.php?article=SpaceX_Présentation'> Présentation SpaceX </a> </div>
			<div> <a href='Article.php?article=SpaceX_Projets'> Projets </a> </div>
			<div> <a href='Article.php?article=SpaceX_Historique'> Historique </a> </div>
		</div>";

		$Fusees = 
		"<div id='Sous_Menu_Contenu'>
			<h4> D'autres sujet sur les fusées </h4>
			<div> <a href='#Dragon'> Dragon </a> </div>
			<div> <a href='#Falcon9'> Falcon 9 </a> </div>
			<div> <a href='#Falcon_Heavy'> Falcon Heavy </a> </div>
			<div> <a href='#Big_Falcon_Rocket'> Big Falcon Rocket </a> </div>
		</div>";

		$Concurrents =
		"<div id='Sous_Menu_Contenu'>
			<h4> D'autres sujet sur les concurrents </h4>
			<div> <a href='#Presentation_SpaceX'> Présentation de SpaceX </a> </div>
			<div> <a href='#Projets_Entreprise'> Projets de l'entreprise </a> </div>
			<div> <a href='#Historique'> Historique </a> </div>
		</div>";



		if( $page == "ElonMusk_Présentation" 
			|| $page == "ElonMusk_Entreprises"
			|| $page == "ElonMusk_Scandales"){
			echo $ElonMusk;
		} else if ($page == "SpaceX_Présentation"
			|| $page == "SpaceX_Projets"
			|| $page == "SpaceX_Historique"){
			echo $SpaceX;
		} else if ($page == "/fusee.php"){
			echo $Fusees;
		} else if ($page == "/Concurrents.php"){
			echo $Concurrents;
		}

	?>
</nav>

