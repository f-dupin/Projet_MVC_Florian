<?php


namespace main\models;


class category
{
    private $id;
    private $category_name;

    public function getIdCategory() {
        return $this->id;
    }
    public function getCategoryName() {
        return $this->category_name;
    }

    public function setIdCategory($idCategory) {
        $this->id = $idCategory;
    }
    public function setCategoryName($category_name) {
        $this->category_name = $category_name;
    }
}