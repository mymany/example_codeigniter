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

	public function edit($id)
	{
		$this->output->enable_profiler();
		$this->load->helper('form');
		$this->load->model('user_model', 'user', true);
		$data['user'] = $this->user->find_by_id($id);
		$this->load->view('user/edit', $data);
	}

	public function update()
	{
		$this->load->model('user_model', 'user', true);
		$this->user->update();
		$this->load->view('user/update');
	}
}
