<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Torrent extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function index($messages = array(), $errors = array())
	{
		$this->load->helper('file');
		$torrents = get_dir_file_info(APPPATH.'../torrents/');
		asort($torrents);

		$viewData = array(
			'messages' => $messages,
			'errors' => $errors,
			'torrents' => $torrents,
		);
		
		$this->load->view('templates/header');
		$this->load->view('templates/main', $viewData);
		$this->load->view('templates/footer');
	}
	
	public function upload()
	{
		$config['upload_path']          = APPPATH.'../torrents/';
		$config['allowed_types']        = 'torrent';
		$config['max_size']             = 0;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('torrent'))
		{
			var_dump($_FILES);
			$this->index(array(), array('error' => $this->upload->display_errors()));
		}
		else
		{
			$this->index(array('upload' => 'Torrent erfolgreich hochgeladen!'), array());
		}
	}
}
