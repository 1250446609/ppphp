<?php
if ( ! defined('PPPHP')) exit('�Ƿ����');
//����EZSQL �ļ�
include_once CORE.'/db/'.$db['type'].'/'.$db['type'].'.php';



class model extends ppphpm
{
	//��ʼ��
	//$db array 
	public function model()
	{
		echo 1;
	}
}