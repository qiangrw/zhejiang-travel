<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stay extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
        $this->load->view('stay/index');
        $this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */