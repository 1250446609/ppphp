<?php
if ( ! defined('PPPHP')) exit('�Ƿ����');
require CORE.'/smarty/Smarty.class.php';
class T extends Smarty
{
        public function __construct() 
		{
        parent::__construct();
		$this->template_dir = VIEW; // ģ��Ŀ¼
		$this->compile_dir = APP.'/tmp'; //����Ŀ¼
		$this->cache_dir = APP.'/tmp'; //����Ŀ¼
		$this->cache_lifetime = 0; //����ʱ�� 

		$this->caching = false; //���淽ʽ 
		$this->allow_php_templates = FALSE;//ģ����ʹ��[php]  
		$this->left_delimiter = '{'; //�󶨽��
		$this->right_delimiter = '}'; //�Ҷ����
		$this->debugging = true;  //��������ģʽ}
		}
}