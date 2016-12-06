<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$age = new Age();
$umur = $age->readBirthDay();
$data = $siswa->readAllSiswa();
$tanggal = getdate();
?>

<table border='1'>
	<tr>
		<th>ID Siswa</th>
		<th>Full Name</th>
		<th>Date Of Birth</th>
		<th>Age</th>
		<th>Nationality</th>
		<th>Detail</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa'];?></td>
		<td><?php echo $a['full_name'];?></td>
		<td><?php echo $a['date_ob'];?></td>
		<td><?php if(empty($a['date_ob'])) echo "UMUR TIDAK FALID"; else echo (date('Y') - date('Y',strtotime($a['date_ob']))). " Tahun";?></td>
		<td><?php echo $a['nationality'];?></td>
		<td><a href="dsiswa.php?id=<?php echo $a['id_siswa'];?>">Detail</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa'];?>">Edit</a></td>
		<td><a href="delsiswa.php?id=<?php echo $a['id_siswa'];?>">Hapus</a></td>
	</tr>
	<?php endforeach?>
</table>