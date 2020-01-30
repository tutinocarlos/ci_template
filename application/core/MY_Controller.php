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
					base_url('assets/manager/css/icons/icomoon/styles.min.css?ver='.time()),
					base_url('assets/manager/css/bootstrap.min.css?ver='.time()),
					base_url('assets/manager/css/bootstrap_limitless.css?ver='.time()),
					base_url('assets/manager/css/layout.css?ver='.time()),
					base_url('assets/manager/css/components.css?ver='.time()),
					base_url('assets/manager/css/colors.min.css?ver='.time()),
				);

				
				$this->script_common = array(
					base_url('assets/manager/js/jquery.min.js?ver='.time()),
					base_url('assets/manager/js/bootstrap.bundle.min.js?ver='.time()),
					base_url('assets/manager/js/plugins/loaders/blockui.min.js?ver='.time()),
					base_url('assets/manager/js/plugins/forms/styling/uniform.min.js?ver='.time()),
//					base_url('assets/manager/js/plugins/notifications/sweet_alert.min.js?ver='.time()),
					base_url('assets/manager/js/app.js?ver='.time()),
				
				);	
			
			/*BARRA DE NAVEGACION Y FOOTER GLOBAL*/
			
			$menu_act = $this->uri->segment(3);
			$data = array(
				'script' => '',
				'page_title' => 'CI_template',
				'page_datail' => 'Administrador',
				'class_act' => $this->router->fetch_class(),
				'method_act' => $this->router->fetch_method(),
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
