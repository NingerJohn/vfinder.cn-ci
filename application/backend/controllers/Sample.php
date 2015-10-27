<?php

/**
* 
*/
class ClassName extends AnotherClass
{
	
	function __construct()
	{
		# code...
		$arr1 = array('100','200','300','1.6%'); // 昨天
		$arr2 = array('99','201','350','1.9%'); // 今天
		foreach ($arr1 as $k => $v) {
			# code...
			if($arr1[$k] >= $arr2[$k] ){
				$temp = ($arr1[$k] - $arr2[$k]) / $arr1[$k];
				$percentage = '-'.($temp*100).'%';
			}else{

			}
		}
	}
}


























