<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/Service1_view.php');
	}
}
