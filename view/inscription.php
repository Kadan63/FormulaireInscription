<?php 
require_once('controller/inscription.php');
?>

<form action="index.php" method="POST">
<label for="nom">Nom</label>
<input type="text"  id="name" placeholder="Nom" name="name"></input>
<label for="email">E-mail</label>
<input type="email" id="mail" name="email" placeholder="Email"></input>
<label for="password">Mot de passe</label>
<input type="text"  id="password" placeholder="Mot de passe" name="password"></input>
<label for="password">Confirmez le mot de passe</label>
<input type="text"  id="confirmpassword" name="confirmpassword"></input>
<button type="submit">Bimbamboum</button>
</form>