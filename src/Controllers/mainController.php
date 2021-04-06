<?php

    namespace main\Controllers;

    use main\Validator;
    use main\models\mainManager;

class mainController
{
    private $manager;
    private $validator;

    public function __construct() {
        $this->manager = new mainManager();
        $this->validator = new Validator();
    }

    public function index() {
        require VIEWS . 'Page/index.php';
    }
}