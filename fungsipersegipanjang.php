<?php
function hitungluaspersegipanjang($panjang, $lebar) {

    $luas = $panjang * $lebar;
    return $luas;
}


$panjang = 10;
$lebar = 5;
echo "luas persegi panjang; " . hitungluaspersegipanjang($panjang, $lebar);
?>

<br>

<?php
function hitungkelilingpersegipanjang($panjang, $lebar) {

    $keliling = 2 * ($panjang + $lebar);
    return $keliling;
}


$panjang = 10;
$lebar = 5;
echo "keliling persegi panjang; " . hitungkelilingpersegipanjang($panjang, $lebar);
?>