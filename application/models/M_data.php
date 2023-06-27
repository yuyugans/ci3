<?php
 class M_data extends CI_Model{

  public function ambil_data($table){
    return $this->db->get($table)->result();
  }
  public function save_data($tabel, $data){
    $this->db->insert($tabel,$data);
  }
  public function detail_data($where,$table){
    $this->db->where($where);
  return $this->db->get($table)->row();
  }
  public function get_foto($kode_barang){
    $this->db->select('Foto');
    $this->db->from('tb_produk');
    $this->db->where('Kode_Barang', $kode_barang);
  return $this->db->get()->row();
  }
  public function hapus_data($kode_barang,$tabel){
    $this->db->where('Kode_Barang', $kode_barang);
    $this->db->delete($tabel);
  }
  
  public function ambil_data_row($kode_barang, $table){
    $this->db->where('Kode_Barang', $kode_barang);
  return $this->db->get($table)->row();
  }
  public function update_data($kode_barang, $table,$data){
    $this->db->where('Kode_Barang', $kode_barang);
    $this->db->update($table,$data);
  }
 }
?>