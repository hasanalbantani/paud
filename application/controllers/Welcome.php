<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $data = [];
	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model("publik/publik");
	}
	public function index()
	{
		$p = $this->publik;
		$data['data_publik'] = $p->getMenu();
		$id = $this->input->get('id');
		$data['data_parent'] = $p->getParent($id);
		$data['data_carousel'] = [
			'https://images.unsplash.com/photo-1628243426757-b092ba839ff9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8a2lkc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
			'https://images.unsplash.com/photo-1628243426757-b092ba839ff9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8a2lkc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
			'https://images.unsplash.com/photo-1628243426757-b092ba839ff9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8a2lkc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
		];
		$data['data_config'] = $p->getConfig();
		$this->load->view('index', $data);
	}
}
