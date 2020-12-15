<?php
class M_Shopping extends CI_Model{
     public function get_data(){
          return $this->db->get('tb_shopping')->result_array();
     }
     public function find($id){
          $result = $this->db ->where('id',$id)
                              ->limit(1)
                              ->get('tb_shopping');
          if($result->num_rows()>0){
               return $result->row();
          }else{
               return array();
          }
     }
     public function data_keranjang(){
          $query = $this->db->query("select * from tb_shopping ");
          return $query->result();
     }
     function get_jumlah_data()
     {
          return $this->db->get('tb_shopping')->num_rows();
     }
     function data($number, $offset)
     {
        $query = $this->db->query("select * from barang order by id limit $number OFFSET $offset");
          return $query->result();
     }
     function getData()
     {
        $query = $this->db->query("select * from tb_shopping ");
          return $query->result();
     }
     function cari_id($where)
     {
        $data = $this->db->query("SELECT * from tb_shopping where id = $where ");
          return $data;
     }
}