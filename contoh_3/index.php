<?php 
	require_once "../fungsi/fungsi.php";

	// Contoh Mengirim Data JSON Dengan CURL dengan METHOD POST
	$url = "https://sandbox.rachmat.id/curl/post/";
	$data = [
		"nama_barang" => "Komputer",
		"stok" => 100
	];
	$dataJson = json_encode($data);
	$send = curlPost($url, $dataJson);

	//JSON_UNESCAPED_SLASHES => Tidak menyembunyikan /
	echo "<pre>";
	echo json_encode(['respon' => $send], JSON_UNESCAPED_SLASHES);
