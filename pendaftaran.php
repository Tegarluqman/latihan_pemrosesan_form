<!DOCTYPE html>
<html lang="en">
<head>
<title>Template Desain Form</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
          <div class="k">
<body>
<h1>Pendaftaran Siswa Baru</h1>
<h2>SMKN 1 Sayung</h2>
<form action="proses_daftar.php" method="post">
<table border=0>
<tr>
<td>Nama lengkap</td>
<td>:<input type="text" name="n"/></td>
</tr>
<tr>
<td>Tempat lahir</td>
<td>:<input type="text" name="t"/></td>
</tr>
<td>Tanggal lahir</td>
<td>:<input type="date" name="tl" /></td>
<tr>
<td>Jenis Kelamin</td>
<td>:
<input type="radio" name="sex" value="Pria"/>Pria
<input type="radio" name="sex" value="Wanita"/>Wanita
</td>
</tr>
<tr>
<td>Alamat</td>
<td>:<textarea name="almt"></textarea></td>
</tr>
<tr>
<td>Agama</td>
<td>:
<select name="agama">
<option>Islam</option>
<option>Kristen</option>
<option>Katolik</option>
<option>Hindu</option>
<option>Budha</option>
</select>
</td>
</tr>
<tr>
<td>
<input type="reset" value="ulangi" />
<td>:<input type="submit" value="                                submit" name="data"/></td>
</td>
</tr>
</table>
</form>
</body>
</center>
</html>