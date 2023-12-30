<!-- app/Views/edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kehadiran</title>
    <!-- Add any necessary CSS or Bootstrap links here -->
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



    <?php if (!empty($data_kehadiran)): ?>
        
        <form method="post" action="<?= site_url('contoh/update/'.$data_kehadiran['id_kehadiran']) ?>" autocomplete="off">
            <?= csrf_field() ?>
            <h2>Edit Data Kehadiran</h2>
            <div class="mb-3">
                <label for="bulan">Bulan:</label>
                <input type="text" name="bulan" value="<?= old('bulan', $data_kehadiran['bulan']); ?>" required><br>

                <label for="nik">NIK:</label>
                <input type="text" name="nik" value="<?= old('nik', $data_kehadiran['nik']); ?>" required><br>

                <label for="nama_pegawai">Nama Pegawai:</label>
                <input type="text" name="nama_pegawai" value="<?= old('nama_pegawai', $data_kehadiran['nama_pegawai']); ?>" required><br>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="text" name="jenis_kelamin" value="<?= old('jenis_kelamin', $data_kehadiran['jenis_kelamin']); ?>" required><br>

                <label for="nama_jabatan">Nama Jabatan:</label>
                <input type="text" name="nama_jabatan" value="<?= old('nama_jabatan', $data_kehadiran['nama_jabatan']); ?>" required><br>

                <label for="hadir">Hadir:</label>
                <input type="text" name="hadir" value="<?= old('hadir', $data_kehadiran['hadir']); ?>" required><br>

                <label for="sakit">Sakit:</label>
                <input type="text" name="sakit" value="<?= old('sakit', $data_kehadiran['sakit']); ?>" required><br>

                <label for="alpha">Alpha:</label>
                <input type="text" name="alpha" value="<?= old('alpha', $data_kehadiran['alpha']); ?>" required><br>

                <input type="submit" value="Update">
            </div>
        </form>
    <?php else: ?>
        <p>Data not found</p>
    <?php endif; ?>

</body>
</html>
