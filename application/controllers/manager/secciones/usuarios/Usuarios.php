<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller {
	 function __construct(){
        parent::__construct();
	 
		if (!$this->ion_auth->logged_in())
    {
      redirect('Login');
    }else{
			$this->load->model('/Manager/Usuarios_model');
			$this->load->helper(array('form'));
			$this->load->library('form_validation');
			
		}
	 }
	
	public function list_usuarios_dt(){
		$usuarios = $this->Usuarios_model->list_usuarios_dt();
		return $usuarios;
	}

	public function index(){
		
		$script= array(
			base_url('assets/manager/js/plugins/tables/datatables/datatables.js?ver='.time()),
//			base_url('assets/manager/js/plugins/tables/datatables/datatables.min.js'),
//			base_url('assets/manager/js/plugins/tables/datatables/datatables_advanced.js'),
			base_url('assets/manager/js/secciones/usuarios/index.js?ver='.time()),
		);
		
		
		$this->data['css_common']= $this->css_common;
		$this->data['css']= '';

		$this->data['script_common']= $this->script_common;
		$this->data['script']= $script;

		
		$this->data['content']= $this->load->view('manager/secciones/usuarios/index',$this->data,TRUE);

		$this->load->view('manager/head', $this->data);
		$this->load->view('manager/index',$this->data);
		$this->load->view('manager/footer',$this->data);
	}
	
	
	public function agregar(){

		
		
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('username', 'Usuario', 'required|callback_usercheck');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('re-password', 'Confirmar password', 'trim|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'required');
		
		
		 if (!$this->form_validation->run() === TRUE){
			 echo 'no es false';
		 }else{

			 
		 }

		$script= array(
//			base_url('assets/manager/js/plugins/forms/selects/select2.min.js?ver='.time()),
//			base_url('assets/manager/js/plugins/forms/styling/uniform.min.js?ver='.time()),
//			base_url('assets/manager/js/plugins/forms/form_layouts.js?ver='.time()),
//			base_url('assets/manager/js/secciones/abm_usuarios.js?ver='.time()),
//			base_url('assets/manager/js/secciones/login/login.js?ver='.time()),
			base_url('assets/manager/js/plugins/forms/selects/select2s.min.js?ver='.time()),
			base_url('assets/manager/js/secciones/login/login.js?ver='.time()),
		);
		
		
		$this->data['css_common']= $this->css_common;
		$this->data['css']= '';

		$this->data['script_common']= $this->script_common;
		$this->data['script']= $script;

		$this->data['grupos'] = $this->ion_auth->groups()->result();
		
		$this->data['content']= $this->load->view('manager/secciones/usuarios/agregar',$this->data,TRUE);
		
		
		//danta enviada a la plantilla
		
//		var_dump($this->data['grupos'] );

		$this->load->view('manager/head', $this->data);
		$this->load->view('manager/index',$this->data);
		$this->load->view('manager/footer',$this->data);
	}
	
	
	
	public function usercheck($str){
echo 'cachuica';
		if(!$this->ion_auth->username_check($this->input->post('username'))){
			return TRUE; 
		}else{
			$this->form_validation->set_message('usercheck','El usuario ya se encuentra registrado');
			return FALSE;
		}
	}
}



?>
