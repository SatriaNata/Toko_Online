<?php
class M_Login extends CI_Model{
     // private $_table = "tb_login";
     function cek_login($table,$data){		
		return $this->db->query("SELECT * FROM tb_login WHERE username = '".$data['username']."' AND password = '".$data['password']."'");
	}	

     // public function cek_login(){
     //      $post=$this->input->post();

     //      //cari data berdasarkan username
     //      $this->db->where('username',$post["username"]);
     //      $user = $this->db->get($this->_table)->row();

     //      //jika user terdaftar
     //      if($user){
     //           $isPasswordTrue = password_verify($post["password"], $user->password);
     //           if($isPasswordTrue){
     //                $this->session->set_userdata(['user_logged'=>$user]);
     //                $this->_updateLastLogin($user->id);
     //                return true;
     //           }
     //      }
     //      return false;
          
     // }
     // public function isNotLogin(){
     //      return $this->session->userdata('user_logged')==null;
     // }
     // private function _updateLastLogin($id){
     //      $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id = {$id}";
     //      $this->db->query($sql);
     // }
}