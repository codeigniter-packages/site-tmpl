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


/**
 *  Ticket_Controller 在通过ticket来确认身份才使用（无会话状态的时候）
 */
class Ticket_Controller extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->config->load('packages', TRUE);

    }

    public function _remap($method, $params = array()) {

        $this->load->package('codeigniter-packages/ticket');

        $ticket = $this->input->get_request_header('ticket', TRUE);
        $user = $this->ticket->check($ticket);
        $data = array('result'=>false);
        
        if($user===NULL){
            
            $this->output->set_status_header(401);
            
        }else if (!method_exists($this, $method)) {
            
            $this->output->set_status_header(404);
            
        } else {
            $this->user=$user;
            $this->output->set_status_header(200);
            $data = call_user_func_array(array($this, $method), $params);
            
        }
        
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

}