<?php
class User_model extends CI_Model {
    public $name;
    public $email;

    public function __construct(){
        parent::__construct();
    }

    public function create()
    {
        $params = $this->input->post();
        $user = [
            'name' => $params['name'],
            'email' => $params['email']
        ];

        return $this->db->insert('users', $user);
    }
}