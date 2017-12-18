<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create_member($savedata) {
        $data = array(
            'username' => $savedata['username'],
            'password' => $savedata['password'],
            'name' => $savedata['name']
        );

        $this->db->insert('member', $data);
        
        return $this->db->insert_id();
    }

    public function read_member($data) {
        
    }

    public function update_member($data) {
        
    }

    public function delete_member($data) {
        
    }

}
