<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$this->load->view('user/index');
	}

	public function new()
	{
		$this->output->enable_profiler();
		$this->load->helper('form');
		$this->load->view('user/new');
	}

	public function create()
	{
		$this->output->enable_profiler();
		$this->load->model('user_model', 'user', true);
		$this->user->create();
		$this->load->view('user/create');
	}
}
