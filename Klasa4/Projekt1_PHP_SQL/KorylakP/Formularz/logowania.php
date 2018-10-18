<?php
setcookie ("ciasto","tak"); 
session_start();
echo "cookie:".@$_COOKIE['ciasto'];









?>





<div id="panel">
<form>
<label for="username">Nazwa użytkownika:</label>
<input type="text" id="username" name="username">
<label for="password">Hasło:</label>
<input type="password" id="password" name="password">
<div id="lower">
<input type="submit" value="Login">
</div>
</form>
</div>