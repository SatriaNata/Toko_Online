<?php 
class C_Shopping extends CI_Controller{
     public function __construct(){
          parent::__construct();
          $this->load->model('M_Shopping');
          $this->load->library('template');
          $this->load->library('session');
          $this->load->library('cart');
     }
     public function index(){
          $this->load->model('M_Shopping');
          $data['shopping'] = $this->M_Shopping->get_data();
          $this->template->display('shopping/V_Display',$data);
     }
     
     public function jumlah_barang()
     {
          $id = $this->input->post('id');
          $req = $this->input->post('req');
          $data_barang = array(
               $id => $req,
          );
          $this->session->set_userdata($data_barang);
          redirect('C_Shopping/Keranjang');
     }
     public function data_barang($id)
     {
          $where = $id;
          $data['shopping'] = $this->M_Shopping->cari_id($where, 'shopping')->result();
          $this->template->display('shopping/V_Jumlah_Barang', $data);
     }
     public function Keranjang()
     {
          $data['shopping'] = $this->M_Shopping->getData();
          $this->template->display('shopping/V_Keranjang',$data);
     }

     // public function tambah_ke_keranjang($id){
     //      $barang = $this->M_Shopping->find($id);
     //      $data = array(
     //           'id'      => $barang->id,
     //           'qty'     => 1,
     //           'price'   => $barang->harga_barang,
     //           'name'    => $barang->nama_barang,
     //           'gambar'  => $barang->gambar_barang
     // );
     // $this->cart->insert($data);
     // redirect('C_Shopping/index');
     // }
     // public function detail_keranjang(){
     //      $this->load->model('M_Shopping');
     //      $this->template->display('shopping/V_Keranjang');
     // }

     // public function Masukan_Keranjang($id){
     //      $barang = $this->M_Shopping->find($id);
     //      $data = array(
     //           'id'      => $barang->id,
     //           'qty'     => 1,
     //           'price'   => $barang->harga_barang,
     //           'name'    => $barang->nama_barang,
     //           'gambar'  => $barang->gambar_barang
     //      );
     //      $this->session->set_userdata($data);
     //      redirect('C_Shopping/keranjang');
     // }
     // public function keranjang()
     // {
     //      $data['shopping'] = $this->M_Shopping->data_keranjang();
     //      $this->template->display('shopping/V_Keranjang',$data);
     // }

     // public function detail($id){
     //      $this->load->model('M_Mahasiswa');
     //      $detail = $this->M_Mahasiswa->detail_data($id);
     //      $data['detail'] = $detail;
     //      $this->template->display('mahasiswa/V_Detail',$data);
     // }
}