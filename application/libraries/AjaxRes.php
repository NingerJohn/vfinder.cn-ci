<?php
class AjaxRes {
	const STATUS_SUCCESS = 0;
	const STATUS_ERROR = 1;
	private $_arrRes;
	private $_ci;
	function __construct() {
		$this->_arrRes = array (
				'status' => self::STATUS_SUCCESS,
				'statusinfo' => '操作成功' 
		);
		$this->_ci = & get_instance ();
	}
	public function output() {
		$this->_ci->output->set_output ( $this->toJson () );
	}
	public function toJson() {
		return json_encode ( $this->_arrRes );
	}
	public function setStatusError() {
		$this->_arrRes ['status'] = self::STATUS_ERROR;
	}
	public function setStatusSuccess() {
		$this->_arrRes ['status'] = self::STATUS_SUCCESS;
	}
	public function setStatusInfo($strStatusInfo) {
		$this->_arrRes ['statusinfo'] = $strStatusInfo;
	}
	public function set($key, $val) {
		$this->_arrRes [$key] = $val;
	}
}