<?php
$time = time();
setcookie('from', 'app-a', $time + 10, '/', 'bdp.dev');

echo "<b>APP-A COOKIE  AT: $time</b>";
foreach($_COOKIE as $k => $v){
	echo "<p>$k => $v</p>";
}
