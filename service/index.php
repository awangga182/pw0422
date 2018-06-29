<?php 

error_reporting(0);

$get = $_GET;

if ($get['a']=='home') {
	$out['title'] = 'selamat datang di rumah';
	$out['desc'] = 'selamat datang di rumah saya';
}
elseif ($get['a']=='contact') {
	$out['name'] = 'awangga';
	$out['alamat'] = ' di rumah';
	$out['email'] = 'awa.aaaaa@amikom.ac.id';
}
elseif ($get['a']=='data') {
	$out[0] ['vendor'] = 'Aphone';
	$out[0]['type'] = 'apon4';
	$out[0]['price'] = '$999';
	$out[1]['vendor'] = 'Aphone';
	$out[1]['type'] = 'apon7';
	$out[1]['price'] = '$1244';
	$out[2]['vendor'] = 'Aphone';
	$out[2]['type'] = 'aponX';
	$out[2]['price'] = '$89248';
}
else
{
	$out['message'] = 'invalid parameter';
}

echo json_encode($out);
?>