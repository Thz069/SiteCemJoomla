<?php defined('_JEXEC') or die; <?php
	$option = array();
	$option['driver']='mysql';
	$option['host'] = 'localhost';
	$option['user'] = 'root';
	$option ['password']='';
	$option ['database']= 'cem';
	$option ['prefix']='';
	
	
	$db=JDatabaseDriver::getInstance($option);
	
	$query = $db-> getQuery(true)
	$query->select($db->quoteName('name'));
	$query->from(@db->quoteName('equipments'));
	
	$db->setQuery($query);
	$result = $db->loadRow();
	print_r($result);
	?> ?>