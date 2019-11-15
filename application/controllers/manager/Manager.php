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
		
		echo 'manager';
	}
}
?>
