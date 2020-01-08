<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->model('user_model', 'user', true);
		$data['users'] = $this->user->get_all();
		$this->load->view('user/index', $data);
	}

	public function new()
	{
		$this->load->helper('form');
		$this->load->view('user/new');
	}

	public function create()
	{
		$this->load->model('user_model', 'user', true);
		$this->user->create();
		$this->load->view('user/create');
	}
}
