<!-- app/Views/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <style>
        /* Add this CSS in your <style> tag or link to an external CSS file */

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

   

    <?php if (!empty($data_pegawai)): ?>
        <form method="post" action="<?= site_url('pegawai/update/'.$data_pegawai['id_pegawai']) ?>" autocomplete="off">
            <?= csrf_field() ?>
            <h2>Edit Data Pegawai</h2>
            <div class="mb-3">
                <label for="nik">NIK:</label>
                <input type="text" name="nik" value="<?= old('nik', $data_pegawai['nik']); ?>" required><br>

                <label for="nama_pegawai">Nama Pegawai:</label>
                <input type="text" name="nama_pegawai" value="<?= old('nama_pegawai', $data_pegawai['nama_pegawai']); ?>" required><br>

                <label for="username">Username:</label>
                <input type="text" name="username" value="<?= old('username', $data_pegawai['username']); ?>" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" value="<?= old('password', $data_pegawai['password']); ?>" required><br>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki" <?= old('jenis_kelamin', $data_pegawai['jenis_kelamin']) == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= old('jenis_kelamin', $data_pegawai['jenis_kelamin']) == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select><br>

                <label for="jabatan">Jabatan:</label>
                <select name="jabatan" required>
                    <option value="Manager" <?= old('jabatan', $data_pegawai['jabatan']) == 'Manager' ? 'selected' : '' ?>>Manager</option>
                    <option value="Staff" <?= old('jabatan', $data_pegawai['jabatan']) == 'Staff' ? 'selected' : '' ?>>Staff</option>
                </select><br>

                <label for="tanggal_masuk">Tanggal Masuk:</label>
                <input type="date" name="tanggal_masuk" value="<?= old('tanggal_masuk', $data_pegawai['tanggal_masuk']); ?>" required><br>

                <label for="status">Status:</label>
                <select name="status" required>
                    <option value="Aktif" <?= old('status', $data_pegawai['status']) == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
                    <option value="Nonaktif" <?= old('status', $data_pegawai['status']) == 'Nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
                </select><br>

                <label for="photo">Photo:</label>
                <input type="file" name="photo" accept="image/*" value="<?= old('photo', $data_pegawai['photo']); ?>" required><br>

                <label for="hak_akses">Hak Akses:</label>
                <select name="hak_akses" required>
                    <option value="Admin" <?= old('hak_akses', $data_pegawai['hak_akses']) == 'Admin' ? 'selected' : '' ?>>Admin</option>
                    <option value="User" <?= old('hak_akses', $data_pegawai['hak_akses']) == 'User' ? 'selected' : '' ?>>User</option>
                </select><br>

                <input type="submit" value="Update">
            </div>
        </form>
    <?php else: ?>
        <p>Data not found</p>
    <?php endif; ?>

</body>
</html>
