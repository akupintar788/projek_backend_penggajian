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
            border-radius: 10px; /* Increase border-radius for a softer look */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px; /* Adjust the max-width for better responsiveness */
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px; /* Increase margin-bottom for better spacing */
            color: #333;
        }

        select,
        input {
            width: 100%;
            padding: 10px; /* Increase padding for better readability */
            margin-bottom: 20px; /* Increase margin-bottom for better spacing */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 15px; /* Adjust padding for better appearance */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .icon {
            margin-right: 10px; /* Adjust margin for better spacing */
        }

        .error-message {
            color: #ff0000;
            margin-top: 5px; /* Add margin-top for better spacing */
        }
    </style>
</head>

<body>

    <?php if (isset($validation)): ?>
        <div class="error-message"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('jabatan/create') ?>">
        <h2>Tambah Data Jabatan</h2>

        <label for="nama_jabatan">Nama Jabatan:</label>
        <select name="nama_jabatan" required>
            <option value="manager" <?= old('nama_jabatan') == 'manager' ? 'selected' : '' ?>>Manager</option>
            <option value="staff" <?= old('nama_jabatan') == 'staff' ? 'selected' : '' ?>>Staff</option>
            <!-- Tambahkan opsi jabatan lainnya sesuai kebutuhan -->
        </select>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="text" name="gaji_pokok" value="<?= old('gaji_pokok') ?>" required>

        <label for="tj_transport">Tunjangan Transport:</label>
        <input type="text" name="tj_transport" value="<?= old('tj_transport') ?>" required>

        <label for="uang_makan">Uang Makan:</label>
        <input type="text" name="uang_makan" value="<?= old('uang_makan') ?>" required>

        <input type="submit" value="Tambah">
    </form>

</body>

</html>
