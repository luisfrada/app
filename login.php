<?php //config
define ('__USERNAME', 'SESSION_USERNAME');
define ('__TIME', 'SESSION_TIME');
ini_set('session.cookie_domain', '.bdp.dev');
ini_set('session.save_path', '..\session');
session_start();
?>
<?php
$action = @$_REQUEST['action'];
$message = '';
if($action == 'login'){
	$username = @$_REQUEST['username'];
	$password = @$_REQUEST['password'];
	if($username == 'admin' && $password == 'admin'){
		$_SESSION[__USERNAME] = $username;
		$_SESSION[__TIME] = $time;
		header("Location: /home.php"); die();
	} else { $message = 'Error! usuario no valido'; }
} else {
	$message = 'Usuario & Contraseña'; session_destroy();
}
$time = time();
echo "<b>LOGIN AT: $time</b>";
?>

<!-- HTML -->
<form method="POST">
User:<input name="username" type="text"/>
<br/>
Pass: <input name="password" type="password"/>
<hr/>
<button type="submit" name="action" value="login">Acceder</button>
<button type="submit" name="action" value="cancel">Cacelar</button>
<hr/>
<i>Mensaje: <?= $message ?></i>
</form>
