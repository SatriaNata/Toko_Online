<?php
class C_Template extends CI_Controller{
     public function __construct() {
          parent::__construct();
          $this->load->library('template');
          if($this->session->userdata('status') != "login"){
               redirect(base_url("C_login"));
          }
     }
     public function index(){
          $this->template->display('berita/V_Berita');
     }
     // public function index(){
     //      $this->template->display('template/V_Home');
     // }

     // public function berita(){
     //      $this->template->display('template/V_Berita');
     // }

     // public function mahasiswa(){
     //      // $this->load->controller('C_Mahasiswa','utama');
     //      // $this->invoice_controller->test();
          
     //      //Pagination
     //      $this->load->library('pagination');

     //      //config
     //      $config['base_url']= 'http://localhost/CodeIgniter/C_Template/mahasiswa/mahasiswa';
     //      $config['total_rows'] = $this->M_Mahasiswa->countMahasiswa();
     //      // var_dump($config['total_rows']);die;
     //      $config['per_page'] = 3;
          
     //      //style
     //      $config['full_tag_open'] = '<nav"><ul class="pagination">';
     //      $config['full_tag_close'] = '</ul></nav>';

     //      $config['first_link'] = 'First';
     //      $config['first_tag_open'] = '<li class="page-item">';
     //      $config['first_tag_close'] = '</li>';

     //      $config['last_link'] = 'Last';
     //      $config['last_tag_open'] = '<li class="page-item">';
     //      $config['last_tag_close'] = '</li>';

     //      $config['next_link'] = '&raquo';
     //      $config['next_tag_open'] = '<li class="page-item">';
     //      $config['next_tag_close'] = '</li>';

     //      $config['prev_link'] = '&laquo';
     //      $config['prev_tag_open'] = '<li class="page-item">';
     //      $config['prev_tag_close'] = '</li>';

     //      $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
     //      $config['cur_tag_close'] = '</a></li>';

     //      $config['num_tag_open'] = '<li class="page-item">';
     //      $config['num_tag_close'] = '</li>';

     //      $config['attributes'] = array('class' => 'page-link');

     //      //inisiasi
     //      $this->pagination->initialize($config);



     //      $data['start'] = $this->uri->segment(4);

     //      $this->load->model('M_Mahasiswa');
     //      $data['mahasiswa'] = $this->M_Mahasiswa->getMahasiswa($config['per_page'], $data['start']);
     //      $this->template->display('mahasiswa/V_Mahasiswa', $data);
     // }
}