<?php
class C_Mahasiswa extends CI_Controller{
     
     public function __construct(){
          parent::__construct();
          $this->load->model('M_Mahasiswa');
          $this->load->library('template');
     }

     public function display_mahasiswa(){
          $this->load->display('mahasiswa/V_Mahasiswa');
     }
     // public function utama(){
     //      $this->load->model('M_Mahasiswa');
     //      $data['mahasiswa'] = $this->M_Mahasiswa->getMahasiswa(3, 0);
     //      $this->template->display('mahasiswa/V_Mahasiswa', $data);
     // }

     // public function index(){
     //      $this->load->model('M_Mahasiswa');
     //      $data['mahasiswa'] = $this->M_Mahasiswa->get_data();
     //      $this->load->view('template/V_Header');
     //      $this->load->view('mahasiswa/V_Mahasiswa', $data);
     //      $this->load->view('template/V_Footer');
     // }

     public function insert(){
          $this->template->display('mahasiswa/V_TambahMahasiswa');
     }

     public function save(){
          $model = $this->load->model('M_Mahasiswa');

          $nim = $this->input->post('nim_mahasiswa');
          $nama = $this->input->post('nama_mahasiswa');
          $umur = $this->input->post('umur_mahasiswa');
          $alamat = $this->input->post('alamat_mahasiswa');
          $data = array(
               'nim' => $nim,
               'nama' => $nama,
               'umur' => $umur,
               'alamat' => $alamat
          );
          $model = $this->M_Mahasiswa->saveData($data);
          return redirect('C_Template/mahasiswa');
     }

     public function edit(){
          $this->load->view('template/V_Header');
          $this->load->view('mahasiswa/V_Update');
          $this->load->view('template/V_Footer');
     }
     public function update($id){
          $this->load->model('M_Mahasiswa');
          $this->input->post('nim_mahasiswa');
          $this->input->post('nama_mahasiswa');
          $this->input->post('umur_mahasiswa');
          $this->input->post('alamat_mahasiswa');

          $update = $this->M_Mahasiswa->update_data($id);
          $data['update'] = $update;
          $this->template->display('mahasiswa/V_Update');
     }
     // public function update(){
     //      $this->load->view('template/V_Header');
     //      $this->load->view('mahasiswa/V_Update');
     //      $this->load->view('template/V_Footer');
     // }
     
     public function search(){
          $keyword=$this->input->post('keyword');
          $data['mahasiswa']=$this->M_Mahasiswa->get_keyword($keyword);
          $this->template->display('mahasiswa/V_Mahasiswa', $data);
     }

     public function detail($id){
          $this->load->model('M_Mahasiswa');
          $detail = $this->M_Mahasiswa->detail_data($id);
          $data['detail'] = $detail;
          $this->template->display('mahasiswa/V_Detail',$data);
     }
}
