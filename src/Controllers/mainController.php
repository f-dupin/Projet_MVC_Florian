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
        $categories = $this->post->getAllCategory();
        $lesPosts = array();
        foreach ($categories AS $category) {
            foreach ($category AS $lacategory) {
                $tableau = $this->post->getAllPostByType($lacategory->getIdCategory());
                array_push($lesPosts, $tableau );
            }
        }
        $MostViews = $this->post->getMostView();
        $HotNew = $this->post->getHotNews();

        $mostPopularPost = $this->post->getAllMostPopularPost();
        $MostCommentedPost = $this->post->getAllMostCommentedPost();

        $imageFooter = $this->post->getImageFooter();
        require VIEWS . 'Page/index.php';
    }
}