<html>
<head>
	<title> tugas 06 </title>
</head>
<body>
<Form 
action="DataRegistrasi.php" method="post">
<h1> Form Registrasi </h1>
<b>Isi Data Dibawah ini:</b>
<br>
<pre>
Nama		  : <input type="text" name="nama" size"25" maxlenght="50">
Alamat 	  : <textarea name="alamat" rows"25" colspan="50"></textarea>
Tempat Lahir  : <input type="text" name="tmptlahir" size"25" maxlenght="50">
Tanggal Lahir : <input type="text" name="tgllahir" size"25" maxlenght="50">
</pre>
Jenis Kelamin : 
<input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
<input type="radio" name="jeniskel" value"Perempuan">Perempuan
<p>
Pendidikan	  :
<select name="pendidikan">
<option value="-Pilih-">
<option value="SD">SD
<option value="SMP">SMP
<option value="SMA">SMA
<option value="SMK">SMK
<option value="D3">D3
<option value="S1">S1
</select>
<p>
<input type="submit" value="Submit"><input type="reset" value="cancel"
</form>
</body>
</html>