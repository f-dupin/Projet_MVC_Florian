<?php


namespace main\models;


class post
{
    private $ID;
    private $header;
    private $content;
    private $timestamp;
    private $user_id;
    private $file_id;
    private $category_id;
    private $view;
    private $share;
    private $number_comments;

    private $name;
    private $image;
    private $thumb;
    private $size;

    private $firstname;
    private $lastname;



    public function getId() {
        return $this->ID;
    }
    public function getHeader() {
        return $this->header;
    }
    public function getContent() {
        return $this->content;
    }
    public function getTimestamp() {
        return $this->timestamp;
    }
    public function getUserId() {
        return $this->user_id;
    }
    public function getFileId() {
        return $this->file_id;
    }
    public function getCategoryId() {
        return $this->category_id;
    }
    public function getView() {
        return $this->view;
    }
    public function getShare() {
        return $this->share;
    }
    public function getComments() {
        return $this->number_comments;
    }

    public function getNames() {
        return $this->name;
    }
    public function getImage() {
        return $this->image;
    }
    public function getThumb() {
        return $this->thumb;
    }
    public function getSize() {
        return $this->size;
    }

    public function getFirstName() {
        return $this->firstname;
    }
    public function getLastName() {
        return $this->lastname;
    }

    public function setId($id) {
        $this->ID = $id;
    }
    public function setHeader($header) {
        $this->header = $header;
    }
    public function setContents($content) {
        $this->content = $content;
    }
    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
    public function setFileId($file_id) {
        $this->file_id = $file_id;
    }
    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }
    public function setView($view) {
        $this->view = $view;
    }
    public function setShare($share) {
        $this->share = $share;
    }
    public function setComments($comments) {
        $this->number_comments = $comments;
    }

    public function setNames($names) {
        $this->name = $names;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function setThumb($thumb) {
        $this->thumb = $thumb;
    }
    public function setSize($size) {
        $this->size = $size;
    }
    public function setFirstName($firstName) {
        $this->firstname = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastname = $lastName;
    }
}