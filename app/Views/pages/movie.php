<?= $this->extend('layout/template'); ?>
<!-- Content here -->
<?= $this->section('content'); ?>
<section class="container-fluid movie-trailer">
    <?php foreach ($movie as $m) : ?>
        <div class="row trailer p-4">
            <div class="col-1"></div>
            <div class=" col-4 banner-movie-detail text-center">
                <img src="/assets/img/<?= $m['img']; ?>" alt="">
            </div>
            <div class=" col-6 embedded-trailer">
                <iframe src="<?= $m['embedded']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-1"></div>
        </div>
    <?php endforeach; ?>
</section>
<div class="container movie-detail mt-4">
    <div class="row">
        <?php foreach ($movie as $m) : ?>
            <div class="col-4">
                <div class="card d-flex justify-content-center" style="width: 18rem;">
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Tittle : <?= $m['tittle']; ?></li>
                            <li class="list-group-item">Genre : <?= $m['genre']; ?></li>
                            <li class="list-group-item">Language : <?= $m['language']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8 sinopsis">
                <p><?= $m['sinopsis']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- End section content -->
<?= $this->endSection(); ?>