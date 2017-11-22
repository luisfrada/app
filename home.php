<?php //config
define ('__USERNAME', 'SESSION_USERNAME');
define ('__TIME', 'SESSION_TIME');
ini_set('session.cookie_domain', '.bdp.dev');
ini_set('session.save_path', '..\session');
session_start();
$username =	@$_SESSION[__USERNAME];
if(! $username ){
	echo "No ha inicializado session";
	die();
}
?>

<h1>Acceso correcto!!! <?= $username ?></h1>
<a href="//app-b.bdp.dev/info.php" >Ir a app-b  / info.php</a>
<br/>
<a href="/login.php">Salir</a>

