<html>
<head>
            <title>TUGAS 06</title>
</head>
<body >
    <h1>Data Registrasi<h1>
    <?php

    $name=$_POST['nama'];
    $addr=$_POST['alamat'];
    $pob=$_POST['tmptlahir'];
    $dob=$_POST['tgllahir'];
    $gender=$_POST['jeniskel'];
    $edu=$_POST['pendidikan'];
    ?>
<table width="500" border="2">
    <tr>
        <td>Nama	: <td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Alamat	: <td>
        <td><?php echo $addr; ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir	:  <td>
        <td><?php echo $pob; ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir	: <td>
        <td><?php echo $dob; ?></td>
    </tr>
        <td>Jenis Kelamin	: <td>
        <td><?php echo $gender; ?></td>
    </tr>
        <td>Pendidikan	: <td>
        <td><?php echo $edu; ?>
    </td>
    </table>
    </h1>
    <a href="formregistrasi.php">Back to Home</a>
</body>
</html>