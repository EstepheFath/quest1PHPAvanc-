<?php
$_POST;

$nom = $_POST['user_name'];
$numero = $_POST['user_tel'];
$sujet = $_POST['user_subject'];
$courriel = $_POST['user_email'];
$message = $_POST['user_message'];
echo "Merci $nom de nous avoir contacté à propos de $sujet .";
echo "Un de nos conseillers vous contactera soit a l'adresse $courriel ou par téléphone au $numero dans les plus brefs délais pour traiter votre demande:";
echo $message;