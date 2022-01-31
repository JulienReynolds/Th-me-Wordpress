<?php
/*
Template Name: Zone de connexion
*/
?>

<form method="post" action="http://localhost/wordpress/wp-admin" id="loginform" name="loginform">

 <p>

  <label for="user_login">Identifiant</label>

  <input type="text" tabindex="10" size="20" value="" id="user_login" name="log">

  </p>

  <p>

  <label for="user_pass">Mot de passe</label>

  <input type="password" tabindex="20" size="20" value="" id="user_pass" name="pwd">

  </p>

 <p><label><input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">

  Rester connecter</label>

  | <a href="http://example.com/wp-login.php?action=lostpassword">Mot de passe oublié</a></p>

  <p>

  <input type="submit" tabindex="100" value="Se connecter" id="wp-submit" name="wp-submit">

  <input type="hidden" value="http://example.com/" name="redirect_to">

  </p>

 </form>