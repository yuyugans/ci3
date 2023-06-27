<?php
class M_login extends CI_Model{
   public function cek_login($select,$table,$where){
         $this->db->select($select);
         $this->db->from($table);
         $this->db->where($where);
      return $this->db->get();
   }
   public function cek_login_pgw($select,$table,$where){
      $this->db->select($select);
      $this->db->from($table);
      $this->db->where($where);
   return $this->db->get();
}
}
?>
