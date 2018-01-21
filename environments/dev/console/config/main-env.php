<?php

return [
	'bootstrap' => [ 'gii' ],
	'modules' => [
		'gii' => 'yii\gii\Module'
	],
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'http://localhost/shopdemo/frontend/web'
		],
		// CMG Modules - Core
		'migration' => [
			'class' => 'cmsgears\core\common\components\Migration',
			'cmgPrefix' => 'cmg_',
			'sitePrefix' => 'site_',
			'siteName' => 'CMSGears',
			'siteTitle' => 'Shop Demo',
			'siteMaster' => 'demomaster',
			'primaryDomain' => 'cmsgears.com',
			'defaultSite' => 'http://localhost/shopdemo/frontend/web',
			'defaultAdmin' => 'http://localhost/shopdemo/backend/web',
			'uploadsUrl' => 'http://localhost/shopdemo/uploads'
		]
	]
];
