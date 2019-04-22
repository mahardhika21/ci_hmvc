<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('email');
		$this->load->module('sms');
	}


}

