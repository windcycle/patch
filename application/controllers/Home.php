<?php
    if (defined('BASEPATH') OR exit('No direct script access allowed'));
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_store");
    }
    public function index(){
        $data['check'] = $this->Model_store->takeData();
        //var_dump($data);
        $this->load->view('dvwa/data',$data);
    }    
}
?>