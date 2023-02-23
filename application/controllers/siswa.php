<?php
defined('BASEPATH') or exit('No direct script access allowed');

class siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('swmodel', 'swm');
	}
	public function index()
	{

		$data['allsiswa'] = $this->swm->get_all_data_siswa();
		$data['title'] = "Daftar Siswa";

		$this->load->view('templates/header', $data);
		$this->load->view('siswa/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = "Tambah Siswa";

		$this->load->view('templates/header', $data);
		$this->load->view('siswa/create', $data);
		$this->load->view('templates/footer');
	}

	public function simpansiswa()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'asal_sekolah' => $this->input->post('asal_sekolah'),
		];
		$this->db->insert('siswa', $data);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Siswa sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('siswa');
	}

	public function edit($id)
	{
		$data['title'] = "Edit Siswa";
		$data['siswa'] = $this->db->get_where('siswa', ['id' => $id])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('siswa/edit', $data);
		$this->load->view('templates/footer');
	}

	public function editsiswa()
	{

		$this->db->set('nama', $this->input->post('nama'));
		$this->db->set('alamat', $this->input->post('alamat'));
		$this->db->set('jenis_kelamin', $this->input->post('jenis_kelamin'));
		$this->db->set('agama', $this->input->post('agama'));
		$this->db->set('asal_sekolah', $this->input->post('asal_sekolah'));
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('siswa');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Siswa sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('siswa');
	}

	public function hapus($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('siswa');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Siswa sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

		redirect('siswa');
	}
}