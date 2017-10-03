<?php

namespace MicroCMS\Domain;

class Portfolio
{
    /**
     * Portfolio id.
     *
     * @var integer
     */
    private $id;

    /**
     *Portfolio title.
     *
     * @var string
     */
    private $name;
    /**
     * Portfolio place.
     *
     * @var string
     */
    private $lieu;

    /**
     * Portfolio descriptif.
     *
     * @var string
     */
    private $descriptif;
    /**
     * Portfolio date.
     *
     * @var string
     */
    private $date;
    /**
     * Portfolio picture.
     *
     * @var string
     */
    private $img;

        /**
     * Portfolio thumb.
     *
     * @var string
     */
    private $thumb;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
        return $this;
    }

    public function getDescriptif() {
        return $this->descriptif;
    }

    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }
    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }
    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
        return $this;
    }

    public function getThumb() {
        return $this->thumb;
    }

    public function setThumb($thumb) {
        $this->thumb = $thumb;
        return $this;
    }
}
