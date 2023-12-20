<?php

class ContactController
{
    public function index()
    {
        require_once 'view/header.php';
        require_once 'view/contact.php';
        require_once 'view/footer.php';
    }

    public function submit()
    {
        header("Location: ?controller=home&action=index");
        exit();
    }
}
