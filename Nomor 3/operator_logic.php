<?php

function Pembagian($sisa, $pembagi) {
    // Penanganan kasus khusus jika pembagi adalah 0
    if ($pembagi === 0) {
        return "Tidak Dapat Membagi, karena pembagi = 0";
    }

    $hasil_bagi = 0;

    while ($sisa >= $pembagi) {
        $sisa -= $pembagi;
        $hasil_bagi++;
    }

    return $hasil_bagi;
}

echo Pembagian(14, 2);
echo "<br>";
echo Pembagian(8, 4);
echo "<br>";
echo Pembagian(12, 5);
echo "<br>";
echo Pembagian(0, 5);
echo "<br>";
echo Pembagian(20, 0);
echo "<br>";
echo Pembagian(100, 50);

?>