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

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
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

    <?php if (isset($validation)) : ?>
        <div><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('potongan/create') ?>">
        <!-- Isi formulir di sini -->
        <h2>Tambah Data Kehadiran</h2>

        <label for="potongan">Potongan:</label>
        <input type="text" name="potongan" value="<?= old('potongan'); ?>" required><br>

        <label for="jml_potongan">Jumlah Potongan:</label>
        <input type="text" name="jml_potongan" value="<?= old('jml_potongan'); ?>" required><br>

        <input type="submit" value="Tambah">
    </form>

</body>

</html>
