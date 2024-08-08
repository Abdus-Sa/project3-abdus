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
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="p-5 mb-10 bg-body-tertiary" style="background:url(https://t4.ftcdn.net/jpg/05/71/83/47/https://t3.ftcdn.net/jpg/03/15/92/42/240_F_315924231_ARwuFaPa1NzlsYbnFQfQukX4QxY6MNNM.jpg)">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold text-white">Konten</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post) : ?>
                    <div class="col-md-12 my-2 card">
                        <div class="card-body">
                            <h5 class="h5"><a href="/post/<?=
                                                            $post['slug'] ?>"><?= $post['title'] ?></a></h5>
                            <p><?= substr(
                                    $post['content'],
                                    0,
                                    120
                                ) ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="container py-4">
            <footer class="text-center bg-body-tertiary">
                <!-- Grid container -->
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                    © 2024 Copyright:
                    <a class="text-body" href="https://github.com/Abdus-Sa">by Abdus Salam</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
        <!-- Jquery dan Bootsrap JS -->
        <script src="<?= base_url('js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>