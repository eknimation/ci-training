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

    public function read_member_all() {
        $this->db->select('id, username, name')
                ->from('member');

        $query = $this->db->get();
        return $query->result();
    }

    public function read_member_by_id($id) {
        $where = array(
            'id' => $id
        );

        $this->db->select('id, username, name')
                ->from('member')
                ->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    public function read_member_by_username_and_password($username, $password) {
        $where = array(
            'username' => $username,
            'password' => $password
        );

        $this->db->select('id, username, name')
                ->from('member')
                ->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    public function update_member($savedata) {
        $data = array(
            'name' => $savedata['name']
        );

        $this->db->where('id', $savedata['id']);
        $this->db->update('member', $data);

        return $this->db->affected_rows();
    }

    public function delete_member($id) {
        $this->db->where('id', $id);
        $this->db->delete('member');

        return $this->db->affected_rows();
    }

}
