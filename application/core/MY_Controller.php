<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_controller extends CI_Controller {
 
    function __construct(){
    parent::__construct();
			$this->page_title = 'CI_tempalte';
			$this->page_datail = 'escturctura base';
				$this->user = $this->ion_auth->user()->row();
			
				$fecha = date("Y-m-d");
				$this->fecha = fecha_es($fecha, "L d F a"); //Resultado: dia 25 mes completo 2014
			
				$this->css_common = array(
					base_url('assets/manager/css/icons/icomoon/styles.min.css'),
					base_url('assets/manager/css/bootstrap.min.css'),
					base_url('assets/manager/css/bootstrap_limitless.css'),
					base_url('assets/manager/css/layout.css'),
					base_url('assets/manager/css/components.css'),
					base_url('assets/manager/css/colors.min.css'),
				);

				
				$this->script_common = array(
					base_url('assets/manager/js/jquery.min.js'),
					base_url('assets/manager/js/bootstrap.bundle.min.js'),
					base_url('assets/manager/js/plugins/loaders/blockui.min.js'),
					base_url('assets/manager/js/app.js'),
				);	
			
			/*BARRA DE NAVEGACION Y FOOTER GLOBAL*/
			
			$data = array(
				'script' => '',
				'page_title' => 'CI_template',
				'page_datail' => 'Administrador',
			);
			
			$this->nav = $this->load->view('manager/etiquetas/nav', $data, TRUE);
			
			$this->footer = $this->load->view('manager/etiquetas/footer', $data, TRUE);
			
 		}

		
}

class backend_controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
  			if (!$this->ion_auth->logged_in())
				{
					redirect('Login');
				}else{
						$this->load->helper(array('form', 'url'));
						$this->load->model('/Manager/Usuarios_model');
						$this->load->library('form_validation');
					
						$this->data['grupos'] = $this->ion_auth->groups()->result();
				}
    }
}

class front_controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        // do something
    }
}


?>
