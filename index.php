<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CuanBijak</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />

<body>
    <!-- Topbar using Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand nav-space" href="#">CuanBijak</a>

        <!-- Collapsible Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Menu Items -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About us</a>
                </li>
            </ul>
        </div>

        <!-- Login and Sign Up buttons -->
        <div class="a-flex ms-auto me-2">
            <a href="pages/login.php" class="btn btn-outline-light me-2">Login</a>
            <a href="pages/register.php" class="btn btn-light">Sign Up</a>
        </div>

        <!-- Collapse button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container text-center">
            <h1>Selamat Datang di CuanBijak</h1>
            <p>Langkah Cerdas Menuju Keuangan Sejahtera.</p>
            <a href="#about" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Tentang Kami</h2>
                    <p>CuanBijak hadir sebagai solusi praktis dalam mengatur pemasukan, pengeluaran, tabungan, hingga
                        investasi, semua dalam satu aplikasi yang mudah digunakan. Dengan fitur yang intuitif dan data
                        yang aman, kami berkomitmen untuk mendampingi Anda dalam setiap langkah finansial, dari
                        merencanakan anggaran hingga meraih impian finansial Anda.</p>
                    <p>Misi kami adalah membantu masyarakat Indonesia mencapai kebebasan finansial melalui pengelolaan
                        uang yang bijak dan terarah. Bersama CuanBijak, mari kita wujudkan kehidupan yang lebih baik dan
                        sejahtera. </p>
                </div>
                <div class="col-md-6">
                    <img src="image/about-us-image.jpeg" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container text-center">
            <h2>Fitur Kami</h2>
            <p class="lead">Temukan fitur luar biasa yang kami tawarkan untuk meningkatkan pengalaman Anda.</p>
            <div class="row">
                <div class="col-md-4">
                    <i class="feature-icon fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Situs web kami dirancang agar tampak hebat di semua perangkat, dari desktop hingga ponsel.</p>
                </div>
                <div class="col-md-4">
                    <i class="feature-icon fas fa-lock"></i>
                    <h3>Keamanan</h3>
                    <p>Kami mengutamakan privasi dan keamanan Anda dengan teknologi mutakhir.</p>
                </div>
                <div class="col-md-4">
                    <i class="feature-icon fas fa-cogs"></i>
                    <h3>Dapat disesuaikan</h3>
                    <p>Platform kami menawarkan berbagai pilihan penyesuaian untuk memenuhi kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 22552011195_M.Prabu Kiandamar Utoyo_TIF PK 22. All Rights Reserved.</p>
    </footer>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</head>

</html>