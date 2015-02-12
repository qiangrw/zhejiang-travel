<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travel extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
        $this->load->view('travel/index');
        $this->load->view('inc/footer');
	}
    public function detail()
    {
        $this->load->view('inc/header');
        $this->load->view('travel/detail');
        $this->load->view('inc/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */