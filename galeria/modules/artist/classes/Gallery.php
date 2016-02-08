<?php

class Gallery {
    private $id, $title, $subtitle, $artistId;

    function __construct($id = NULL, $title = NULL, $subtitle = NULL, $artistId = NULL) {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->artistId = $artistId;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getSubtitle() {
        return $this->subtitle;
    }

    public function getArtistId() {
        return $this->artistId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setSubtitle($subtitle) {
        $this->subtitle = $subtitle;
    }

    public function setArtistId($artistId) {
        $this->artistId = $artistId;
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
            $answer .= '"'.$key.'":"'.$value.'",';
        }
        $answer = substr($answer, 0, -1);
        $answer .= '},';
        return $answer;
    }
}
