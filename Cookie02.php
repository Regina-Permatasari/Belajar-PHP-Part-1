<?php
if(isset($_COOKIE['username'])) {
    echo "<h1> Cookie 'username' ada. Isinya : " .$_COOKIE
    ['username']."</h1>";
} else {
    echo "<h1> Cookie 'username' TIDAK ADA.</h1>";
}
if(isset($_COOKIE['namalengkap'])) {
    echo "<h1> Cookie 'namalengkap' ada. Isinya : " .$_COOKIE
    ['namalengkap']."</h1>";
} else {
    echo "<h1> Cookie 'namalengkap' TIDAK ADA.</h1>";
}

echo "<h2> Klik <a href='Cookie01.php'> Disini </a> untuk penciptaan cookie</h2>";
?>