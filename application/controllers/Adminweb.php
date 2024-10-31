<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminweb extends CI_Controller {


	public function index()
	{
		if (isset($_POST['login'])) {
			
			$user 	= strip_tags($this->input->post('user'));
			$pass 	= md5(strip_tags($this->input->post('pass')));
			
			$check 	= $this->db->get_where('admin',array('username'=>$user,'password'=>$pass));
			
			if($check->num_rows() == 1){
				$data = $check->row_array();
				$this->session->set_userdata(array(
					'status_login'	=> 'Oke',
					'id_login'		=> $data['id'],
					'username'		=> $data['username'],
					'nama'			=> $data['nama'],
				));
				redirect('dashboard');
			}else{
				redirect('adminweb');
			}
		}else{
			$this->load->view('_login');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('adminweb');
    }
	
}
