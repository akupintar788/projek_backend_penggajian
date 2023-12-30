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

        h2.edit-heading { /* Added class "edit-heading" to the h2 element */
            text-align: center;
            color: #333;
            margin-bottom: 15px; /* Added margin-bottom for spacing */
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

    <?php if (!empty($hak_akses)): ?>
        <form method="post" action="<?= site_url('akses/update/'.$hak_akses['id']) ?>" autocomplete="off">
            <?= csrf_field() ?>
            <h2 class="edit-heading">Edit Data Kehadiran</h2>
            <div class="mb-3">
                <label for="keterangan">Keterangan:</label>
                <input type="text" name="keterangan" value="<?= old('keterangan', $hak_akses['keterangan']); ?>" required><br>

                <label for="hak_akses">Hak Akses:</label>
                <input type="text" name="hak_akses" value="<?= old('hak_akses', $hak_akses['hak_akses']); ?>" required><br>

                <input type="submit" value="Update">
            </div>
        </form>
    <?php else: ?>
        <p>Data not found</p>
    <?php endif; ?>

</body>
</html>
