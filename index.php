<?php 
/* ========================================================================
 * PPPHP����ļ������ڶ��峣��
 * ========================================================================
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/kphcdr/ppphp/master/LICENSE)
 * ======================================================================== */
define('DEBUG', true);//����ģʽ

define('PPPHP',realpath('./'));	// ��Ŀ¼
//ϵͳ·��
define('CORE',PPPHP.'/core/');
define('APP', PPPHP.'/app/');

include CORE.'init.php';