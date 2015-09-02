<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Index extends MY_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( '...' );
		$this->load->library ( '...' );
	}
	/**
	 * 登录提交
	 */
	public function loginsubmit() {
		$ajaxRes = new AjaxRes ();
		$this->_sendJsonHeader ();
		$ajaxRes->setStatusError ();
		try {
			// 接收参数并验证
			// 邮箱
			$email = htmlspecialchars ( trim ( $this->_getParam ( 'user' ) ) );
			if ($email == '') {
				throw new Exception ( '请输入用户名' );
			}
			// 密码
			$password = htmlspecialchars ( trim ( $this->_getParam ( 'passwd' ) ) );
			if ($password == '') {
				throw new Exception ( '请输入您的密码' );
			}
			// 验证码
			$checkcode = htmlspecialchars ( trim ( $this->_getParam ( 'checkcode' ) ) );
			if ($checkcode == '') {
				throw new Exception ( '请输入您的验证码' );
			}
			
			if (strtolower ( $checkcode ) != $this->session->userdata ( 'checkcode' )) {
				
				throw new Exception ( '验证码错误' );
			}
			
			$strErrMsg = User::valid ( $email, $password );
			if ($strErrMsg) {
				throw new Exception ( $strErrMsg );
			}
			$ajaxRes->setStatusSuccess ();
		} catch ( Exception $e ) {
			log_message ( 'error', 'action default-account-loginsubmit failed:' . $e->getMessage () );
			$ajaxRes->setStatusInfo ( $e->getMessage () );
		}
		$ajaxRes->output ();
	}

	/**
	 * 刷新验证码  设置验证码
	 */
	public function getRefreshImg() {
		//echo $this->captcha->doimg ();
		// 
		// $this->session->set_userdata('checkcode','1234');
		//$this->session->set_userdata ( 'checkcode', $this->captcha->getCode () );
		// echo $this->session->userdata('checkcode');
	}
}
