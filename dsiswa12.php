<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('access forbidden');
}
$siswa = new Siswa();
$data = $siswa->readSiswa($id);
$dt = $data[0];

if(empty($data))
	exit('siswa is not found');
}
?>



<table border="1">
	<tr>
		<td> ID Siswa></td>
		<td><?php echo $dt['id_siswa']?> </td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td><?php echo $dt['full_name']?> </td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><?php echo $dt['nationality']?> </td>
	</tr>
</table>
<br />
<a href="siswa.php">kembali</a>	