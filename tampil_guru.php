<?php
include 'koneksi.php';
$id_guru = $_POST['id_guru'];
$nip = $_POST['nip'];
$mapel = $_POST['mapel'];
$nama_guru = $_POST['nama_guru'];
$alamat = $_POST['alamat'];

echo "<table border='1' class='data'>
		<tr>
		<th width='10%'>No</th>
		<th width='20%'>Kelas</th>
		<th width='20%'>Hari</th>
		<th width='10%'>Jam</th>
		<th width='20%'>Mapel</th>
		<th width='10%'>Guru</th>
		</tr>";
		


 $q = "insert into guru (id_guru, nip, nama, mapel, alamat)values ('$id_guru','$nip','$guru','$nama','$alamat')";
        //echo $q;
        mysql_query($q);
        if(!$q)
       die("Gagal Query ..".mysql_error());

   $guru 	= mysql_query("SELECT * FROM guru ORDER BY nama ASC") or die (mysql_error());
		$j_data 	= mysql_num_rows($guru);

		
		
		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='4'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($guru = mysql_fetch_array($guru)) {
				echo "<tr><td id='tengah'>$no</td>
				<td>$guru[0]</td>
				<td>$guru[1]</td>
				<td>$guru[2]</td>
				<td>$guru[3]</td>
				<td>$guru[4]</td>
				";
				//<td id='tengah'><a href='?p=ruang&mod=edit&id=$guru[0]'>Edit</a> |
					//<a href='?p=ruang&mod=del&id=$guru[0]' onclick=\"return konfirmasi('Menghapus data $guru[1]')\">Delete</a>
				//</tr>";
				$no++;
			}
		}
    
?>
