<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rps extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mrps');
        $this->load->helper('url');
    }

    public function index(){
        $data['rps'] = $this->Mrps->getAllRps();
        $this->load->view('view-rps',$data);
    }

    public function tambah(){
        $this->load->view('view-tambah');
    }
    public function edit($id){
    $data['rps'] = $this->Mrps->editdata($id);
    $this->load->view('view-edit', $data);
}

    public function proses_edit($id){
        $this->Mrps->proses($id);
        redirect('rps');
    }
    public function tambahData(){
        $this->Mrps->tambahRps();
        redirect('rps');
    }
    public function hapus($id){
        $this->Mrps->hapusDataRps($id);
        redirect('rps');
    }
    public function cetak(){
        $data['rps'] = $this->Mrps->getAllRps();
        $this->load->view('view-cetak',$data);
    }
    public function submit($id){
        $data['rps'] = $this->Mrps->get_rps_by_id($id);
        $this->load->library('template');
        $this->template->load('view-submit', 'view-isi-submit', $data);
    }
}