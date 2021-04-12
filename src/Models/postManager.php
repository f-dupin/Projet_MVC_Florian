<?php


namespace main\models;


class postManager
{
    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getMostView()
    {
        $stmt = $this->bdd->prepare('SELECT number_comments, firstname, lastname, posts.id AS ID, header, content, timestamp , user_id, posts.file_id, view, share , name, image, thumb, size FROM posts INNER JOIN file ON posts.file_id = file.id INNER JOIN user ON user.id = posts.user_id ORDER BY view DESC LIMIT 2');
        $stmt->execute();

        $lesPosts = $stmt->fetchAll(\PDO::FETCH_CLASS,"main\models\post");

        $stmt = $this->bdd->prepare('SELECT * FROM posts_category INNER JOIN category ON category.id = posts_category.id_category WHERE id_post = '.$lesPosts[0]->getId());
        $stmt->execute();

        $lesCategory = $stmt->fetchAll(\PDO::FETCH_CLASS,"main\models\category");
        return array($lesPosts, $lesCategory);
    }

    public function getHotNews()
    {
        $stmt = $this->bdd->prepare('SELECT number_comments,firstname, lastname, posts.id AS ID, header, content, timestamp , user_id, posts.file_id, view, share , name, image, thumb, size FROM posts INNER JOIN file ON posts.file_id = file.id INNER JOIN user ON user.id = posts.user_id ORDER BY view DESC LIMIT 1');
        $stmt->execute();

        $lesPosts = $stmt->fetchAll(\PDO::FETCH_CLASS,"main\models\post");

        $stmt = $this->bdd->prepare('SELECT * FROM posts_category INNER JOIN category ON category.id = posts_category.id_category WHERE id_post = '.$lesPosts[0]->getId());
        $stmt->execute();

        $lesCategory = $stmt->fetchAll(\PDO::FETCH_CLASS,"main\models\category");
        return array($lesPosts, $lesCategory);
    }
    public function getAllMobilePost()
    {
        $stmt = $this->bdd->prepare('SELECT posts.id, header, content, timestamp, posts.user_id, posts.file_id, view, share, number_comments, name, image, thumb, size, firstname,lastname FROM posts_category INNER JOIN posts ON posts_category.id_post = posts.id INNER JOIN file ON posts.file_id = file.id INNER JOIN user ON user.id = posts.user_id WHERE id_category = 1');
        $stmt->execute();

        $mobilePost = $stmt->fetchAll(\PDO::FETCH_CLASS,"main\models\post");
        return $mobilePost;
    }
}