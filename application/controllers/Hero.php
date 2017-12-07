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
        if (empty($heroname)) {
            $hero_result = 'I am a hero.';
        } else {
            $hero_result = 'My hero is ' . $heroname;
        }

        $data = array(
            'hero_result' => $hero_result,
            'title' => 'myhero view'
        );

        $this->load->view('hero/myhero', $data);
    }

}
