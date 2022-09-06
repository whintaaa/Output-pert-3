<!DOCTYPE html>
<html>
    <head>
    <style type="text/css">
        body {
            background: pink;
            color: #df4231;
            font-family: Arial;
        }
        h2 {
            margin-bottom: -5px;
        }
        p {
            font-size: 1.5em;
            color: #c9c9c9;
        }
        table {
            background: #ffffff;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
        tr {
            height: 35px;
        }
        input.nama {
            background: url(images/user.png)no-repeat 7px 9px;
            border: 1px solid #c9c9c9;
            border-radius: 3px;
            height: 25px;
            padding: 8px;
            padding-left: 37px;
            margin-bottom: 8px;
            transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        input.alamat {
            background: url(images/maps.png)no-repeat 7px 9px;
            border: 1px solid #c9c9c9;
            border-radius: 3px;
            height: 25px;
            padding: 8px;
            padding-left: 37px;
            margin-bottom: 8px;
            transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        
        input:focus {
            border: 1px solid #26C281;
            transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        .button {
            background: #df4231;
            color: #ffffff;
            width: 370px;
            margin-top: 10px;
            height: 40px;
            border: 1px solid #c9c9c9;
            border-radius: 5px;
            transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        .button:hover {
            background: #19B5FE;   
            transition: 1s all;
            -moz-transition: 1s all;
            -o-transition: 1s all;
        }
        .button-gambar {
            height: 35px;
        }
    </style>
    </head>
<body>
<form action="hasil.php" method="post" enctype="multipart/form-data">
    <div align="center">
        <table width="366" border="0" align="center">
        <tr><td colspan="2">
        <div align="center"> <h2>BUKU TAMU</h2>
        <p>.....................................................</p>
        </div>
        </td></tr>
        <tr><td width="254">
        <input class="nama" name="TxtNama" type="text" id="TxtNama" size="42" maxlength="25" placeholder="Nama"></td></tr>
        <tr><td><input class="alamat" name="TxtAlamat" type="text" id="TxtAlamat" size="42" maxlength="35" placeholder="Alamat"></td></tr>
        <tr><td>UPLOAD FOTO KAMU</td></tr>
        <tr><td><input type="file" name="upload" class="button-gambar" ></td></tr>
        <tr><td colspan="2">
        <div align="center">
        <input type="submit" value="kirim" name="kirim">
        </div>
        </td></tr>
        </table>
    </div>
</form>
</body>
</html>  

