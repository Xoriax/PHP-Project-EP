<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $active = true;
        foreach ($images as $key => $image) {
            ?>
            <div class="carousel-item <?= $active ? 'active' : ''; ?>">
                <img src="assets/<?= $image['image']; ?>" class="d-block w-100" alt="<?= $image['titre']; ?>"
                    style="max-height: 700px;">
            </div>
            <?php
            $active = false;
            if ($key === 4) {
                break;
            }
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>

<hr>

<div class="container mt-3">
    <div class="row">
        <?php foreach ($images as $key => $image) { ?>
            <?php if ($key >= 3 && $key < 9) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/<?= $image['image']; ?>" class="card-img-top" alt="<?= $image['titre']; ?>">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $image['titre']; ?>
                            </h5>
                            <p class="card-text">
                                <?= $image['prix']; ?> €
                            </p>
                            <a href="?controller=home&action=detail&id=<?= $image['id']; ?>" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>