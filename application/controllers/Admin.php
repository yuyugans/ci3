<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	
	public function Halamanadmin(){
		$this->load->view('template_adm/header');
		$this->load->view('template_adm/sidebar');
		$this->load->view('template_adm/Halamanadmin');
		$this->load->view('template_adm/footer');

	}

		public function Halamanpgw(){
		$this->load->view('template_pgw/header');
		$this->load->view('template_pgw/sidebar');
		$this->load->view('template_pgw/Halamanpgw');
		$this->load->view('template_pgw/footer');

	}

	//masuk halaman loin admin
	public function login_admin(){
		$this->load->view('V_login');
	}
	//masuk halaman login pegawai
	public function login_pegawai(){
		$this->load->view('V_login_pgw');
	}
	
	public  function sesi_admin(){
		if ($this->session->userdata('status_login')!='admin'){
			redirect(base_url());
		}
	}

	public function sesi_pegawai(){
		if ($this->session->userdata('status_login')!= 'pegawai'){
			redirect(base_url("index.php/Admin/login_pgw"));
		}
	}

	//ini masuk halaman awal
	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('V_hal');
	}

	//untuk masuk halaman login pegawai
	public function login_pgw(){
		$this->session->sess_destroy();
		$this->load->view('V_login_pgw');
	}

	//fungsi untuk memvalidasi login admin	
	public function validasi_admin()
	{
		$user = $this->input->post('USER');
		$pass = $this->input->post('PASS');
		$role = 'admin';
		$select ='role';
		$table = 'tb_user';
		$where = array('username' => $user, 'pass' => $pass, 'role' =>$role);
		$cek = $this->M_login->cek_login($select, $table, $where)->num_rows();

		if ($cek > 0) {
			$data_session = array('user_login' => $username, 'status_login' => $role);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/Admin/dashboard"));
		} else {
			$this->load->view('V_login');
		}
	}
//Ziran!!
	public function validasi_pgw(){
		//fungsi ini untuk memvalidasi pegawai yang login
		$user = $this->input->post('USER');
		$pass = $this->input->post('PASS');
		$role = 'pegawai';
		$select ='role';
		$table = 'tb_user';
		$where = array('username' => $user, 'pass' => $pass, 'role' =>$role);
		$cek = $this->M_login->cek_login_pgw($select, $table, $where)->num_rows();

		if ($cek > 0) {
			$data_session = array('user_login' => $username, 'status_login' => $role);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/Admin/dashboard_pgw"));
		} else {
			$this->load->view('V_login_pgw');
		}
	}
	//fungsi  dashboard admin ini sering di panggil
	public function dashboard()
	{
		$this->sesi_admin();
		$table = 'TB_Produk';
		$data['produk'] = $this->M_data->ambil_data($table);

		$this->load->view('V_dashboard', $data);
	}

	//fungsi masuk ke dashboard pegawai
	public function dashboard_pgw()
	{
		$this->sesi_pegawai();
		$table = 'TB_Produk';
		$data['produk'] = $this->M_data->ambil_data($table);
		$this->load->view('V_dashboard_pgw', $data);
	}

	//fungsi menyimpan di panggil button submit di v tambah produk
	public function simpan_produk()
	{
		$this->sesi_admin();
		$kode_barang = $this->input->post('kode');
		$nama_barang = $this->input->post('nama');
		$harga_barang = $this->input->post('harga');
		$stok_barang = $this->input->post('stok');

		$config["upload_path"] = "./foto/";
		$config["allowed_types"] = "jpg|png|gif|jpeg";
		$config["max_size"] = 7000; // max 7 MB
		$this->load->library("upload", $config);
		if ($this->upload->do_upload("foto")) {
			$foto = $this->upload->data("file_name");
		} else {
			echo "Upload Gagal";
			$foto = "no_image.png";
		}
		$data = array(
			'Kode_Barang' => $kode_barang,
			'Nama_Barang' => $nama_barang,
			'Harga_Barang' => $harga_barang,
			'Stok_Barang' => $stok_barang,
			'Foto' => $foto
		);
		$this->M_data->save_data('TB_Produk', $data);
		redirect(base_url("index.php/Admin/dashboard"));
	}
	
	//fungsi untuk masuk kehalaman tambah produk
	public function tambah_produk()
	{
		$this->sesi_admin();
		$this->load->view('V_tambah_produk');
	}

	//fungsi untuk melihat detail produk di panggil oleh tombol detail di v dashboard
	public function detail_produk($kode)
	{
		$this->sesi_admin();
		$table = 'TB_Produk';
		$where = array('Kode_Barang' => $kode);
		$detail = $this->M_data->detail_data($where, $table);
		$data['detail'] = $detail;
		$this->load->view('V_detail', $data);
	}

	//fungsi detail di halaman pegawai
	public function detail_produk_pgw($kode)
	{
		$this->sesi_pegawai();
		$table = 'TB_Produk';
		$where = array('Kode_Barang' => $kode);
		$detail = $this->M_data->detail_data($where, $table);
		$data['detail'] = $detail;
		$this->load->view('V_detail_pgw', $data);
	}
	
	//fungsi untuk menghapus satu baris produk
	public function hapus_produk($kode_barang)
	{
		$this->load->model('M_data');
		$data = $this->M_data->get_foto($kode_barang);
		if ($data->Foto != 'no_image.png') {
			$path = './foto/';
			@unlink($path.$data->Foto);
		}
		$this->M_data->hapus_data($kode_barang, 'tb_produk');
		redirect(base_url("index.php/Admin/dashboard"));
	}

	//fungsi untuk mengedit masuk kehalaman edit
	public function edit_produk($kode_barang)
	{
		$this->sesi_admin();
		$data['prd'] = $this->M_data->ambil_data_row($kode_barang, 'TB_Produk');
		$this->load->view('V_edit_produk', $data);
	}
	//fungsi untuk mengupdate data dipanggil di edit
	public function update_produk()
	{
		$this->sesi_admin();

		$kode_barang = $this->input->post('kode');
		$nama_barang = $this->input->post('nama');
		$harga_barang = $this->input->post('harga');
		$stok_barang = $this->input->post('stok');
		$old_foto = $this->input->post('old_foto');
		$foto = $_FILES['foto']['name'];

		if ($old_foto == '') {
			$foto = 'no_image.png';
		} else {
			$config["upload_path"] = "./foto/";
			$config["allowed_types"] = "jpg|png|gif|jpeg";
			$config["max_size"] = 7000; // max 7 MB
			$this->load->library("upload", $config);

			if ($this->upload->do_upload("foto")) {
				$foto = $this->upload->data("file_name");

				if ($old_foto != 'no_image.png'){
					$path = './foto';
					@unlink($path.$old_foto);
				}

			} else {
				echo "Upload Gagal";
				$foto = $old_foto;
			}
			
		}
		$data = array(
			'Kode_Barang' => $kode_barang,
			'Nama_Barang' => $nama_barang,
			'Harga_Barang' => $harga_barang,
			'Stok_Barang' => $stok_barang,
			'Foto' => $foto
		);
		$this->M_data->update_data($kode_barang,'TB_Produk', $data);
		redirect(base_url("index.php/Admin/dashboard"));
	}
}
