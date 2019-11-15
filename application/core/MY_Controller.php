<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_controller extends CI_Controller {
 
    function __construct(){
    parent::__construct();
				$this->user = $this->ion_auth->user()->row();
			
				$fecha = date("Y-m-d");
				$this->fecha = fecha_es($fecha, "L d F a"); //Resultado: dia 25 mes completo 2014
			
				$this->css = array(
					base_url('assets/common/css/bootstrap.min.css'),
				);
				$this->script = array(
					base_url('assets/common/jquery/jquery.js'),
					base_url('assets/common/js/bootstrap.min.js'),
				);	
			
 		}

		
}


?>
