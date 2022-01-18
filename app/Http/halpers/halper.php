<?php

function formatUang($angka){
    return number_format($angka,0,',','.');
}

function get_tanggal($tgl){
$nama_bulan=array(1=>"januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember");

$tahun=substr($tgl,0,4);
$bulan= $nama_bulan[(int)substr($tgl,5,2)];
$hari = substr($tgl,8,2);
return "$hari $bulan $tahun";
}