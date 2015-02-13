<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taste extends CI_Controller {

    public function index()
    {
//        add meta data like dongporou, xishishe as alist
        $this->load->view('inc/header');
        $this->load->view('taste/index');
        $this->load->view('inc/footer');
    }

	public function detail()
    {
        // TODO get data from database        
        $data['items'] = array();
        $item = (object)(array(
            'thumbnail' => base_url('img/stay/stay1.png'),
            'title' => '东坡肉',
            'location' => 'XXXX小区内',
            'comment' => 'This is the comment.',
            'description' => '南尖岩位于监督法了解对方垃圾感觉地方分上减肥撒开飞机撒娇福建犯困睡觉啊福建省风飒风',
            'price' => 108,
            'addon' => '特别优惠噢噢噢'
        ));
        $data['items'] []= $item;
        $data['items'] []= $item;
        $data['items'] []= $item;
        $data['items'] []= $item;


		$this->load->view('inc/header');
        $this->load->view('taste/detail', $data);
        $this->load->view('inc/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
