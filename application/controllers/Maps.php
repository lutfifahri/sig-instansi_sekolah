<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {


	public function index()
	{
		$this->load->library('googlemaps');

		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$as = $this->db->query("SELECT l.id, l.nama, l.alamat, l.telp, l.latittude, l.longitude, k.nama_kategori, k.ikon FROM lokasi as l, kategori as k WHERE l.kategori=k.id");
            foreach ($as->result() as $data) {

			$nama   = $data->nama;
            $alamat = $data->alamat;
            $telp   = $data->telp;
            $lat    = $data->latittude;
            $lon    = $data->longitude;
            $icon   = $data->ikon;

		}

		$marker = array();
		$marker['position'] = '$lat , $lon';
		$marker['infowindow_content'] = '1 - Hello World!';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);

		$data['map'] = $this->googlemaps->create_map();

		// $marker = array();
		// $marker['position'] = '37.429, -122.1519';
		// $marker['infowindow_content'] = '1 - Hello World!';
		// $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		// $this->googlemaps->add_marker($marker);

		// $marker = array();
		// $marker['position'] = '37.409, -122.1319';
		// $marker['draggable'] = TRUE;
		// $marker['animation'] = 'DROP';
		// $this->googlemaps->add_marker($marker);

		// $marker = array();
		// $marker['position'] = '37.449, -122.1419';
		// $marker['onclick'] = 'alert("You just clicked me!!")';
		// $this->googlemaps->add_marker($marker);
		// $data['map'] = $this->googlemaps->create_map();

		$this->load->view('view_maps', $data);
	}
}
