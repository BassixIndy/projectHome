<?php if(isset($login)){  ?>
Hey, <?php echo $_SESSION['user_name'] ?>. Activeer je account door de code in te geven die je via mail hebt ontvangen: <br>
<a href="index.php?logout">Logout</a>
<?php }else{ echo "Sorry you have no permission to do that, please contact your system administrator if you keep seeing this message.";} ?>
