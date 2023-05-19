<!DOCTYPE html>

<html>
<head>
	<title>FM.Air</title>
</head>
<body>
	<h1>Application de réservation</h1>


<!-- <?php

/* Dans cet exemple, nous avons créé un objet Client,
un objet Vol, un objet Billet pour ce vol, un objet 
Achat pour ce billet et finalement un objet Réservation
pour cet achat. Nous avons ensuite affiché les informations 
de cette réservation.Notez que les fichiers de classe (Achat.php,
Client.php, Billet.php, Vol.php et Reservation.php) doivent être 
inclus avec la fonction require_once avant d'utiliser les classes dans le fichier index.html.*/

// Inclure les fichiers de classe
		require_once('Achat.php');
		require_once('Client.php');
		require_once('Billet.php');
		require_once('Vol.php');
		require_once('Reservation.php');

		// Créer un objet client
		$client = new Client("Jean", "Dupont", "jean.dupont@mail.com", "0123456789");

		// Créer un objet vol
		$vol = new Vol("Air France", "Paris", "New York", "01/05/2023", "08:00", "12:00", 1000);

		// Créer un objet billet pour ce vol
		$billet = new Billet("123456789", $vol, "01/05/2023", "08:00", $client);

		// Créer un objet achat pour ce billet
		$achat = new Achat($billet, "01/04/2023");

		// Créer un objet réservation pour cet achat
		$reservation = new Reservation($achat);

		// Afficher les informations de la réservation
		echo "<h2>Réservation</h2>";
		echo "<p>Numéro de réservation : " . $reservation->getNum_servation() . "</p>";
		echo "<p>Date de réservation : " . $reservation->getDateReservation() . "</p>";
		echo "<p>Billet : " . $reservation->getAchat()->getBillet()->getNumero() . "</p>";
		echo "<p>Client : " . $reservation->getAchat()->getBillet()->getClient()->getNomComplet() . "</p>";
		echo "<p>Vol : " . $reservation->getAchat()->getBillet()->getVol()->getCompagnie() . " - " . $reservation->getAchat()->getBillet()->getVol()->getDepart() . " -> " . $reservation->getAchat()->getBillet()->getVol()->getArrivee() . "</p>";
?> -->

</body>
</html>


