<?php
$nama=[
    [
        "Nama" => "Satria",
        "Kelas" => "XI RPL 1"],
    [
        "Nama" => "Arsyi",
        "Kelas" => "XI RPL 2"],
    [
        "Nama" => "Dhika",
        "Kelas" => "XI RPL 3"],
    [
        "Nama" => "Evan",
        "Kelas" => "XI RPL 4"],
    [
        "Nama" => "Fabian",
        "Kelas" => "XI RPL 5"],
    [
        "Nama" => "Irfan",
        "Kelas" => "XI RPL 6"],
    ];
    print_r($nama);
    foreach($nama as $post){
        echo "Nama : ".$post["Nama"], " Kelas : ".$post["Kelas"];
        echo "<br>";
    }
?>