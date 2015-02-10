<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Release extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
        $this->load->view('release/index');
        $this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */