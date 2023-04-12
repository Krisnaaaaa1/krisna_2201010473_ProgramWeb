<?php

include("koneksi.php");
$tbel= "CREATE TABLE TBmhs(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(35),
    NIM VARCHAR(255),
    PRODI VARCHAR(10),
    JENISKELAMIN VARCHAR(255),
    TGLLAHIR DATE,
    IDmhs VARCHAR(255)
);";

$hsl = mysqli_query ($cnn , $tbel);
if($hsl){
    echo "tabelmhs TBmhs ==> sukses";
}