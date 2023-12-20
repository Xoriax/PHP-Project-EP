<div class="carddetail">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="assets//<?= $image['image']; ?>" class="card-img" alt="<?= $image['titre']; ?>">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $image['titre']; ?>
                </h5>
                <p class="card-text">
                    <?= $image['description']; ?>
                </p>
                <p class="card-text"><strong>Prix:</strong>
                    <?= $image['prix']; ?> €
                </p>
                <a href="?controller=error404" class="btn btn-primary">Commander</a>
                <a href="?controller=images&action=index" class="btn btn-secondary">Annuler</a>
            </div>
        </div>
    </div>
</div>