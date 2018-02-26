<?php
include 'koneksi.php';
$id_jadwal = $_POST['id_jadwal'];
$kelas = $_POST['kelas'];
$guru = $_POST['guru'];
$jam = $_POST['jam'];



 $q = "insert into siswa (id_siswa, nis, kelas, nama, alamat)values ('$id_siswa','$nis','$kelas','$nama','$alamat')";
        //echo $q;
        mysql_query($q);
        if(!$hasil)
        echo "Data sudah tersimpan";
    

echo "<table border='1' class='data'>
		<tr>
		<th width='10%'>No</th>
		<th width='20%'>Kelas</th>
		<th width='20%'>Hari</th>
		<th width='10%'>Jam</th>
		<th width='20%'>Mapel</th>
		<th width='10%'>Guru</th>
		</tr>";
		


		
		$jadwal 	= mysql_query("SELECT transaksi.kelas, transaksi.hari, transaksi.jam, transaksi.mapel, guru.nama FROM transaksi,guru WHERE guru.id_guru=transaksi.id_guru ORDER BY kelas ASC") or die (mysql_error());
		$j_data 	= mysql_num_rows($jadwal);

		
		
		if ($j_data == 0) {
			echo "<tr><td id='tengah' colspan='4'>-- Tidak Ada Data --</td></tr>";
		} else {
			$no = 1;
			while ($jadwal = mysql_fetch_array($jadwal)) {
				echo "<tr><td id='tengah'>$no</td>
				<td>$jadwal[0]</td>
				<td>$jadwal[1]</td>
				<td>$jadwal[2]</td>
				<td>$jadwal[3]</td>
				<td>$jadwal[4]</td>
				";
				//<td id='tengah'><a href='?p=ruang&mod=edit&id=$jadwal[0]'>Edit</a> |
					//<a href='?p=ruang&mod=del&id=$jadwal[0]' onclick=\"return konfirmasi('Menghapus data $jadwal[1]')\">Delete</a>
				//</tr>";
				$no++;
			}
		}
		echo "</table>";
		?>