<?php
return yii\helpers\ArrayHelper::merge(
	require( __DIR__ . '/main.php' ),
	require( __DIR__ . '/main-env.php' ),
	require( __DIR__ . '/test.php' ),
	[
		'components' => [
			'db' => [
				'class' => 'yii\db\Connection',
				'dsn' => 'mysql:host=localhost;dbname=shopdemo_test',
				'username' => 'shopdemo',
				'password' => 'Demo#Shop*90x*',
				'charset' => 'utf8'
			]
		]
	]
);
