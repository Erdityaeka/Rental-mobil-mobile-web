<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Akun</title>
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
        <h3>Register Akun</h3>

        <?php
        include "conect.php"; // pastikan file koneksi sudah ada

        if (isset($_POST['simpan'])) {
            // Ambil data dari form
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $username = $_POST['username'];
            $telpon = $_POST['telpon'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $foto = $_FILES['foto']['name'];
            $tmp = $_FILES['foto']['tmp_name'];

            $role = "user"; // role otomatis user

            // Query untuk tabel pelanggan
            $insert_pelanggan = "INSERT INTO pelanggan (email, password, username, telpon, jenis_kelamin, alamat, foto, role) 
                                VALUES ('$email', '$password', '$username', '$telpon', '$jenis_kelamin', '$alamat', '$foto', '$role')";

            // Query untuk tabel admin
            $insert_admin = "INSERT INTO admin (email, password, username, telpon, jenis_kelamin, alamat, foto, role) 
                             VALUES ('$email', '$password', '$username', '$telpon', '$jenis_kelamin', '$alamat', '$foto', '$role')";

            // Eksekusi kedua query
            if (mysqli_query($koneksi, $insert_pelanggan) && mysqli_query($koneksi, $insert_admin)) {
                // Upload foto ke folder jika berhasil
                move_uploaded_file($tmp, "assets/img/user/$foto");
                echo "<div class='alert alert-success'>Registrasi berhasil! <a href='login.php'>Login sekarang</a></div>";
            } else {
                echo "<div class='alert alert-danger'>Registrasi gagal: " . mysqli_error($koneksi) . "</div>";
            }
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3 text-start">
                <label for="Email" class="form-label">Email</label>
                <input type="text" name="email" id="Email" class="form-control" placeholder="Masukkan Email" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <div class="mb-3 text-start">
                <label for="Username" class="form-label">Username</label>
                <input type="text" name="username" id="Username" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="mb-3 text-start">
                <label for="Telpon" class="form-label">Telpon</label>
                <input type="text" name="telpon" id="Telpon" class="form-control" placeholder="Masukkan Telpon" required>
            </div>
            <div class="mb-3 text-start">
                <label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                    Laki-laki
                </label>
                <br>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    Perempuan
                </label>
            </div>

            <div class="mb-3 text-start">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap" required></textarea>
            </div>
            <div class="mb-4 text-start">
                <label for="inputGroupFile02" class="form-label">Foto</label>
                <input type="file" class="form-control" id="inputGroupFile02" name="foto" accept="image/*">
            </div>
            <button name="simpan" type="submit" class="btn btn-login w-100">Register</button>

            <div class="mt-3 text-center">
                <span>Sudah punya akun?</span>
                <a href="login.php" class="text-primary fw-bold">Login Akun</a>
            </div>
        </form>
    </div>

</body>

</html>