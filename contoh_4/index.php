<?php 
	
	//Contoh menerima Data JSON Hasil dari Pengriman CURL
	// Menerima input dari pengirim
	$arr = json_decode(file_get_contents("php://input"));

	// validasi input json
	if (empty($arr->nama_barang) OR empty($arr->stok)){
	    echo "Submit gagal! Kolom barang / stok tidak boleh kosong.";
	} else {
	    echo "Submit berhasil! Stok barang dengan nama <b>".$arr->nama_barang."</b> ditambah sebanyak <b>".$arr->stok."</b>.";
	}

	/*
		Contoh pengirim Curl dapat dilihat pada contoh_3/
	*/