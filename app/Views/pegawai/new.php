<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
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

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
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

    <form method="post" action="<?= site_url('pegawai/create') ?>" enctype="multipart/form-data">
        <h2>Tambah Data Pegawai</h2>

        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>

        <label for="nik">NIK:</label>
        <input type="text" name="nik" value="<?= old('nik') ?>" required>

        <label for="nama_pegawai">Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" value="<?= old('nama_pegawai') ?>" required>

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?= old('username') ?>" required>

        <label for="password">Password:</label>
        <input type="text" name="password" value="<?= old('password') ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="laki-laki" <?= old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="perempuan" <?= old('jenis_kelamin') == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>

        <label for="jabatan">Jabatan:</label>
        <select name="jabatan" required>
            <option value="manager" <?= old('jabatan') == 'manager' ? 'selected' : '' ?>>Manager</option>
            <option value="staff" <?= old('jabatan') == 'staff' ? 'selected' : '' ?>>Staff</option>
        </select>

        <label for="tanggal_masuk">Tanggal Masuk:</label>
        <input type="date" name="tanggal_masuk" value="<?= old('tanggal_masuk') ?>" required>

        <label for="status">Status:</label>
        <select name="status" required>
            <option value="aktif" <?= old('status') == 'aktif' ? 'selected' : '' ?>>Aktif</option>
            <option value="non-aktif" <?= old('status') == 'non-aktif' ? 'selected' : '' ?>>Non-Aktif</option>
        </select>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" accept="image/*" required>

        <label for="hak_akses">Hak Akses:</label>
        <select name="hak_akses" required>
            <option value="admin" <?= old('hak_akses') == 'admin' ? 'selected' : '' ?>>Admin</option>
            <option value="user" <?= old('hak_akses') == 'user' ? 'selected' : '' ?>>User</option>
        </select>

        <input type="submit" value="Tambah" class="icon">
    </form>

</body>

</html>
