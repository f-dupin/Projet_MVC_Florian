<?php


namespace main\models;


class images
{
    private $id;
    private $name;
    private $image;
    private $thumb;
    private $size;

    public function getIdImage() {
        return $this->id;
    }
    public function getNameImage() {
        return $this->name;
    }
    public function GetImage() {
        return $this->image;
    }
    public function GetThumbImage() {
        return $this->thumb;
    }
    public function getSizeImage() {
        return $this->size;
    }

    public function setIdImage($idImage) {
        $this->id = $idImage;
    }
    public function setNameImage($nameImage) {
        $this->name = $nameImage;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function setThumbImage($thumbImage) {
        $this->thumb = $thumbImage;
    }
    public function setSizeImage($sizeImage) {
        $this->size = $sizeImage;
    }

}