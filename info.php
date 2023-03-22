<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  Required for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name" required="required">
    </div>
    <div>
        <div>
            <label  for="numéro TEL">Numéro TEL</label>
            <input  type="number"  id="numero"  name="user_tel" required="required">
        </div>
        <div>
            <label  for="sujet">Sujet du mail</label>
            <select id="sujet"  name="user_subject">
                <option value="impot">Impot</option>
                <option value="facture">Facture</option>
                <option value="contact">Contact</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required="required">
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" required="required"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
<?php
echo  $_GET['user_name'];
?>
</body>
</html>



