<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id))
{
	exit('Access Forbidden');
}

$siswa = new Siswa;
$siswa->deleteSiswa($id);

if(empty($data))
{
	exit ("Data Berhasil dihapus");
	echo "<a href=siswa.php.>Kembali</a>";
}
?>

