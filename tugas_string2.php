<?php
$nama = "Muhammad Iqbal";


$a = explode(" ",$nama);
$id = strtolower($a[0]).rand(1,100).strtolower($a[1]);
echo "<br>Nama Anda :",$nama;
echo "<br>id anda adalah : ",$id;

?>
