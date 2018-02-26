  
<html>
<form action="simpan_jadwal.php">
<table border="1">
<tr>
    <td> id Jadwal</td>
    <td><input type="text" name="id_jadwal" text="id"></td>
</tr>
<tr>
<td>Kelas</td>
<td><select name="kelas" size="1" >
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            </select>
</td>
</tr>
<tr>
<td>Guru</td>
<td>


<?php
include 'koneksi.php';
 

    echo "<select name='guru'><option value=''>--</option>";
    $q = mysql_query("SELECT nama FROM guru ORDER BY nama ASC");
    while ($a = mysql_fetch_array($q)) 
        if ($a[0] == $selected) {
            echo "<option value='$a[0]' selected>$a[1]</option>";
        } else {
            echo "<option value='$a[0]'>$a[1]</option>";
        }
    
    echo "</select>";


?></td></tr>
<tr>
<td>Hari</td>
<td>
<select name="hari">
            <option value="senin">Senin</option>
            <option value="selasa">Selasa</option>
            <option value="rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
            </select>
</td>
<tr>
<td>Jam</td>
<td>
<select name="jam">
            <option value="7">07.00</option>
            <option value="9">09.00</option>
            <option value="11">11.00</option>
            <option value="13">13.00</option>
            
            </select>
</td>
</tr>
<tr>
<td colspan="2">



 <input type="submit" name="submit"></td></tr>
 </table>
</form>
</html>

