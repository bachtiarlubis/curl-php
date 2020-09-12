<?php 
	require_once "../fungsi/fungsi.php";

	$url = "https://sandbox.rachmat.id/curl/get/";
	$curl = myCurl($url);
	// Ubah JSON menjadi array
	$data = json_decode($curl, TRUE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contoh Mengubah Data JSON Menjadi HTML</title>
	<style>
		table{
			border-collapse: collapse;
		}
		th {
			padding: 8px;
		  	padding-top: 12px;
		  	padding-bottom: 12px;
		  	text-align: left;
		  	background-color: #7a7d52;
		  	color: white;
		  	text-align: center;
		}
		tr:nth-child(even){
			/*Dimulai dari angka ganjil. Karena dihitung dari header*/
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #ddd;
		}
		td{
			padding: 8px;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>TITLE</th>
			<th>URL</th>
		</tr>
	<?php foreach($data as $row){ ?>
		<tr>
			<td><?= $row["ID"]; ?></td>
			<td><?= $row["Title"]; ?></td>
			<td><?= $row["URL"]; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>