<?php
include 'koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nis = $_POST['nis'];
$siswa = $_POST['siswa'];
$nama_siswa = $_POST['nama_siswa'];
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
		


 $q = "insert into siswa (id_siswa, nis, siswa, nama, alamat)values ('$id_siswa','$nis','$siswa','$nama','$alamat')";
        //echo $q;
        mysql_query($q);
        if(!$q)
       die("Gagal Query ..".mysql_error());

   $siswa 	= mysql_query("SELECT * FROM siswa ORDER BY nama ASC") or die (mysql_error());
		$j_data 	= mysql_num_rows($siswa);

		
		
		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='4'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($siswa = mysql_fetch_array($siswa)) {
				echo "<tr><td id='tengah'>$no</td>
				<td>$siswa[0]</td>
				<td>$siswa[1]</td>
				<td>$siswa[2]</td>
				<td>$siswa[3]</td>
				<td>$siswa[4]</td>
				";
				//<td id='tengah'><a href='?p=ruang&mod=edit&id=$siswa[0]'>Edit</a> |
					//<a href='?p=ruang&mod=del&id=$siswa[0]' onclick=\"return konfirmasi('Menghapus data $siswa[1]')\">Delete</a>
				//</tr>";
				$no++;
			}
		}
    
?>