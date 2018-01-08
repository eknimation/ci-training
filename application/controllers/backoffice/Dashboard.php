<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->library('session');
        $this->load->helper('url');

        $member_id = $this->session->userdata('member_id');

        if (empty($member_id)) {            
            redirect('backoffice/login');
        }

        echo '<a href="' . base_url('backoffice/login/signout') . '">Sing out</a>';
    }

}
