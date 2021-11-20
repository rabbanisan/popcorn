<!-- Use Tempalate for header and footer -->
<?= $this->extend('layout/template'); ?>
<!-- Content here -->
<?= $this->section('content'); ?>
<!-- Hero -->
<section class="container-fluid d-flex justify-content-center hero-container pt-5">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="/assets/img/tky-rvgr-landscape.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/escp-room-landscape.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Banner -->
    <div class="banner mx-2 d-flex flex-column justify-content-center">
        <img src="/assets/img/vector-popcorn-cinema.jpg" alt="">
        <img src="/assets/img/classic-popcorn.jpg" alt="">
    </div>
</section>

<!-- Now playing section -->
<div id="now-playing-section" class="pb-5"></div>
<section class="pt-4">
    <div class="container">
        <div class="section-tittle bg-light">
            <h3 class="ms-3 p-2">Now Playing</h3>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center mt-2">
            <?php foreach ($nowPlaying as $m) : ?>
                <div class="col">
                    <div class="banner-movie text-center">
                        <a href="/pages/movie/<?= $m['id_movie']; ?>">
                            <img src="/assets/img/<?= $m['img']; ?>" alt="">
                        </a>
                        <h5 class="card-title my-3"><?= $m['tittle']; ?></h5>
                        <!-- <div class="card-body">
                    </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Upcoming section -->
<div id="upcoming-section" class="pb-5"></div>
<section class="pt-4">
    <div class="container">
        <div class="section-tittle bg-light">
            <h3 class="ms-3 p-2">Upcoming</h3>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 d-flex justify-content-center mt-2">
            <?php foreach ($upComing as $m) : ?>
                <div class="col">
                    <div class="banner-movie text-center">
                        <a href="/pages/movie/<?= $m['id_movie']; ?>">
                            <img src="/assets/img/<?= $m['img']; ?>" alt="">
                        </a>
                        <h5 class="card-title my-3"><?= $m['tittle']; ?></h5>
                        <!-- <div class="card-body">
                    </div> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End section content -->
<?= $this->endSection(); ?>
