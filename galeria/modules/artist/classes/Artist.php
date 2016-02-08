<?php

class Artist {

    private $id, $name, $biography, $avatar, $email;

    function __construct($id = NULL, $name = NULL, $biography = NULL, $avatar = NULL, $email = NULL) {
        $this->id = $id;
        $this->name = $name;
        $this->biography = $biography;
        $this->avatar = $avatar;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getBiography() {
        return $this->biography;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setBiography($biography) {
        $this->biography = $biography;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function setEmail($email) {
        $this->email = $email;
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
