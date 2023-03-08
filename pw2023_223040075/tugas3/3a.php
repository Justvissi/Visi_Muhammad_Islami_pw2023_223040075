<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
$r1 = 10;
function hitungLuasLingkaran($r1)
{
    return 3.14 * $r1 * $r1;
}
echo "Jari-jari = $r1 cm.<br>";
echo "Luas Lingkaran = ", hitungLuasLingkaran($r1), " cm²";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
$r2 = 20;
function hitungKelilingLingkaran($r2)
{
    return 2 * 3.14 * $r2;
}
echo "Jari-jari = $r2 cm.<br>";
echo "Keliling Lingkaran = ", hitungKelilingLingkaran($r2), " cm";
?>