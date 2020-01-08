<?php
class User_model extends CI_Model {
    public $name;
    public $email;

    public function __construct(){
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function find_by_id($id)
    {
        $query = $this->db->get_where('users', ['id' => $id]);
        return current($query->result());
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

    public function update()
    {
        $params = $this->input->post();
        $user = [
            'name' => $params['name'],
            'email' => $params['email']
        ];

        return $this->db->replace('users', $user);
    }
}