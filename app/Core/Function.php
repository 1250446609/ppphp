<?php
if( !defined('PPPHP')) exit('�Ƿ����');
//ȫ�ֺ���
if(!function_exists('load'))
{
	/**
	 * ���Զ�����
	 * 
	 * @param 	string 		$class_name 	������
	 * 
	 * @return 	boolean 	true|false
	 */	
	function load($class_name)
	{  	
		$file = PPPHP.$class_name.'.class.php';
		echo $file;
		if(is_file($file))
		{
			echo $file;
		}
		return require $class_name.'.class.php';
	}
	spl_autoload_register('load');
}