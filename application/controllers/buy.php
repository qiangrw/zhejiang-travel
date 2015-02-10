<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buy extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
        $this->load->view('buy/index');
        $this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */