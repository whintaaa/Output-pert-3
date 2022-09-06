<?php 
	if (isset($_POST['kirim'])) {
		$nama = $_FILES['upload']['name'];
		$lokasi = $_FILES['upload']['tmp_name'];
		$namabaru = "inigambar.jpg";
		move_uploaded_file($lokasi, "gambar/".$namabaru);
	}
?>

<html>
    <head>
        <title>hasil input</title>
        <style type="text/css">
            body {
                background: pink;
                color: #df4231;
                font-family: Arial;
                align-items: center;
                text-align: center;
            }
        </style>  
    </head>
    <body>
        <h2>TERIMAKASIHH SUDAH DATANG:*</h2> <br>
        <img src="gambar/inigambar.jpg" alt="" width="300px">
    </body>
</html>