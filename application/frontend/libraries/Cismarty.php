<?php   
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');   
require_once( APPPATH . 'libraries/libs/Smarty.class.php' );   
  
class Cismarty extends Smarty {   
    protected $ci;   
    function __construct(){
        parent::__construct();  
        $this->ci = & get_instance();   
        $this->ci->load->config('smarty');//加载smarty的配置文件   
        //获取相关的配置项
        $this->setTemplateDir($this->ci->config->item('template_dir'));   // 设置模板目录
        $this->setCompileDir($this->ci->config->item('compile_dir'));     // 设置编译目录
        $this->cache_dir      = $this->ci->config->item('cache_dir');     // 设置缓存目录
        $this->config_dir     = $this->ci->config->item('config_dir');    // 设置配置目录
        $this->caching        = $this->ci->config->item('caching');       // 设置是否缓存
        $this->cache_lifetime = $this->ci->config->item('lefttime');      // 设置缓存生命期 
    }
}