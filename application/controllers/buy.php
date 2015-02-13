<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buy extends CI_Controller {

	public function index()
    {
        // TODO get data from database        
        $data['items'] = array();
        $item = (object)(array(
            'thumbnail' => base_url('img/buy/item_div.png'),
            'title' => '古代油纸伞',
            'price' => 40,
            'description' => '这是推荐理由，这个伞特别好，特别好，特别好哟特别好用'
        ));
        $data['items'] []= $item;
        $data['items'] []= $item;
        $data['items'] []= $item;
        $data['items'] []= $item;


		$this->load->view('inc/header');
        $this->load->view('buy/index', $data);
        $this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
