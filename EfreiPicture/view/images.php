<div class="container mt-3">
    <div class="row">
        <?php foreach ($images as $image) { ?>
            <div class="col-md-4 mb-3">
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
    </div>
</div>