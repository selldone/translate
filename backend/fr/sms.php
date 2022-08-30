<?php 

 return [
     "shop-order-payment" => [
     "title" => "Accepter le paiement",
     "sample" => "Votre paiement de 267 $ a été réglé avec succès.<br> Commande : SM-425<br> Merci, <b>le nom de votre magasin</b> .<br> Vendu",
     "body" => "Votre paiement :param2 a été réglé avec succès. Commande : :param1 Merci, :param3. Vendu",
],
     "shop-order-payment-admin" => [
     "title" => "Accepter le paiement",
     "sample" => "Nouveau paiement de 267 $ réglé avec succès.<br> Commande : SM-425<br> Merci, <b>le nom de votre magasin</b> .<br> Vendu",
     "body" => "Nouveau : paiement param2 réglé avec succès. Commande : :param1 Merci, :param3. Vendu",
],
     "shop-login" => [
     "title" => "Code de vérification de connexion",
     "sample" => "Votre code de connexion est : <b>123456</b><br> <b>Nom de votre magasin</b><br> Vendu",
     "body" => "Votre code de connexion est : :param1 :param2 Selldone",
],
     "user-login" => [
     "title" => "Message de réussite de la connexion",
     "sample" => "Cher <b>nom</b> ,<br> Vous vous êtes connecté à votre compte par <b>iPhone 165.250.300.1</b> au <b>5/8/2021 9:14 AM</b> .<br> Vendu",
     "body" => "Cher :param1, Vous vous êtes connecté à votre compte par :param2 à :param3. Vendu",
],
     "avocado-order-submit" => [
     "title" => "Avocat nouvelle commande soumise envoyer à l'acheteur",
     "sample" => "<b>Nom de votre magasin</b><br> Cher <b>Votre nom</b> ,<br> Nous avons reçu votre commande et nous l'examinons.<br> N° de commande : <b>AVO-246</b><br> Vendu",
     "body" => ":param3 Cher :param1, Nous avons reçu votre commande et nous l'examinons. N° de commande : :param2",
],
     "avocado-order-submit-seller" => [
     "title" => "L'avocat reçoit une nouvelle commande envoyée au vendeur",
     "sample" => "Vous avez reçu une commande d'avocat :<br> Magasin : <b>le nom de votre magasin</b><br> Acheteur : <b>nom de l'acheteur</b><br> Commande : <b>AVO-246</b><br> Vendu",
     "body" => "Vous avez reçu une commande d'avocat : Magasin : :param1 Acheteur : :param2 Commande : :param3 Selldone",
],
     "avocado-ready-to-pay" => [
     "title" => "Commande d'avocat prête à payer",
     "sample" => "<b>Nom de votre magasin</b><br> Votre commande a été confirmée et peut être payée via le lien suivant.<br> N° de commande : <b>AVO-246</b><br> Lien : <b>https://votre-domaine/avocat</b><br> Vendu",
     "body" => ":param3 Votre commande a été confirmée et peut être payée via le lien suivant. N° de commande : :param2 Lien : :param1 Selldone",
],
];