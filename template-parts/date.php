<?php
date_default_timezone_set('Asia/Jakarta');
$bulan = array(
	'01' => esc_html__( 'Januari', 'raylight' ),
	'02' => esc_html__( 'Februari', 'raylight' ),
	'03' => esc_html__( 'Maret', 'raylight' ),
	'04' => esc_html__( 'April', 'raylight' ),
	'05' => esc_html__( 'Mei', 'raylight' ),
	'06' => esc_html__( 'Juni', 'raylight' ),
	'07' => esc_html__( 'Juli', 'raylight' ),
	'08' => esc_html__( 'Agustus', 'raylight' ),
	'09' => esc_html__( 'September', 'raylight' ),
	'10' => esc_html__( 'Oktober', 'raylight' ),
	'11' => esc_html__( 'November', 'raylight' ),
	'12' => esc_html__( 'Desember', 'raylight' ),
);
$hari = array(
	'Monday'  	=> esc_html__( 'Senin', 'raylight' ),
    'Tuesday'  	=> esc_html__( 'Selasa', 'raylight' ),
    'Wednesday' => esc_html__( 'Rabu', 'raylight' ),
    'Thursday' 	=> esc_html__( 'Kamis', 'raylight' ),
    'Friday' 	=> esc_html__( 'Jumat', 'raylight' ),
    'Saturday' 	=> esc_html__( 'Sabtu', 'raylight' ),
    'Sunday' 	=> esc_html__( 'Minggu', 'raylight' ),
);
echo $hari[date('l')], ', ', date('j '), $bulan[date('m')], date(' Y');
?>