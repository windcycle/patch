<?php
defined("BASEPATH") OR exit("No direct script allowed access");
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_user");
    }
    public function index(){
        /*$data['user'] = $this->Model_user->tampil();
        var_dump($data);*/
        $this->load->view('user/login');
    }
    public function auth_in_process(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");

        #where username and password is array;
        $where=array(
            'username'=>$username,
            'password'=>$password
        );

        $check= $this->Model_user->cek_login('user',$where)->num_rows();

        if($check>0){

            $data_session=array(
                'name'=>$username,
                'status'=>'login'
            );

            $this->session->set_userdata($data_session);
            redirect(base_url('login/main'));
        }else{
            echo "Error username dan password tidak ditemukan";
        }
    }
    public function register(){
        $this->load->view("user/register");
    }
    public function regisdata(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        $email=$this->input->post("email");

        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email
        );
        $this->Model_user->register($data);
        redirect(base_url().'login');
    }
    public function main(){
        $this->load->view("user/main");
    }
}
?>