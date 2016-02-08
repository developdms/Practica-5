<?php

class ManagerGallery {
    
    private $db = NULL;
    private $table = 'Galler';

    function __construct($db) {
        $this->db = $db;
    }

    function get($id, $idArtist = NULL) {
        if ($this->db !== NULL) {
            $params = array();
            if ($idArtist != NULL) {
                $params['artistId'] = $idArtist;
            }else{
                $params['id'] = $email;
            }
            $gallery = $this->selec($params);
            return $gallery;
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
            $gallery = new Gallery();
            $gallery->set($this->db->getRow());
            return $gallery;
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

    function erase(Gallery $param) {
        if ($this->db !== NULL) {
            return $this->delete($param->getEmail());
        }
    }

    function set(Gallery $param, $pkcode = NULL) {
        $parametros = $param->get();
        $parametrosWhere = array();
        if ($pkcode !== NULL) {
            $parametrosWhere["id"] = $pkcode;
        } else {
            $parametrosWhere["id"] = $param->getEmail();
        }
        return $this->db->update($this->table, $parametros, $parametrosWhere);
    }

    function insert(Gallery $param) {
        $parametros = $param->get();
        return $this->db->insert($this->table, $parametros, false);
    }

    function getList($params = NULL, $proyection = '*', $order = '1', $limit = '') {
        if ($this->db != NULL) {
            $this->db->read($this->table, $proyection, $params);
            $r = array();
            while ($param = $this->db->getRow()) {
                $gallery = new Gallery();
                $gallery->set($param);
                $r[] = $gallery;
            }
            return $r;
        }
        return NULL;
    }
    
}
