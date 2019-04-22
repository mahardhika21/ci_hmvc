<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MX_Controller{
	
	function __construct(){
	  parent::__construct();
    }
	
	function index($name='world'){
		$this->hello($name);
	}
	function hello($name='world'){
		$data = array(
			"name" => $name,
		);
		$this->load->view('index',$data);
	}
	
}