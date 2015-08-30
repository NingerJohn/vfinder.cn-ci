<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		print_r(array_rand(array('验','证','码','0','1','2','3','4','5','6'),6));
		// $this->load->view('welcome_message');
	}
}
