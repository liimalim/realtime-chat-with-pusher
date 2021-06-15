<?php
require 'vendor/autoload.php';
$data_pusher = array(
	'message'  => $_POST['message'],
	'username' => $_POST['username'],
	'time'     => date('H:i'),
);
$options = array(
	'cluster' => 'replace cluster',
	'useTLS'  => true,
);

$pusher = new Pusher\Pusher(
	'replace key',
	'replace secret',
	'replace app_id',
	$options
);
$pusher->trigger('dev', 'form-message', $data_pusher);
echo 'ok';