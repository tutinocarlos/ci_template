<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends backend_controller {
	 function __construct(){
        parent::__construct();
	 
		if (!$this->ion_auth->logged_in())
    {
      redirect('Login');
    }else{
			
				$this->load->model('/Manager/Usuarios_model');
			
		}
	 }
	
	public function list_usuarios_dt(){
		$usuarios = $this->Usuarios_model->list_usuarios_dt();
		return $usuarios;
	}

	public function index(){
		$script= array(
			base_url('assets/manager/js/plugins/tables/datatables/datatables.js'),
//			base_url('assets/manager/js/plugins/tables/datatables/datatables.min.js'),
//			base_url('assets/manager/js/plugins/tables/datatables/datatables_advanced.js'),
			base_url('assets/manager/js/plugins/forms/selects/select2.min.js'),
			base_url('assets/manager/js/secciones/'.$this->router->fetch_class().'/'.$this->router->fetch_method().'.js'),
		);
		
		
		$this->data['css_common']= $this->css_common;
		$this->data['css']= '';

		$this->data['script_common']= $this->script_common;
		$this->data['script']= $script;

		
		$this->data['content']= $this->load->view('manager/secciones/usuarios/'.$this->router->fetch_method(),$this->data,TRUE);

		$this->load->view('manager/head', $this->data);
		$this->load->view('manager/index',$this->data);
		$this->load->view('manager/footer',$this->data);
	}



	public function agregar(){
		$this->data['css_common']= $this->css_common;
		$this->data['css']= '';

		$script= array(
		base_url('assets/manager/js/plugins/forms/selects/select2.min.js'),
		base_url('assets/manager/js/plugins/forms/styling/uniform.min.js'),
		base_url('assets/manager/js/secciones/'.$this->router->fetch_class().'/'.$this->router->fetch_method().'.js'),
		// base_url('assets/manager/js/secciones/'.$this->router->fetch_class().'.js'),
		);
		$this->data['script_common']= $this->script_common;
		$this->data['script']= $script;
		
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('first_name', 'Nombre', 'required');
		$this->form_validation->set_rules('last_name', 'Apellido', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password_2', 'Password Confirmación', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('grupos[]', 'Seleccione un Grupo', 'required');
		if ($this->form_validation->run() == FALSE){
			
			}else{
			echo 'cosa';
			}
//		var_dump($this->input->post());
		
		
		

		
		$this->data['content']= $this->load->view('manager/secciones/usuarios/'.$this->router->fetch_method(),$this->data,TRUE);

		$this->load->view('manager/head', $this->data);
		$this->load->view('manager/index',$this->data);
		$this->load->view('manager/footer',$this->data);
	}
}


?>
