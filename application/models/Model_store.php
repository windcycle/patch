<?php
    if (defined('BASEPATH') OR exit('No direct script access allowed'));
class Model_store extends CI_Model{
    public $table = 'store';
    public $id = 'store_id';

    public function takeData(){
        $data = $this->db->get($this->table);
        if($data->num_rows() > 0){
            return $data->result();
        }else{
            return $data->array();
        }
    }
    public function addData($tambah){
        $add = $this->db->insert($this->table,$tambah);
        return $add;
    }

}
?>