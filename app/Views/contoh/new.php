<!-- app/Views/kehadiran/create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kehadiran</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 40%;
        margin: auto;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
    }

    select {
        /* Style dropdown */
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="%23333"><path d="M8 11L0 3h16z"/></svg>');
        background-repeat: no-repeat;
        background-position: right 8px top 50%;
        background-size: 12px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .icon {
        margin-right: 90px;
    }
</style>

</head>

<body>

    <?php if (isset($validation)): ?>
        <div><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('Contoh/create') ?>">
    <!-- Isi formulir di sini -->
    <h2>Tambah Data Kehadiran</h2>

    <label for="bulan">Bulan:</label>
    <input type="text" name="bulan" value="<?= old('bulan') ?>" required><br>

    <label for="nik">NIK:</label>
    <input type="text" name="nik" value="<?= old('nik') ?>" required><br>

    <label for="nama_pegawai">Nama Pegawai:</label>
    <input type="text" name="nama_pegawai" value="<?= old('nama_pegawai') ?>" required><br>

    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin" required>
        <option value="laki-laki" <?= old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="perempuan" <?= old('jenis_kelamin') == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
        <!-- Tambahkan opsi jenis kelamin lainnya sesuai kebutuhan -->
    </select><br>

    <label for="nama_jabatan">Nama Jabatan:</label>
    <select name="nama_jabatan" required>
        <option value="manager" <?= old('nama_jabatan') == 'manager' ? 'selected' : '' ?>>Manager</option>
        <option value="staff" <?= old('nama_jabatan') == 'staff' ? 'selected' : '' ?>>Staff</option>
        <!-- Tambahkan opsi jabatan lainnya sesuai kebutuhan -->
    </select><br>

    <label for="hadir">Hadir:</label>
    <input type="number" name="hadir" value="<?= old('hadir') ?>" required><br>

    <label for="sakit">Sakit:</label>
    <input type="number" name="sakit" value="<?= old('sakit') ?>" required><br>

    <label for="alpha">Alpa:</label>
    <input type="number" name="alpha" value="<?= old('alpha') ?>" required><br>

    <input type="submit" value="Tambah">
</form>



</body>

</html>
