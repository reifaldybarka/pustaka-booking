<!DOCTYPE html>
<html>

    <title>Form Input Daftar Riwayat Hidup</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/form-daftar.css'); ?>">




</head>
<body>
    <center>
        <h2>Form Input Daftar Riwayat Hidup</h2>
        <?php echo validation_errors(); ?>
        <form action="<?= base_url('daftar/proses_daftar'); ?>" method="post">
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"><br>

            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>

            <label for="tanggal_lahir">Tanggal Lahir:</label><br>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

            <label for="tempat_lahir">Tempat Lahir:</label><br>
            <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

            <label for="alamat">Alamat:</label><br>
            <textarea id="alamat" name="alamat"></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>