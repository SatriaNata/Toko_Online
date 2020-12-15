<?php
class M_Customer extends CI_Model{
     public function get_data(){
          return $this->db->get('tb_customer');
     }
     public function save_data(){
          $query = $this->db->query("INSERT INTO tb_customer('') VALUES('')");
     }
}