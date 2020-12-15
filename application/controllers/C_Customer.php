<?php
class C_Customer extends CI_Controller{
     public function __construct(){
          parent::__construct();
          $this->load->model('M_Shopping');
          $this->load->library('template');
          $this->load->library('session');
          $this->load->library('cart');
     }
     public function pembayaran(){
          $this->template->display('pembayaran/V_Pembayaran');
     }
     public function data_pengirim(){
          $model = $this->load->model('M_Customer');
          
          
     }
}