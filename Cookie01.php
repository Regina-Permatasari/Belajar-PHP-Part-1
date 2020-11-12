<?php
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /*expire in 1 hour*/

echo "<h1> Ini halaman pengesetan cookie </h1>";
echo "<h2> Klik <a href='Cookie02.php'> Disini </a> Untuk pemeriksaan cookie</h2>";
?>