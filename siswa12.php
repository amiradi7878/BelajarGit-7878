<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


$siswa = new Siswa();
$data = $siswa->readAllSiswa();

print '<pre>';
print_r ($data);
print '</pre>';

?>

<table>
	<tr>
		<th> ID SISWA</th>
		<th> FULL NAME</th>
		<th> NATIONALITY</th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
	<td><?php echo $a['id_siswa']?></td>
	<td><?php echo $a['full_name']?></td>
	<td><?php echo $a['nationality']?></td>
	<td><a href="dsiswa.php?id="<?php echo $a['id_siswa']?>">Detail</a></td>
	</tr>
	<?php endforeach?>
</table>	s