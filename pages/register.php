<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - CuanBijak</title>
    <link rel="stylesheet" href="../style.css" />
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 bg-white p-4 rounded shadow">
            <h3 class="text-center mb-4">Daftar di CuanBijak</h3>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirm-password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Daftar</button>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </div>
    </div>

    <script>
        window.onload = function () {
            const isLoggedIn = localStorage.getItem("isLoggedIn");
            if (isLoggedIn) {
                window.location.href = "dashboard.php";
            }
        };
        // Fungsi untuk menyimpan data pengguna ke localStorage
        document.querySelector("form").addEventListener("submit", function (e) {
            e.preventDefault();

            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;

            // Validasi password dan konfirmasi password
            if (password !== confirmPassword) {
                alert("Password dan Konfirmasi Password harus sama!");
                return;
            }

            // Simpan data pengguna di localStorage
            const userData = { name, email, password };
            localStorage.setItem("user_" + email, JSON.stringify(userData));

            alert("Registrasi berhasil! Silakan login.");
            window.location.href = "login.php";
        });
    </script>
    <footer class="footer">
        <p>&copy; 2024 22552011195_M.Prabu Kiandamar Utoyo_TIF PK 22. All Rights Reserved.</p>
    </footer>
</body>
</html>