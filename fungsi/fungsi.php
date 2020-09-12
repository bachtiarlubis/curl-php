<?php 
	
	// 1st function of curl
	// Untuk mengambil data
	function myCurl($url){
		try {
			$ch = curl_init();
			if ($ch === false)
				throw new Exception('Inisialisasi gagal !');
				

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			
			// Untuk mencegah valid certificates ketika hendak mengakses url
			// Beberapa website telah menginstsall dan mengatur SSL unttuk website HTTPS mereka.
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

			$output = curl_exec($ch);
			if ($output === false)
				throw new Exception(curl_error($ch), curl_errno($ch));
				

			curl_close($ch);
			return $output;
		} catch (Exception $e) {
			 trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);
			}
	}



	// 2nd function of curl
	// Untuk mengirim data
	function curlPost($url, $data){
		try {
			$ch = curl_init();
			if ($ch === false)
				throw new Exception('Inisialisasi gagal !');
				
			// Set Url Untuk diperoleh
			curl_setopt($ch, CURLOPT_URL, $url);

			// Untuk mengirim data
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

			// Untuk mengembalikan transfer sebagai string dari nilai kembalian curl_exec()
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// Untuk mencegah invalid certificates ketika hendak mengakses url
			// Beberapa website telah menginstsall dan mengatur SSL unttuk website HTTPS mereka.
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

			$output = curl_exec($ch);
			if ($output === false)
				throw new Exception(curl_error($ch), curl_errno($ch));
				

			curl_close($ch);
			return $output;
		} catch (Exception $e) {
			 trigger_error(sprintf('Curl failed with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);
			}
	}