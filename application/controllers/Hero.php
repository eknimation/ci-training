<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hero extends CI_Controller {

    public function index() {
        echo 'Hero Controller';
    }

    public function ironman() {
        echo 'Hello Ironman';
    }

    public function hulk() {
        echo 'Hello Hulk';
    }

}
