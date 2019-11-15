<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		
		$data = array(
				'css' => $this->css,
				'script' => $this->script
		);

		$this->load->view('web/head', $data);
		$this->load->view('web/secciones/home',$data);
		$this->load->view('web/footer',$data);
	}
}
