
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .login-card h3 {
            margin-bottom: 30px;
            font-weight: bold;
            color: #007bff;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-login {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            color: white;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .avatar {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="login-card text-center">

        <img src="assets/img/logo.png" alt="User Icon"
            class="rounded-circle mx-auto d-block mb-4"
            style="width: 100px; height: 100px; object-fit: cover;">
        <h3>Login Akun</h3>
        <?php
        session_start();
        include 'conect.php';

        if (isset($_POST['login'])) {
            $email    = mysqli_real_escape_string($koneksi, $_POST['email']);
            $password = md5($_POST['password']); // hash dulu dengan md5

            // Cek di tabel admin
            $query_admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
            if (mysqli_num_rows($query_admin) > 0) {
                $admin = mysqli_fetch_assoc($query_admin);
                $_SESSION['email'] = $admin['email'];
                $_SESSION['role']  = 'admin';
                header("Location: admin/media.php");
                exit;
            }

            // Cek di tabel pelanggan
            $query_pelanggan = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE email = '$email' AND password = '$password'");
            if (mysqli_num_rows($query_pelanggan) > 0) {
                $pelanggan = mysqli_fetch_assoc($query_pelanggan);
                $_SESSION['email'] = $pelanggan['email'];
                $_SESSION['role']  = 'user';
                header("Location: media.php");
                exit;
            }

            // Jika tidak ditemukan di kedua tabel
            echo "<div class='alert'>Email atau password salah!</div>";
        }
        ?>



        <form action="" method="POST">
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-4 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <button type="submit" name="login" class="btn">Login</button>
            <div class="mt-3 text-center">
                <span>Belum punya akun?</span>
                <a href="signup.php" class="text-primary fw-bold">Buat Akun</a>
            </div>
        </form>
    </div>

</body>

</html>