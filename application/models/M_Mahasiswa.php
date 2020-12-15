<?php
class M_Mahasiswa extends CI_Model{
     // public function __construct()
     // {
     //      $this->load->database();
     // }
     public function get_data(){
          return $this->db->get('tb_mhs')->result_array();
          // $query = $this->db->get('tb_mhs');
          // return $query->result_array();
     }
     public function saveData($data){
          $nim = $data['nim'];
          $nama = $data['nama'];
          $umur = $data['umur'];
          $alamat = $data['alamat'];
          $query = $this->db->query("INSERT INTO tb_mhs(nim,nama,umur,alamat) VALUES ('$nim','$nama','$umur','$alamat')");
          return $query;
     }
     public function get_keyword($keyword){
          $this->db->like('nama',$keyword);
          $query = $this->db->get('tb_mhs');
          return $query->result_array();
     }

     public function detail_data($id){
          $query = $this->db->query("SELECT * from tb_mhs where id=$id")->row();
          return $query;
     }

     public function update_data($id){
          $nim = $id['nim_mahasiswa'];
          $nama = $id['nama_mahasiswa'];
          $umur = $id['umur_mahasiswa'];
          $alamat = $id['alamat_mahasiswa'];
          $query = $this->db->query("UPDATE tb_mhs SET nim='$nim',nama='$nama',umur='$umur',alamat='$alamat' WHERE id=$id");
          return $query;
          // $query="UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mahasiswa='$id_mahasiswa'";
     }

     public function getMahasiswa($limit,$start){
          return $this->db->get('tb_mhs',$limit,$start)->result_array();
     }

     public function countMahasiswa(){
          return $this->db->get('tb_mhs')->num_rows();
     }
}