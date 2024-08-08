<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-
scale=1.0">
    <title>Komikku</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <button class="navbar-toggler" type="button" data-bs- toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria- expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=
                                                    base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('post')
                                                    ?>">Bookmark</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=
                                                    base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('faqs')
                                                    ?>">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="p-5 mb-5 bg-light rounded-5">
        <div class="p-5 mb-10 bg-body-tertiary" style="background:url(https://4kwallpapers.com/images/wallpapers/dark-background-abstract-background-network-3d-background-3840x2160-8324.png)">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold text-white">Selamat Datang di baca Komik</h1>
            </div>
        </div>

        <section class="showcase">
            <div class="container">
                <h1></h1>
            </div>
        </section>

        <section class="container">
            <h2><b>Tentang Kami</b></h2>
            <p>Kami adalah sekelompok penggemar komik dan manhwa yang bersemangat untuk membawa dunia cerita bergambar yang luar biasa ini lebih dekat kepada Anda. Di sini, kami menyajikan berbagai komik dari berbagai genre yang pastinya akan menghibur dan membawa Anda ke dalam dunia imajinasi yang penuh warna.</p>
            <p><b>
                    <h3>Apa yang Kami Tawarkan?</h3>
                </b></p>
            <ul>
                <li>Koleksi Komik Terlengkap: Kami menawarkan berbagai judul komik, manhwa, dan manga, mulai dari yang terbaru hingga yang klasik.</li>
                <li>Update Berkala: Kami selalu berusaha untuk memperbarui koleksi kami secara berkala, sehingga Anda tidak akan ketinggalan cerita-cerita terbaru dari komik favorit Anda.</li>
                <li>Komunitas Penggemar: Kami juga menyediakan ruang bagi para penggemar komik untuk berbagi pendapat, berdiskusi, dan menemukan teman-teman baru yang memiliki minat yang sama.</li>
            </ul>
            <h2><b>Misi Kami</b></h2>
            <p>Misi kami adalah untuk menyediakan akses yang mudah dan gratis ke berbagai judul komik terbaik dari seluruh dunia. Kami memahami betapa sulitnya menemukan tempat untuk membaca komik favorit dengan nyaman, oleh karena itu kami berkomitmen untuk memberikan pengalaman membaca yang mudah dan menyenangkan.</p>

            <h2><b>Komitmen Kami</b></h2>
            <p>Kami berkomitmen untuk menjaga kualitas konten yang kami sajikan. Semua komik yang ada di situs ini telah melalui proses seleksi dan kami terus bekerja keras untuk memastikan bahwa setiap komik yang Anda baca memiliki kualitas gambar dan terjemahan yang terbaik.</p>

            <h2><b>Mangga Terpopuler</b></h2>
            <ul>
                <li>Mangga Kimetsu No Yaiba</li>
                <li>Mangga Boruto</li>
                <li>Mangga Soul Land</li>
            </ul>
        </section>

        <div class="container py-5">
            <footer class="text-center bg-primary text-white">
                <!-- Grid container -->
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="bi bi-whatsapp"></i></a>

                        <!-- Twitter -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                        <!-- Github -->
                        <a data-mdb-ripple-init class="btn btn-link btn-floating btn-lg text-body m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                    <span class="mb-3 mb-md-0 text-white">© 2024 Copyright by Abdus Salam</span>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>