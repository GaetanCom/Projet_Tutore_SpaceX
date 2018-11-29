<script src="http://code.jquery.com/jquery-1.8.3.min.js">
	<?php include("Sous_menu.js"); ?> 
</script>

<nav id="Sous_Menu">
	<?php

		$page = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/'));

		$ElonMusk =
		"<div id='Sous_Menu_Contenu' >
			<h4> Elon Musk </h4>
			<div> <a href='#Qui_Est_Ce'> Qui est-il ? </a> </div>
			<div> <a href='#Ses_Entreprises'> Ses entreprises </a> </div>
			<div> <a href='#Scandales'> Scandales </a> </div>
		</div>";

		$SpaceX = 
		"<div id='Sous_Menu_Contenu'>
			<h4> SpaceX </h4>
			<div> <a href='#Presentation_SpaceX'> Présentation SpaceX </a> </div>
			<div> <a href='#Projets_Entreprise'> Projets </a> </div>
			<div> <a href='#Historique'> Historique </a> </div>
		</div>";

		$Fusees = 
		"<div id='Sous_Menu_Contenu'>
			<h4> Fusées </h4>
			<div> <a href='#Dragon'> Dragon </a> </div>
			<div> <a href='#Falcon9'> Falcon 9 </a> </div>
			<div> <a href='#Falcon_Heavy'> Falcon Heavy </a> </div>
			<div> <a href='#Big_Falcon_Rocket'> Big Falcon Rocket </a> </div>
		</div>";

		$Concurrents =
		"<div id='Sous_Menu_Contenu'>
			<h4> Concurrents </h4>
			<div> <a href='#Presentation_SpaceX'> Présentation de SpaceX </a> </div>
			<div> <a href='#Projets_Entreprise'> Projets de l'entreprise </a> </div>
			<div> <a href='#Historique'> Historique </a> </div>
		</div>";



		// if( $page == "/ElonMusk.php"){
		// 	echo $ElonMusk;
		// } else if ($page == "/SpaceX.php"){
		// 	echo $SpaceX;
		// } else if ($page == "/fusee.php"){
		// 	echo $Fusees;
		// } else if ($page == "/Concurrents.php"){
		// 	echo $Concurrents;
		// }

	?>
</nav>

