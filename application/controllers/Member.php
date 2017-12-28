<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('member_model');
    }

    public function index() {
        echo 'Member';
    }

    public function create($username, $password, $name) {
        $savedata = array(
            'username' => $username,
            'password' => $password,
            'name' => $name
        );

        $result = $this->member_model->create_member($savedata);

        echo 'insert id ' . $result;
    }

    public function read($id = '') {
        if (empty($id)) {
            $data = $this->member_model->read_member_all();
        } else {
            $data = $this->member_model->read_member_by_id($id);
        }

        if (!empty($data) && is_array($data)) {
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }

    public function update($id = '', $name = '') {
        if (empty($id) || empty($name)) {
            echo 'invalid parameter';
        } else {
            $savedata = array(
                'name' => $name,
                'id' => $id
            );

            $result = $this->member_model->update_member($savedata);

            echo 'update ' . $result . ' row';
        }
    }

    public function delete($id = '') {
        if (empty($id)) {
            echo 'invalid parameter';
        } else {
            $result = $this->member_model->delete_member($id);

            echo 'delete ' . $result . ' row';
        }
    }

}
