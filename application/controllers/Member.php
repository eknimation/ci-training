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

}
