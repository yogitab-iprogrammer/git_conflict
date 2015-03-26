<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	function Customer()
	{
		parent::__construct();  
		session_start();	
		$this->load->model('model_supportplann');
		$this->load->library('encrypt');		
	}	
	
	function newActionPlan($strNetworkIds,$create="")
        {
		echo "master update";
	}	
	
}

