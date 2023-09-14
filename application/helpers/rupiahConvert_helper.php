<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('rupiahConvert'))
{
function rupiahConvert($angka)
{
    $hasil_rupiah = number_format($angka,2,',','.');
    return $hasil_rupiah;
}
}
?>