<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Release extends CI_Controller {

	public function index()
	{
        $data['items'] = array();
        $item = (object)(array(
            'name' => '南尖岩',
            'level' => 'AAAAA',
            'description' => '南尖岩位于监督法了解对方垃圾感觉地方分上减肥撒开飞机撒娇福建犯困睡觉啊福建省风飒风',
            'price' => 300,
            'child_price' => 100,
            'net_price' => 300,
            'net_child_price' => 100,
            'reasons' => array ('空气清新，富含负氧离子。', 
            '南尖岩融奇峰怪石、林海云雾、飞瀑流泉、珍禽异兽于一炉。',
            '南尖岩有奇独的云海、日落、长虹、雪景、雾淞、冰挂等天象景观。',
            '春季踏青、夏季避暑、秋季采摘、冬季观光于一体的风景名胜区。')
        ));
        $data['items'] []= $item;
		$this->load->view('inc/header');
        $this->load->view('release/index', $data);
        $this->load->view('inc/footer');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
