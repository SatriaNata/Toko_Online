<?php
class Controller extends CI_Controller{
     public function index(){
          $this->load->view('controller/index');
     }

     public function tabel(){
          $this->load->view('controller/tabel');
     }
}