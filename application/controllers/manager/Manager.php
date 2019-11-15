<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends MY_Controller {
	 function __construct(){
        parent::__construct();
	 
		if (!$this->ion_auth->logged_in())
    {
      redirect('Login');
    }
	 }
	

	public function index(){
		
		$this->data['css_common']= $this->css_common;

		$this->data['script_common']= $this->script_common;
		
		
		
		
		$this->data['content']= $this->load->view('manager/secciones/home',$this->data,TRUE);

		$this->load->view('manager/head', $this->data);
		$this->load->view('manager/index',$this->data);
		$this->load->view('manager/footer',$this->data);
	}
}
?>
