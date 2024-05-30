<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('partial/head');
    //     $this->load->view('partial/home');
    //     $this->load->view('partial/footer');
	// }
    // public function about()
    // {
    //     $this->load->view('partial/header');
    //     $this->load->view('partial/about');
    //     $this->load->view('partial/footer');
    // }
    function _construct(){
        parent::_construct();
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
        };
    }
    public function index(){
        $this->load->view('view-home');
    }
}
