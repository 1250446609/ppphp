<?php
if ( ! defined('PPPHP')) exit('�Ƿ����');

class home extends ppphp 
{
	public function home()
	{
		
	}
	public function index()
	{
		$t = $this->lib('T');
		$a = 'ss';

		$t->assign('a',$a);
		$t->display('test.tpl');
	}
}