<?php

function tambah($a = 10, $b = 2)
{
    $hasil = $a + $b;
    echo "penjumlahan dari " . "$a " . "dan " . "$b " . "adalah " . "$hasil";
}
tambah(11, 13);

echo "<br>";
function kurang($a = 10, $b = 2)
{
    $hasil = $a - $b;
    echo "pengurangan dari " . "$a " . "dan " . "$b " . "adalah " . "$hasil";
}
kurang();

echo "<br>";
function kali($a = 10, $b = 2)
{
    $hasil = $a * $b;
    echo "perkalian dari " . "$a " . "dan " . "$b " . "adalah " . "$hasil";
}
kali();

echo "<br>";

function bagi($a = 10, $b = 2)
{
    $hasil = $a / $b;
    echo "pembagian dari " . "$a " . "dan " . "$b " . "adalah " . "$hasil";
}
bagi();

echo "<br>";

function modulus($a = 10, $b = 2)
{
    $hasil = $a % $b;
    echo "modulus dari " . "$a " . "dan " . "$b " . "adalah " . "$hasil";
}
modulus();

echo "<br>";
