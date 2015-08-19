<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 额外补充的函数
* @vfinder.cn
* @author NingerJohn
* @create_time 2015年8月17日23:34:53
* @
*/

if( ! function_exists('pr')){
	/**
	* 调试时的打印函数，可以用来打印数组字符串对象等等
	* 
	* @author NingerJohn
	* @param mixed $val 
	* @return NULL
	* 
	*/
	function pr($val){
		echo '<pre>';
		print_r($val);
		echo '</pre>';
	}
}




if( ! function_exists('pre')){
	/**
	* 调试时的打印并终止函数，可以用来打印数组字符串对象等等
	* 
	* @author NingerJohn
	* @param mixed $val 
	* @return NULL
	* 
	*/
	function pre($val){
		echo '<pre>';
		print_r($val);
		echo '</pre>';
		exit;
	}
}




















// FileName: extra_helper.php
// Filepath: application/helpers/extra_helper.php