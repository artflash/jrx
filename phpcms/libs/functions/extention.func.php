<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 
 function custom_file_exists($file)
 {
	$isFile = false;
	$starStr = "http://www.jianrenxiao.com/";
	$len1 = strlen($starStr);
	$len2 = strlen($file);
	$newStr = substr($file,$len1,$len2);
	if(file_exists($newStr))
	{
		$isFile = true;
	}
	else
	{
		$isFile = false;
	}
	return $isFile;
 }

 
?>