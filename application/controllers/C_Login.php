<?php
class C_Login extends CI_Controller{

     function __construct(){
          parent::__construct();
          $this->load->model('M_Login');
     }

     function index(){
          $this->load->view('login/V_Login');
     }

     function aksi_login(){
          $username=$this->input->post('username');
          $password=$this->input->post('password');
          $data=array(
               'username'=>$username,
               'password'=>md5($password)
          );
          $cek = $this->M_Login->cek_login("tb_login",$data)->num_rows();
          if($cek>0){
               $data_session = array(
                    'nama'=>$username,
                    'status'=>"login"
               );

               $this->session->set_userdata($data_session);
               redirect(base_url("C_template"));
          }else{
               echo "Username dan Password salah!";
          }
     }
     function logout(){
          $this->session->sess_destroy();
          redirect(base_url('C_Login'));
     }
     // function index(){
     //      if($this->input->post()){
     //           if($this->M_Login->cek_login()) refirect(site_url('C_Login'));

     //           $this->load->view('login/V_Login');
     //      }
          
     // }
}