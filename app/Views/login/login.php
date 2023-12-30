<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('https://source.unsplash.com/1600x900/?technology'); /* Ganti gambar dengan kategori yang diinginkan dari Unsplash */
            background-size: cover;
            background-position: center;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
            overflow: hidden;
            transition: box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.4);
        }

        .card-header {
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            padding: 30px;
        }

        label {
            font-weight: 600;
            color: black;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 8px;
            height: 45px;
            font-size: 16px;
            padding: 0 12px;
            transition: border-color 0.3s;
            background: #fff;
            color: black;
        }

        .form-control:focus {
            border-color: #2980b9;
        }

        .btn-primary {
            background: linear-gradient(to right, #3498db, #2c3e50);
            border: none;
            border-radius: 8px;
            height: 45px;
            font-size: 18px;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #2980b9, #3498db);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Login</h3>
            </div>
            <div class="card-body">
                <?php if (session()->has('error')) : ?>
                    <div class="alert alert-danger">
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>
                <form action="<?= site_url('login') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
