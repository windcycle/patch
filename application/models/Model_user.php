<?php
defined("BASEPATH") OR exit("No direct script allowed access");
class Model_user extends CI_Model{
    public $table = 'user';
    public $id = 'id_user';

    public function tampil(){
        $data = $this->db->get($this->table);
        if($data->num_rows() > 0){
            return $data->result();
        }else{
            return array();
        }
    }
    public function cek_login($table,$where){
        return $this->db->get_where($this->table,$where);
    }
    public function register($data){
        return $this->db->insert($this->table,$data);
    }
}
?>