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

    

    <?php if (!empty($data_jabatan)): ?>
        <form method="post" action="<?= site_url('jabatan/update/'.$data_jabatan['id_jabatan']) ?>" autocomplete="off">
            <?= csrf_field() ?>
            <h2>Edit Data Kehadiran</h2>
            <div class="mb-3">
                
        <label for="nama_jabatan">Nama Jabatan:</label>
        <input type="text" name="nama_jabatan" value="<?= old('nama_jabatan') ?>" required><br>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="text" name="gaji_pokok" value="<?= old('gaji_pokok') ?>" required><br>

        <label for="tj_transport">Tunjangan Transport:</label>
        <input type="text" name="tj_transport" value="<?= old('tj_transport') ?>" required><br>

        <label for="uang_makan">Uang Makan:</label>
        <input type="text" name="uang_makan" value="<?= old('uang_makan') ?>" required><br>

                <input type="submit" value="Update">
            </div>
        </form>
    <?php else: ?>
        <p>Data not found</p>
    <?php endif; ?>

</body>
</html>
