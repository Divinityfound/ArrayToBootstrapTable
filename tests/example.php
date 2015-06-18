<?php
	require_once(__DIR__ . '/../vendor/autoload.php');

	$data = new \Divinityfound\ArrayToBootstrapTable\Table();

	$keys = array('id','name');
	$values = array(
			array(1,'Divinity'),
			array(2,'Found'));

	$table = $data->setKeys($keys)->
					setValues($values)->
					buildTable();
	echo $table;
?>