<?php
$nama = "Edward Adventus D";
$sekolah = "SMK Krian 1 Sidoarjo";
$kelas = "XII RPL 1";
$absen = 10;
$alamat = "Jagalan RT 013 / RW 003";

function data_diri() {
    global $nama, $sekolah, $kelas, $absen, $alamat;

    echo "Nama: $nama<br>";
    echo "Sekolah: $sekolah<br>";
    echo "Kelas: $kelas<br>";
    echo "Absen: $absen<br>";
    echo "Alamat: $alamat<br>";
}
data_diri();
?>
