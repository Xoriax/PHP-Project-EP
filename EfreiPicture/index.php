<?php

require_once 'model/Database.php';
require_once 'model/ImageModel.php';
require_once 'controller/HomeController.php';
require_once 'controller/ImagesController.php';
require_once 'controller/ContactController.php';
require_once 'controller/AddController.php';
require_once 'controller/Error404Controller.php';

$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

if (!file_exists("controller/{$controllerName}Controller.php")) {
    $controllerName = 'error404';
}

if ($controllerName == 'home') {
    $homeController = new HomeController();

    if ($action == 'index') {
        $homeController->index();
    } elseif ($action == 'detail' && isset($_GET['id'])) {
        $homeController->detail($_GET['id']);
    } else {
        $homeController->index();
    }
} elseif ($controllerName == 'images') {
    $imagesController = new ImagesController();

    if ($action == 'index') {
        $imagesController->index();
    } else {
        $imagesController->index();
    }
} elseif ($controllerName == 'contact') {
    $contactController = new ContactController();

    if ($action == 'index') {
        $contactController->index();
    } else {
        $contactController->index();
    }
} elseif ($controllerName == 'add') {
    $addController = new AddController();

    if ($action == 'index') {
        $addController->index();
    } elseif ($action == 'add') {
        $addController->add();
    } elseif ($action == 'processAdd') {
        $addController->processAdd();
    }
} else {
    $error404Controller = new Error404Controller();

    $error404Controller->index();
}

?>