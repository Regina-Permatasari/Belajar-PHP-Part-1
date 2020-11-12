<?php
/**********************************************************
 Nama file : Session01.php
 Halaman ini merupakan halam contoh penciptaan session.
 Perintah session_start() harus ditaruh di perintah pertama 
 tanpa spasi di depannya.
 Perintah session_start() harus ada pada setiap halaman 
 yang berhubungan dengan session
 *******************************************/

 session_start();
 $_SESSION['nama'] = "Regina Permatasari";
 echo "<a href='Session02.php'>Menuju halaman kedua</a>";
 ?>