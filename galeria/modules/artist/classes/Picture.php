<?php

class Picture {

    private $id, $title, $file, $galleryId;

    function __construct($id = NULL, $title = NULL, $file = NULL, $galleryId = NULL) {
        $this->id = $id;
        $this->title = $title;
        $this->file = $file;
        $this->galleryId = $galleryId;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFile() {
        return $this->file;
    }

    public function getGalleryId() {
        return $this->galleryId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function setGalleryId($galleryId) {
        $this->galleryId = $galleryId;
    }

    public function set($param) {
        foreach ($this as $key => $value) {
            if (isset($param[$key])) {
                $this->$key = $param[$key];
            }
        }
    }

    function get() {
        $param = array();
        foreach ($this as $key => $value) {
            $param[$key] = $value;
        }
        return $param;
    }

    function getJSON() {
        $answer = '{';
        foreach ($this as $key => $value) {
            $answer .= '"' . $key . '":"' . $value . '",';
        }
        $answer = substr($answer, 0, -1);
        $answer .= '},';
        return $answer;
    }

}
