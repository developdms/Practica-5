<?php

/**
 * Description of ManagerArtist
 *
 * @author MARTIN
 */
class ManagerArtist {

    private $db = NULL;
    private $table = 'Artist';

    function __construct($db) {
        $this->db = $db;
    }

    function get($id, $email = NULL) {
        if ($this->db !== NULL) {
            $params = array();
            if ($email != NULL) {
                $params['email'] = $email;
            }else{
                $params['id'] = $email;
            }
            $artist = $this->selec($params);
            return $artist;
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
            $artist = new Artist();
            $artist->set($this->db->getRow());
            return $artist;
        }
        return NULL;
    }

    function delete($id) {
        if ($this->db !== NULL) {
            $params['id'] = $id;
            return $this->db->erase($this->table, $params);
        }
        return false;
    }

    function erase(Artist $param) {
        if ($this->db !== NULL) {
            return $this->delete($param->getEmail());
        }
    }

    function set(Artist $param, $pkcode = NULL) {
        $parametros = $param->get();
        $parametrosWhere = array();
        if ($pkcode !== NULL) {
            $parametrosWhere["id"] = $pkcode;
        } else {
            $parametrosWhere["id"] = $param->getEmail();
        }
        return $this->db->update($this->table, $parametros, $parametrosWhere);
    }

    function insert(Artist $param) {
        $parametros = $param->get();
        return $this->db->insert($this->table, $parametros, false);
    }

    function getList($params = NULL, $proyection = '*', $order = '1', $limit = '') {
        if ($this->db != NULL) {
            $this->db->read($this->table, $proyection, $params);
            $r = array();
            while ($param = $this->db->getRow()) {
                $artist = new Artist();
                $artist->set($param);
                $r[] = $artist;
            }
            return $r;
        }
        return NULL;
    }

}
