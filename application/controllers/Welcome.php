<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Welcome extends CI_Controller {
	public function index(){
		$this->template->load('welcome_message','isi_1');
		}
	public function menu2(){
		$this->template->load('welcome_message','isi_2');
		}
	}
