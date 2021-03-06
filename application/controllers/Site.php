<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Selamat datang di SearchMap',
			'navigation' => 'core/elements/navigation',
			'page' => 'sites/index'
		];

		$this->load->view('core/layouts/app', $data);
	}

	public function map()
	{
		$data = [
			'title' => 'Cari Tempat yang Anda Ingingkan',
			'page' => 'sites/map'
		];

		$this->load->view('core/layouts/app', $data);
	}
}