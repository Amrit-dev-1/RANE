<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advisory_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('RMC_view/advisory_view.php');
	}
}
