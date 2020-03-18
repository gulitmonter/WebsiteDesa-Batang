<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('hm/header');
		$this->load->view('hm/home');
		$this->load->view('hm/footer');
	}
	public function profil()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/about');
		$this->load->view('hm/footer');
	}
	public function vm()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/vm');
		$this->load->view('hm/footer');
	}
	public function peta()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/peta');
		$this->load->view('hm/footer');
	}
	public function produklokal()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/produklokal');
		$this->load->view('hm/footer');
	}
	public function prestasi()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/prestasi');
		$this->load->view('hm/footer');
	}
	public function brtdesa()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/brtdesa');
		$this->load->view('hm/footer');
	}
	public function brtpemkab()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/brtpemkab');
		$this->load->view('hm/footer');
	}
	public function kependuk()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/kependuk');
		$this->load->view('hm/footer');
	}
	public function kemiski()
	{
		$this->load->view('hm/header');
		$this->load->view('hm/kemiski');
		$this->load->view('hm/footer');
	}	
}
