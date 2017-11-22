<?php
define ('__COLOR', 'COLOR-BG');
$time = time();
echo "<b>COOKIE AT: $time</b>";
$color = @$_COOKIE[__COLOR];
if(! $color ){
	$value = rand ();
	$color = "RED in $value";
	setcookie(__COLOR, $color, $time + 10);
}
echo "<p>COLOR: $color</p>";

