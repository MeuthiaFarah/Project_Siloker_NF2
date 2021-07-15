<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('Dasboard/index');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('Dasboard/login');
	}

	//... bidang_usaha mulai
	public function bidang_usaha()
	{
		// load model
		$this->load->model('m_bidang_usaha');

		//manggil model
		$bidangusaha = $this->m_bidang_usaha->getAll();
		$data['bidangusaha'] = $bidangusaha;

		//ke view
		$this->load->view('header1');
		$this->load->view('Dasboard/bidang_usaha', $data);
		$this->load->view('footer1');
	}
	//... bidang_usaha selesai

	//... keahlian mulai
	public function keahlian()
	{
		// load model
		$this->load->model('m_keahlian');

		//manggil model
		$keahlians = $this->m_keahlian->getAll();
		$data['keahlians'] = $keahlians;

		$this->load->view('header1');
		$this->load->view('Dasboard/keahlian', $data);
		$this->load->view('footer1');
	}
	//... keahlian selesai

	//... lowongan mulai
	public function lowongan()
	{
		// load model
		$this->load->model('m_lowongan');

		//manggil model
		$lowongans = $this->m_lowongan->getAll();
		$data['lowongans'] = $lowongans;

		$this->load->view('header1');
		$this->load->view('Dasboard/lowongan', $data);
		$this->load->view('footer1');
	}
	//... lowongan selesai

	//... lowongan_keahlian mulai
	public function lowongan_keahlian()
	{
		// load model
		$this->load->model('m_lowongan_keahlian');

		//manggil model
		$lowongan_keahlians = $this->m_lowongan_keahlian->getAll();
		$data['lowongan_keahlians'] = $lowongan_keahlians;

		$this->load->view('header1');
		$this->load->view('Dasboard/lowongan_keahlian', $data);
		$this->load->view('footer1');
	}
	//... lowongan_keahlian selesai

	//... mitra mulai
	public function mitra()
	{
		// load model
		$this->load->model('m_mitra');

		//manggil model
		$mitras = $this->m_mitra->getAll();
		$data['mitras'] = $mitras;

		$this->load->view('header1');
		$this->load->view('Dasboard/mitra', $data);
		$this->load->view('footer1');
	}
	//... mitra selesai

	//... prodi mulai
	public function prodi()
	{
		// load model
		$this->load->model('m_prodi');

		//manggil model
		$prodis = $this->m_prodi->getAll();
		$data['prodis'] = $prodis;

		$this->load->view('header1');
		$this->load->view('Dasboard/prodi', $data);
		$this->load->view('footer1');
	}
	//... prodi selesai

	//... sektor_usaha mulai
	public function sektor_usaha()
	{
		// load model
		$this->load->model('m_sektor_usaha');

		//manggil model
		$sektor_usahas = $this->m_sektor_usaha->getAll();
		$data['sektor_usahas'] = $sektor_usahas;

		$this->load->view('header1');
		$this->load->view('Dasboard/sektor_usaha', $data);
		$this->load->view('footer1');
	}
	//... sektor_usaha selesai

	public function peminat_lowongan()
	{
		// load model
		$this->load->model('m_peminat_lowongan');

		//manggil model
		$peminat = $this->m_peminat_lowongan->getAll();
		$data['peminat'] = $peminat;

		$this->load->view('header1');
		$this->load->view('Dasboard/peminat_lowongan', $data);
		$this->load->view('footer1');
	}

	public function lowongan_baru()
	{
		$this->load->view('header1');
		$this->load->view('lowongan_baru');
		$this->load->view('footer1');
	}
}
