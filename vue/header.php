<h1>Ceci est une baniaire</h1>
<?php if( isset($_SESSION['admin']) && $_SESSION['admin'] == "oui") 
{?><!--espace administration-->
	<a href="/www/aeroport">Accueil</a>
	<a href="/www/aeroport/admin/gestion-client.php">gestion des utilisateur</a>
	<a href="/www/aeroport/admin/gestion-equip.php">gestion des equipage</a>
	<a href="/www/aeroport/admin/gestion-avion.php">gestion des avions</a>
	<a href="/www/aeroport/admin/gestion-vol.php">gestion des vols</a>
	<a href="/www/aeroport/admin/gestion-reservation.php">gestion des reservation</a>
<?php
}
else
{
?><!--espace client-->
	<a href="/www/aeroport">Accueil</a>
	<a href="/www/aeroport/client/consult_reservation.php">consulter reservation</a>
	<a href="/www/aeroport/client/vol_en_cours.php">vols en cours</a>
	<a href="/www/aeroport/client/contact.php">contact</a>
<?php
}
