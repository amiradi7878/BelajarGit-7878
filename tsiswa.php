<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$siswa = new Siswa();
$nation = new Nationality;

$data_nation = $nation->readAllNationality();

if(isset($_POST['kirim'])) {
	
	if($_POST['in_nis'] && $_POST['in_name'] && $_POST['in_email'] != null) {
		if($_POST['in_nis'] && $_POST['in_name'] && $_POST['in_email'] != '\'') {
			$name = $_POST['in_name'];
			$nis = $_POST['in_nis'];
			$email = $_POST['in_email'];
			$nat = $_POST['in_nation'];
			
			$tambah = $siswa->createSiswa($nat, $nis, $email, $name, '');
			echo "Data siswa berhasil Ditambahkan <br /> <br>" ;
		} else {
			echo "Harap masukkan data yang benar";
		}
	} else 
		echo "Masukkan data dengan lengkap";
	
}

?>

<h1>Tambah Data Siswa</h1>

<form action="tsiswa.php" method="POST">
	NIS:<br />
	<input type="text" name="in_nis"><br />
	Nama Lengkap:<br />
	<input type="text" name="in_name"><br />
	E-mail:<br />
	<input type="text" name="in_email"><br />
	Kewarganegaraan<br />
	<select name="in_nation">
		<option value=""> --pilih negara-- </option>
		<?php foreach($data_nation as $n): ?>
		<option value="<?php echo $n['id_nationality']?>"><?php echo $n['nationality']?></option>
		<?php endforeach?>
	</select><br />
	<input type="submit" name="kirim" value="Simpan">
</form>