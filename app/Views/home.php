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

    <div class="p-5 mb-10 bg-body-tertiary" style="background:url(https://t4.ftcdn.net/jpg/05/71/83/47/360_F_571834789_ujYbUnH190iUokdDhZq7GXeTBRgqYVwa.jpg)">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold text-white">Baca Komik Terbaru</h1>
            <p class="col-md-8 fs-4 text-white">Kami adalah sekelompok penggemar komik dan manhwa yang bersemangat untuk membawa dunia cerita bergambar yang luar biasa ini lebih dekat kepada Anda. Di sini, kami menyajikan berbagai komik dari berbagai genre yang pastinya akan menghibur dan membawa Anda ke dalam dunia imajinasi yang penuh warna.</p>
        </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-5" src="/img/logo.jpg" alt="" width="70" height="70">
        <h1 class="display-5 fw-bold text-body-emphasis">Layanan Kami</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Kami membuat website ini untuk memikat para penggemar anime.
                Cari Tahu layanan yang kami tawarkan kepada anda disini:.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-danger btn-lg px-4 gap-3">baca komik</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">komik terbaru</button>
            </div>
        </div>
    </div>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Kimetsu No Yaiba</h1>
                <p class="lead my-3">Kimetsu no Yaiba, yang diterbitkan di Indonesia dengan judul Demon Slayer: Kimetsu no Yaiba, adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Koyoharu Gotōge.</p>
                <p class="lead mb-0"><a href="https://demonslayer-anime.com/" class="text-body-emphasis fw-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Boruto: Naruto Next Generations
                        </strong>
                        <h3 class="mb-0">BORUTO</h3>
                        <div class="mb-1 text-body-secondary">Nov 12</div>
                        <p class="card-text mb-auto">Boruto: Naruto Next Generations adalah sebuah seri manga asal Jepang yang ditulis oleh Ukyo Kodachi dan Masashi Kishimoto dan diilustrasikan oleh Mikio Ikemoto.</p>
                        <a href="https://mangaplus.shueisha.co.jp/titles/100006" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">One Piece</strong>
                        <h3 class="mb-0">ONE PIECE</h3>
                        <div class="mb-1 text-body-secondary">Mar 97</div>
                        <p class="mb-auto">One Piece adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 105 volume tankōbon hingga Maret 2023. Ceritanya mengisahkan petualangan Monkey D.</p>
                        <a href="https://mangaplus.shueisha.co.jp/titles/100140" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <div class="container py-4">
        <footer class="text-center bg-primary text-white">
            <!-- Copyright -->
            <div class="text-center p-5 mb-10" style="background-color: rgba(0, 0, 0, 0.05);">
                <span class="p-5 text-white">© 2024 Copyright by Abdus Salam</span>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>