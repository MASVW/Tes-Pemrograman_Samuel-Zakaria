<?php

echo "Masukkan waktu perjalanan (menit): ";
$t = trim(fgets(STDIN));
echo "Masukkan kecepatan (dalam km/jam): ";
$s = trim(fgets(STDIN));
$output = ($t/60)*$s;
echo "Jarak tempuh perjalanan = $output Kilometer";

?>



