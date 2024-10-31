<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$data['l'] = $this->db->query("SELECT * FROM lokasi GROUP BY nama DESC LIMIT 5");
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 3");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 3");
		$this->template->load('front-end/_template','front-end/_home',$data);
	}

	public function berita()
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$data['ab'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC");
		$this->template->load('front-end/_template','front-end/_berita',$data);
	}

	public function beritadetail($id)
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$b = $this->db->get_where("berita",array("id_berita"=>$id))->row_array();
		$dibaca = $b['dibaca'];
		$this->db->update('berita',array('dibaca'=>$dibaca + 1),array("id_berita"=>$id));
		$data['bo'] = $this->db->get_where("berita",array("id_berita"=>$id))->row_array();
		$this->template->load('front-end/_template','front-end/_berita_detail',$data);
	}

	public function profil()
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$data['p'] = $this->db->get_where("profil",array("id_profil"=>1))->row_array();
		$this->template->load('front-end/_template','front-end/_profil',$data);
	}

	public function lokasi()
	{
		$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 5");
		$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 5");
		$data['la'] = $this->db->get("lokasi");
		$this->template->load('front-end/_template','front-end/_lokasi',$data);
	}

	public function direction()
	{
		if(isset($_POST['cari'])) {
			$data = array(
				'saddr' => $_POST['asal'],
				'daddr' => $_POST['tujuan'],
				'l'		=> $this->db->query("SELECT * FROM lokasi GROUP BY nama DESC LIMIT 5"),
				);
            $this->template->load('front-end/_template','front-end/_direction_v',$data);
        }else{
        	$data['l'] = $this->db->query("SELECT * FROM lokasi GROUP BY nama DESC LIMIT 5");
			$this->template->load('front-end/_template','front-end/_direction',$data);
        }
	}

	public function lokasi_one($id)
	{
		$data['lo'] = $this->db->get_where("lokasi",array("id"=>$id))->row_array();
		$this->template->load('front-end/_template','front-end/_lokasi_one',$data);
	}

	public function komentar()
	{
		if(isset($_POST['kirim'])) {
			$data = array(
				'nama' 		=> $this->input->post('nama'),
				'email' 	=> $this->input->post('email'),
				'website' 	=> $this->input->post('website'),
				'komentar' 	=> $this->input->post('komentar'),
				);
			$this->db->insert('komentar',$data);
			redirect('web/komentar');
        }else{
			$data['bp'] = $this->db->query("SELECT * FROM berita GROUP BY dibaca DESC LIMIT 3");
			$data['bt'] = $this->db->query("SELECT * FROM berita GROUP BY id_berita DESC LIMIT 3");
        	$data['k'] = $this->db->query("SELECT * FROM komentar GROUP BY id_komentar DESC LIMIT 5");
			$this->template->load('front-end/_template','front-end/_komentar',$data);
        }
	}
}
