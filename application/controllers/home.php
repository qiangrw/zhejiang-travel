<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
        $this->load->view('home/index');
        $this->load->view('inc/footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */