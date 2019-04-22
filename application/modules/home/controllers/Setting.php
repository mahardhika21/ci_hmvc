<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('base');
	}


	public function index()
	{
		$this->bank();
	}

	/***
	 * Menampilkan list bank
	 *     Use	  : site_url().'/setting/login';
     *     param  : no need
	 * Status : draft
	 * */


    public function bank(){
    	//$this->authentication->check_login('home/login');
	   		$data = array(
			// 'message' => $message,
			'csrf' => array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			),
			'part' => array(
				'sidebar' 	=> $this->base->sidebar(),
				'header' 	=> $this->base->header(),
				'footer' 	=> $this->base->footer(),
				'mybank'	=> $this->my_bank(),
				'allbank'	=> $this->all_bank(),
			)
		);

		$this->load->view('bank', $data);	
    }



public function profile(){
	//$this->authentication->check_login('home/login');
	 $data = array(
	    // 'message' => $message,
		'csrf' => array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			),
	    'part' => array(
				'sidebar' 	=> $this->base->sidebar(),
				'header' 	=> $this->base->header(),
				'footer' 	=> $this->base->footer(),
			)
		);

		$this->load->view('profile', $data);	
}

public function update_password(){
	//$this->authentication->check_login('home/login');
	 $data = array(
	    // 'message' => $message,
		'csrf' => array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			),
	    'part' => array(
				'sidebar' 	=> $this->base->sidebar(),
				'header' 	=> $this->base->header(),
				'footer' 	=> $this->base->footer(),
			)
		);

		$this->load->view('update_password', $data);	
}



    /* file part */
     private function my_bank(){
     	$data = array(
			// 'message' => $message,
			'csrf' => array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			));
     	return $this->load->view('part/my_bank', $data, true);
     }

     private function all_bank(){
     	$data = array(
			// 'message' => $message,
			'csrf' => array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			));
     	return $this->load->view('part/all_bank', $data, true);
     }





   	


}
