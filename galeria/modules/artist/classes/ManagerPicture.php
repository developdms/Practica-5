<?php

class ManagerPicture {

    private $db = NULL;
    private $table = 'Picture';

    function __construct($db) {
        $this->db = $db;
    }

    function get($id, $idGallery = NULL) {
        if ($this->db !== NULL) {
            $params = array();
            if ($idArtist != NULL) {
                $params['galleryId'] = $idArtist;
            } else {
                $params['id'] = $email;
            }
            $picture = $this->selec($params);
            return $picture;
        }
        return NULL;
    }

    function selec($params = NULL, $condition = '1=1') {
        if ($this->db !== NULL) {
            if ($params !== NULL) {
                foreach ($params as $key => $value) {
                    $condition .= " AND $key=:$key";
                }
            }
            $this->db->select($this->table, '*', $condition, $params);
            $picture = new Picture();
            $picture->set($this->db->getRow());
            return $picture;
        }
        return NULL;
    }

    function delete($Code) {
        if ($this->db !== NULL) {
            $params['id'] = $Code;
            return $this->db->erase($this->table, $params);
        }
        return false;
    }

    function erase(Picture $param) {
        if ($this->db !== NULL) {
            return $this->delete($param->getEmail());
        }
    }

    function set(Picture $param, $pkcode = NULL) {
        $parametros = $param->get();
        $parametrosWhere = array();
        if ($pkcode !== NULL) {
            $parametrosWhere["id"] = $pkcode;
        } else {
            $parametrosWhere["id"] = $param->getId();
        }
        return $this->db->update($this->table, $parametros, $parametrosWhere);
    }

    function insert(Picture $param) {
        $parametros = $param->get();
        return $this->db->insert($this->table, $parametros, false);
    }

    function getList($params = NULL, $proyection = '*', $order = '1', $limit = '') {
        if ($this->db != NULL) {
            $this->db->read($this->table, $proyection, $params);
            $r = array();
            while ($param = $this->db->getRow()) {
                $picture = new Picture();
                $picture->set($param);
                $r[] = $picture;
            }
            return $r;
        }
        return NULL;
    }

}
