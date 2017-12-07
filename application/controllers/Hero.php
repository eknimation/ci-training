<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hero extends CI_Controller {

    public function index() {
        $this->load->view('hero/index');
    }

    public function ironman() {
        $this->load->view('hero/ironman');
    }

    public function hulk() {
        $this->load->view('hero/hulk');
    }

    public function myhero($heroname = '') {
        if(empty($heroname)){
            echo 'I am a hero.';
        }else{
            echo 'My hero is ' . $heroname;
        }
        
    }

}
