<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    use codeigniter_packages_remap;

    public function __construct(){

        parent::__construct();
        $this->load->library('user_agent');
        $this->config->load('packages', TRUE);
        $this->config->load('themes', TRUE);

    }

    public function _remap($method, $params = array()) {

        $theme='bootstrap';
        $this->load_map($method, $params, $theme);

    }

}


