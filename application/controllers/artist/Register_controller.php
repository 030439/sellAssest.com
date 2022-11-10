<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Register_Controller extends CI_Controller{
    public function __consruct(){
        parent::__consruct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function register(){
        $this->load->view('register');
    }
}