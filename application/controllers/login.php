<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Mlogin','Mlogin');
        $this->load->database();
    }

    function index() {
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('view-login');
        }else{
            $url=base_url('home');
            redirect($url);
        }
    }
    function autentikasi(){
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        
        $validasi_email = $this->Mlogin->query_validasi_email($email);
        if($validasi_email->num_rows() > 0){
            $validate_ps=$this->Mlogin->query_validasi_password($email,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['user_status']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('user',$email);
                    $id=$x['user_id'];
                    if($x['user_akses']=='1'){ //Administrator
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Administrator');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('home');
                    
                    }else if($x['user_akses']=='2'){ //Dosen
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Dosen');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('home');
                    
                    }else if($x['user_akses']=='3'){ //Mahasiswa
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Mahasiswa');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('home');
                    }
                }else{
                    $url=base_url('login');
                    echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi operator.</p>');
                    redirect($url);
                }
            }else{
                $url=base_url('login');
                echo $this->session->set_flashdata('msg','
                <p style="color: red;">Password yang kamu masukan salah bang</p>');
                redirect($url);
            }
        }else{
            $url=base_url('login');
            echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
            <h3>Uupps!</h3>
            <p>Email yang kamu masukan salah bang</p>');
            redirect($url);
        }
    }
    //ini untuk menghapus session yang sudah di create
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('index.php/login');
        redirect($url);
    }
}