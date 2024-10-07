<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link   rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" href="../image/logo2.png" type="image/png">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 left-0" style=" z-index: 2;">
  <div class="container-fluid">
    <a class="navbar-brand display-1" href="#">
      <img src="../image/logo3.png" class="img-fluid" style="width:80px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold" href="#features">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold" href="#produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-5 fw-bold" href="#help-center">Help Center</a>
        </li>
      </ul>

      <!-- Tombol Login dan Register dipindahkan ke sini -->
      <div class="ms-auto"> <!-- Menambahkan div dengan kelas ms-auto -->
        <a href="../login.php" class="me-4"> <!-- Menambahkan kelas me-4 untuk jarak yang lebih jauh -->
          <button class="btn btn-outline-success rounded-pill" type="button" style="padding: 10px 20px;">Login</button>
        </a>
        <a href="../register.php">
          <button class="btn btn-outline-success rounded-pill" type="button" style="padding: 10px 20px;">Register</button>
        </a>
      </div>
      
    </div>
  </div>
</nav>


<section class="hero" id="home">
  <div class="container">
  <h1>Selamat Datang Di Beranda TopUp In</h1>
  <p class="masuk"></p>
  </div>
</section>

<section class="features" id="features">
        <h1>Kenapa <span class="highlight">TopUp IN</span> Pas Banget Buat kamu?</h1>
        <div class="features-container">
            <div class="feature-item">
                <i class="fas fa-clipboard-list feature-icon"></i>
                <h2>Banyak Pilihannya</h2>
                <p>Kamu ga usah bingung mau beli apa atau jualan apa, TopUp In menyediakan banyak pilihan buat kamu.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-wallet feature-icon"></i>
                <h2>Pembayaran Termudah</h2>
                <p>Kami Menyediakan Banyak Pilihan Untuk Pembayaran</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-heart feature-icon"></i>
                <h2>Layanan Berkualitas</h2>
                <p>Kami menyediakan berbagai layanan terbaik untuk kebutuhan Sosial Media & Pulsa Untuk Anda.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-tag feature-icon"></i>
                <h2>Lebih Murah Dari Yang Lain</h2>
               <a href=""> <p>Kami Menjamin Harga Dari TopUp In lebih murah dari yang lain.</p></a>
            </div>
        </div>
    </section>

<section class="tengah" id="produk">
<div class="card" style="width: 40rem; height:35rem; border:none;">
  <div class="card-body">
    <h5 class="card-title text-uppercase text-center"style="text-align = center;">Produk Kami</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Jangan lewatkan kesempatan untuk mendapatkan produk-produk unggulan dengan harga spesial! Kami menyediakan berbagai pilihan
       produk dengan kualitas terbaik dan harga terjangkau.</h6>
      </div>
  </div>
</div>
</section>

<section class="help-center" id="help-center">
<div class="container">
        <h1>Help Center</h1>
        <p>If you have any issues or need support, feel free to reach out to us through the following platforms:</p>
        <div class="contact-list">
            <a href="https://www.instagram.com/yourusername" target="_blank" class="contact-item instagram">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a href="https://wa.me/yourphonenumber" target="_blank" class="contact-item whatsapp">
                <i class="fab fa-whatsapp"></i>
                <span>WhatsApp</span>
            </a>
            <a href="mailto:youremail@example.com" target="_blank" class="contact-item email">
                <i class="fas fa-envelope"></i>
                <span>Email</span>
            </a>
            <a href="https://t.me/yourusername" target="_blank" class="contact-item telegram">
                <i class="fab fa-telegram-plane"></i>
                <span>Telegram</span>
            </a>
            <a href="https://www.facebook.com/yourusername" target="_blank" class="contact-item facebook">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </a>
        </div>
    </div>
</section>


<section class="about" id="about">
    <div class="container">
        <!-- Kolom 1 -->
        <div class="about-info">
            <h4>Atlantic-Pedia.</h4>
            <p>Atlantic-Pedia | Distributor Pulsa & Transfer Bank/E-Wallet Murah Di Indonesia adalah pusat reseller produk digital yang menyediakan layanan PPOB, pulsa untuk semua operator, kebutuhan top-up game, token listrik, pembayaran tagihan, data internet, serta akun premium seperti Netflix Premium, YouTube Premium, Spotify Premium, dan lainnya.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="about-company">
            <h4>Company</h4>
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">List Harga</a></li>
            </ul>
        </div>

        <!-- Kolom 3 -->
        <div class="about-links">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>

        <!-- Kolom 4 -->
        <div class="about-newsletter">
            <h4>Newsletter</h4>
            <p>Sign up and receive the latest tips via email.</p>
            <form>
                <input type="email" id="email" placeholder="Write your email">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <p>© 2024 TopUp In-Mahasiswa Polije</p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-rUgA5U6jUqKR8FqBZI2hbMiA2wr/hqqdItu74u/8ycw6pQ0PVlmQOfVsZgEsxCC5" crossorigin="anonymous"></script>
</body>
</html>
