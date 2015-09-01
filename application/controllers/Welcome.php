<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 实例控制器（仅供参考）
* 功能介绍：控制器实例，来统一开发规范，注释中需包含作者，创建时间，修改人等常用开发信息
* 
* @author NingerJohn
* @ctime 2015年8月29日18:01:15
* @modifiers NingerJohn
* 
*/
class Welcome extends MY_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
	}

	/**
	 * 前端首页
	 * 显示各种分类的数据
	 * 
	 * @author 作者 NingerJohn
	 * @ctime 创建时间 2015年8月29日17:57:48
	 * @modifiers 修改人：NingerJohn; mike; jessica
	 * 
	 */
	public function index()
	{
		$this->load->view('index/vfindex.html');
		
		//$this->welcome_m->()
		//$data = array('num'=>'1111','title'=>'title test');
		//$this->load->view('Welcome/body', $data); // 调用body模板并赋值
		// echo $res;
	}
}
