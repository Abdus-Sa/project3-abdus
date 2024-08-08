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

    <div class="p-5 mb-10 bg-body-tertiary" style="background:url(https://wallpapers.com/images/hd/dark-anime-scenery-wot9wg412s7h8yxa.jpg">
        </section><!-- /Testimonials Section -->

        <!-- Section Title -->
        <div class="container section-title text-white" data-aos="fade-up">
            <h2>Hubungin</h2>
            <p>Kontak Kami</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jalan Taman Amir Hamzah, Matraman</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telephone</h3>
                                <p>085939484876</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex text-white" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>salamabdus9166@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.84333885319!2d106.79526445501725!3d-6.182226079459258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f436b8c94b07%3A0x6ea6d5398b7c82f6!2sJakarta%20Pusat%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1722495966636!5m2!1sid!2sid)" width="450" height="300" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6 text-white">
                                <label for="name-field" class="pb-2">Nama</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6 text-white">
                                <label for="email-field" class="pb-2">Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>

                            <div class="col-md-12 text-white">
                                <label for="subject-field" class="pb-2">Tema</label>
                                <input type="text" class="form-control" name="subject" id="subject-field" required="">
                            </div>

                            <div class="col-md-12 text-white">
                                <label for="message-field" class="pb-2">Deskripsi</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center text-white">
                                <div class="error-message"></div>
                                <div class="sent-message">Silahkan Kirim Pesan Dan Saran!</div>

                                <button type="submit">Kirim Pesan</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

        </section><!-- /Contact Section -->
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