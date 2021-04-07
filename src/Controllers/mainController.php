<?php

    namespace main\Controllers;

    use main\Validator;
    use main\models\mainManager;
    use main\models\postManager;

class mainController
{
    private $manager;
    private $validator;
    private $post;

    public function __construct() {
        $this->manager = new mainManager();
        $this->validator = new Validator();
        $this->post = new postManager();
    }

    public function index() {
        $MostViews = $this->post->getMostView();
        $HotNew = $this->post->getHotNews();
        require VIEWS . 'Page/index.php';
    }
}