<div class="container mt-3 d-flex align-items-center justify-content-center vh-100">
    <div class="row">
        <div class="col-md-6 mx-auto vw-100">
            <h2 class="text-center mb-4">Ajouter une image</h2>

            <form action="?controller=add&action=processAdd" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>

                <div class="form-group">
                    <label for="image">Sélectionnez une image :</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
                    <a href="?controller=manage" class="btn btn-secondary btn-lg ml-2">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>