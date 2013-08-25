<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.

$maincfg = include dirname(__FILE__).DIRECTORY_SEPARATOR.'main.php';


return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Easyui Site Console Application',

	// preloading 'log' component
	'preload'=>array('log'),			

	// application components
	'components'=>array(
		'db'=> $maincfg['components']['db'],		
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),
);