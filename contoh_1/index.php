<?php 

	require_once "../fungsi/fungsi.php";

	// no json object
	// $url = "https://sandbox.rachmat.id/curl/";
	// echo myCurl($url);

	// with json object
	$url = "https://sandbox.rachmat.id/curl/get/";
	$send = myCurl($url);

	// Mengubah json menjadi array
	$data = json_decode($send, TRUE);
	echo "<pre>";
	print_r($data);
	echo "</pre>";

	foreach ($data as $d) {
		echo "ID is <b>{$d["ID"]}</b> <br>";
		echo "TITLE is <b>{$d["Title"]}</b> <br>";
		echo "URL is <i>{$d["URL"]}</i> <br>";
		echo "<hr>";
	}