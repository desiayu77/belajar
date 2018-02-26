<html>
<form action="tampil_guru.php" method="post">
<input type="text" name="id_guru" value="id">
<br>
<input type="text" name="nip" value="Nomor Induk guru">
<br>
<input type="text" name="nama_guru" value="Nama guru">
<br>
<select name="mapel" size="">
            <option value="MATEMATIKA">1</option>
            <option value="BAHASA INDONESIA">2</option>
            <option value="IPA">3</option>
            <option value="IPS">4</option>
            <option value="PPKN">5</option>
            <option value="PAI">6</option>
            </select>
<br>


           
            <select name="kelas" size="2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            </select>
<br>
<input type="text" name="nama_guru" value="Nama guru">
 <input type="submit" name="submit">

</html>

<?php
include 'koneksi.php';
$id_guru = $_POST['id_guru'];
$nip = $_POST['nip'];

$nama_guru = $_POST['nama_guru'];
            $mapel = $_POST['mapel'];
$alamat = $_POST['alamat'];



 $q = "insert into guru (id_guru, nip, nama, mapel, alamat)values ('$id_guru','$nip',$nama','$mapel','$alamat')";
        //echo $q;
        mysql_query($q);
        echo "Data sudah tersimpan";
    
?>
