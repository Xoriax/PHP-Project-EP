<div class="form-container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h2 class="text-center mb-5">Contactez-nous</h2>

            <form action="?controller=error404" method="post">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" class="form-control form-control-lg form-control-extended" id="name" name="name"
                        required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control form-control-lg form-control-extended" id="email"
                        name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control form-control-lg form-control-extended" id="message" name="message"
                        rows="6" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                    <a href="?controller=home&action=index" class="btn btn-secondary btn-lg ml-2">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>