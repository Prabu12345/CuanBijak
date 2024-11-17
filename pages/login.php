<?php 
    // $db_hostname = 'localhost';
    // $db_username = 'root';
    // $db_password = '';
    // $db_name = 'cuanbijak';

    // try {
    //     $db_connection = new PDO("mysql:host=$db_hostname;dbname=$db_name", $db_username, $db_password);
    //     echo('Koneksi Berhasil');
    // } catch (PDOException $e) {
    //     die($e->getMessage());
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CuanBijak</title>
    <link rel="stylesheet" href="../style.css" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 bg-white p-4 rounded shadow">
            <h3 class="text-center mb-4">Login ke CuanBijak</h3>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3"><a href="#">Lupa Kata Sandi?</a> | <a href="register.php">Daftar Akun Baru</a>
            </p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 22552011195_M.Prabu Kiandamar Utoyo_TIF PK 22. All Rights Reserved.</p>
    </footer>

    <script>
        window.onload = function () {
            const isLoggedIn = localStorage.getItem("isLoggedIn");
            if (isLoggedIn) {
                window.location.href = "dashboard.php";
            }
        };
        // Fungsi untuk login pengguna
        document.getElementById("loginForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Ambil data pengguna dari localStorage
            const userData = localStorage.getItem("user_" + email);

            if (userData) {
                const user = JSON.parse(userData);
                // Validasi password
                if (user.password === password) {
                    localStorage.setItem("isLoggedIn", "true");
                    localStorage.setItem("loggedInUser", email);
                    alert("Login berhasil!");
                    window.location.href = "dashboard.php"; // Redirect ke halaman home
                } else {
                    alert("Password salah!");
                }
            } else {
                alert("Email tidak terdaftar!");
            }
        });
    </script>
</body>
</html>