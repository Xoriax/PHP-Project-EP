<?php

class ImagesController
{
    public function index()
    {
        $imageModel = new ImageModel();
        $images = $imageModel->getAllImages();

        require_once 'view/header.php';
        require_once 'view/images.php';
        require_once 'view/footer.php';
    }
}

?>