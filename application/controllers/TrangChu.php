<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Trang chủ';
		$data['page'] = 'pages/trangchu';
		
		$this->load->view('master', $data);
	}
}
