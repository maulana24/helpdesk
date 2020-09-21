<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index(){
        $awal = date_create('2017-08-07 05:54:51');
        $akhir= date_create('2017-08-07 06:02:26');
        $selis= date_diff($awal, $akhir);
        echo $selis->i.' ';
        echo $selis->s;

        $tes1 = strtotime('07:49:37');
        $tes2 = strtotime('07:50:26');
        $s = $tes2 - $tes1;
        $f = $s - 112;
        $t = floor($f/60);
        echo "<br><br> $s detik = ".$f." menit";

    }
}