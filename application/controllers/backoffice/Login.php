<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->helper('url');
        $this->load->view('backoffice/login/index');
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username)) {
            $http_status = 400;
            $response = array('message' => 'ระบุ username');
        } elseif (empty($password)) {
            $http_status = 400;
            $response = array('message' => 'ระบุ password');
        } else {
            $this->load->model('member_model');

            $response = $this->member_model->read_member_by_username_and_password($username, $password);

            if (!empty($response)) {
                $http_status = 200;
                $response = array('message' => 'login successfully');
            } else {
                $http_status = 400;
                $response = array('message' => 'username หรือ password ไม่ถูกต้อง');
            }
        }

        $this->output
                ->set_status_header($http_status)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response))
        ;
    }

}
