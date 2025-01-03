<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - CuanBijak</title>
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">CuanBijak</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pengaturan Keuangan</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" onclick="logout()">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center">Ringkasan Keuangan</h2>
        <div class="row my-4">
            <div class="col-md-4">
                <div class="card bg-light p-3">
                    <h5>Pemasukan</h5>
                    <p class="display-6">Rp5,000,000</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light p-3">
                    <h5>Pengeluaran</h5>
                    <p class="display-6">Rp3,000,000</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light p-3">
                    <h5>Saldo</h5>
                    <p class="display-6">Rp2,000,000</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center vh-100"></div>

    <footer class="footer">
        <p>&copy; 2024 22552011195_M.Prabu Kiandamar Utoyo_TIF PK 22. All Rights Reserved.</p>
    </footer>

    <script>
        // Fungsi untuk cek status login
        window.onload = function () {
            const isLoggedIn = localStorage.getItem("isLoggedIn");
            if (!isLoggedIn) {
                window.location.href = "login.php";
            }
        };

        function logout() {
            localStorage.removeItem("isLoggedIn");
            localStorage.removeItem("loggedInUser");
            alert("Anda telah logout.");
            window.location.href = "login.php";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>