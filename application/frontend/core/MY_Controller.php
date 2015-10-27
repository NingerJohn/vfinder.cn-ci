<?php

/**
* @author NingerJohn
* @create_time 2015年8月17日23:21:28
* @description 介绍
* 扩展CI_Controller，添加了常用的分页、
*  
* @add
*/
class MY_Controller extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper('extra'); // 调试函数
		// $this->load->helper('production');
	}
	/**
	* smarty模板引擎赋值方法
	* 
	*
	*
	*/
    public function assign($key,$val) {   
        $this->cismarty->assign($key,$val);   
    }
    /**
    * smarty引擎显示模板方法
    *
    */
    public function display($html) {
        $this->cismarty->display($html);   
    }

    /**
    * smarty引擎显示模板方法
    *
    */
    public function fetch($html) {
        return $this->cismarty->fetch($html);   
    }

	/**
	* bootstrap样式的分页方法，
	* @author NingerJohn
	* 
	* @param 
	* @return 
	*
	*
	*/
	private function paging()
	{
		# code...
		$this->load->library('pagination');
		echo $value;
	}
	/**
	* 验证码方法
	* 
	* @author NingerJohn
	*
	* @param array $codes 验证码数组，例如：array('验','证','码','0','1','2','3','4','5','6')
	* @param int $len 字符个数
	* @return NULL
	* 
	*/
	private function captcha($codes=NULL, $len){
		$this->load->helper('captcha');
		// 用户未自定义验证码数组的话，则默认6位随即数字
		if(is_null($codes)){
			// 默认6位随即数字
			$code = mt_rand(100000,999999); 
		}else{
			$arr = shuffle($codes);
			$tail = count($arr)-1;
			$code = $codes[mt_rand(0,$tail)];
		}
		$arr = explode('', string);
		$config = array(
				'word'=>$code
			);
	}
}


























