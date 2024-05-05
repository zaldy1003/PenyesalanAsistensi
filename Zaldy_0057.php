<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
	<php database (zaldy_0057);></php>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form pencarian mataKuliah</title>
</head>
<body>
    <label for=""></label>
    <form action="">
        <input type="text" placeholder="Masukkan Nama : ">;
        <input type="text" placeholder="Masukkan Nim : ">;
        <input type="text" placeholder="Kelas">
<br>
    </form>
    <form action="">
        <input type="text" palsceholder="Masukkan Nama Dosen: ">
        <input type="text" palsceholder="Masukkan Kode Dosen: ">
    </form>

    <form action="">
        <input type="text" placeholder="Masukkan Nama MataKuliah: ">
        <input type="text" placeholder="Masukkan Kode Dosen: ">
        <input type="" placeholder="Nim: ">
        <input type="text" placeholder="Masukkan Kode Matkul: ">
    </table>
    </form>
</body>
</html>