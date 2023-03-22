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

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire
    if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_tel']) || trim($_POST['user_tel']) === '')
        $errors[] = "Le numéro est obligatoire";
    if (!isset($_POST['user_subject']) || trim($_POST['user_subject']) === '')
        $errors[] = "Le sujet est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "Un email est obligatoire";
    if (filter_var('user_email', FILTER_VALIDATE_EMAIL))

    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Un message est obligatoire";


   /* if (empty($errors)) {
        header('Location: success.php');
    }*/
}