<?php

class HomeController
{
    public function index()
    {
        $imageModel = new ImageModel();
        $images = $imageModel->getAllImages();

        require_once 'view/header.php';
        require_once 'view/home.php';
        require_once 'view/footer.php';
    }

    public function detail($imageId)
    {
        $imageModel = new ImageModel();
        $image = $imageModel->getImageById($imageId);

        require_once 'view/header.php';
        require_once 'view/detail.php';
        require_once 'view/footer.php';
    }
}

?>