<?php
if ( ! defined('PPPHP')) exit('�Ƿ����');

class home extends ppphp 
{
	public function home()
	{
		
	}
	public function index()
	{
		$t = $this->b('t');
		$m = $this->m('goods');
		$a = 'ss';

		$t->assign('a',$a);
		$t->display('index.tpl');
	}
}