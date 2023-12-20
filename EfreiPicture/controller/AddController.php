<?php
class AddController
{
    public function index()
    {
        require_once 'view/header.php';
        require_once 'view/add.php';
        require_once 'view/footer.php';
    }

    public function add()
    {
        require_once 'view/header.php';
        require_once 'view/add.php';
        require_once 'view/footer.php';
    }

    public function processAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $imageModel = new ImageModel();

            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'images/';
                $uploadFile = $uploadDir . basename($_FILES['image']['name']);

                move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);

                $data = [
                    'title' => $title,
                    'description' => $description,
                    'price' => $price,
                    'imagePath' => $uploadFile,
                ];

                $imageModel->add($data);
            }
        }

        header("Location: ?controller=images");
        exit();
    }
}

?>