<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios_model extends CI_Model
{

	public function list_usuarios_dt(){
		
			$draw 	= intval(2);
      $start 	= intval(0);
      $length = intval(0);
	
      $query = $this->db->select("*")->get('users');

      $datos = [];
			$roles = '';
      foreach($query->result() as $r) {
				
			 	$user_groups = $this->ion_auth->get_users_groups($r->id)->result();
				
				foreach($user_groups as $data){
					$roles .= '<span class="ml-1 badge badge-flat border-primary">'.$data->description.'</span>';
				}
				
				if($r->active == '1'){
					$estado = '<span class="badge badge-success">activo</span>';
				}else{
					$estado = '<span class="badge badge-danger">inactivo</span>';
				};
				
				 $datos[] = array(
							$r->id,
							$r->first_name,
							$r->last_name,
							$r->rol = $roles, 
							$r->estado = $estado,
				 );
      }

      $result = array(
				"draw" => $draw,
				"recordsTotal" => $query->num_rows(),
				"recordsFiltered" => $query->num_rows(),
				"data" => $datos
			);

      echo json_encode($result);
	}		
	
 
}
