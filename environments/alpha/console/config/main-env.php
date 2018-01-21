<?php

return [
	'bootstrap' => [ 'gii' ],
	'modules' => [
		'gii' => 'yii\gii\Module'
	],
	'components' => [
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'baseUrl' => 'https://alpha.cmsgears.com/shopdemo/frontend/web'
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
			'defaultSite' => 'https://alpha.cmsgears.com/shopdemo/frontend/web',
			'defaultAdmin' => 'https://alpha.cmsgears.com/shopdemo/backend/web',
			'uploadsUrl' => 'https://alpha.cmsgears.com/shopdemo/uploads'
		]
	]
];
