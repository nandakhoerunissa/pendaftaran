<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran</title>
</head>
<center>
<body>
    <h2>Pendaftaran Siswa Baru</h2>
        <h2>SMK N 1 SAYUNG</h2>
    <form action="prosespendaftaran.php" method="post">
        <table border="0">
            <tr>
                <td>Nama Lengkap: </td>
                <td><input type="text" name="nama"/></td>
</tr>
            <tr>
                <td>Tempat Lahir: </td>
                <td><input type="text" name="tl"/></td>
</tr>
            <tr>
                <td>Tanggal Lahir: </td>
                <td><input type="date" name="brith"/></td>
</tr>
            <tr>
                <td>Jenis Kelamin:</td>
                <td><input type="radio" name="sex" value= "Laki-Laki">Laki-Laki
                <input type="radio" name="sex" value="Perempuan">Perempuan </td>
</tr>
            <tr>
            <td>Alamat</td>
            <td> 
                <textarea name="alamat"></textarea>
            </td>
</tr>
</tr>
            <tr>
            <td>Agama</td>
            <td>
            <select name="Agama">
                <option> Islam </option>
                <option> Kristen </option>
                <option> Hindu </option>
                <option> Budha</option>
                <option> Konghucu </option>
            </select>
</td>
</tr>
    <tr>
    <td><input type="reset" value="ulangi"/>

    <td><input type="submit" value="submit"/>
</td>
</tr>
</table>
<form>
        </body>
</html>