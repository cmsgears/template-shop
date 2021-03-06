<?php

$params = yii\helpers\ArrayHelper::merge(
	require( __DIR__ . '/../../common/config/params.php' ),
	require( __DIR__ . '/params.php' )
);

return [
	'id' => 'app-site',
	'name' => 'Shop Demo',
	'version' => '1.0.0',
	'basePath' => dirname( __DIR__ ),
	'controllerNamespace' => 'frontend\controllers',
	'defaultRoute' => 'core/site/index',
	'catchAll' => null,
	'bootstrap' => [
		'log',
		'core', 'cms', 'forms', 'snsConnect', 'newsletter', 'notify', 'cart', 'shop',
		'foxSlider'
	],
	'modules' => [
		'core' => [
			'class' => 'cmsgears\core\frontend\Module'
		],
		'cms' => [
			'class' => 'cmsgears\cms\frontend\Module'
		],
		'forms' => [
			'class' => 'cmsgears\forms\frontend\Module'
		],
		'snsconnect' => [
			'class' => 'cmsgears\social\connect\frontend\Module'
		],
		'newsletter' => [
			'class' => 'cmsgears\newsletter\frontend\Module'
		],
		'notify' => [
			'class' => 'cmsgears\notify\frontend\Module'
		],
        'cart' => [
            'class' => 'cmsgears\cart\admin\Module'
        ],
        'shop' => [
            'class' => 'cmsgears\shop\admin\Module'
        ]
	],
	'components' => [
		'view' => [
			'theme' => [
				'class' => 'themes\shop\Theme',
				'childs' => [
					// Child themes to override theme css and to add additional js
				]
			]
		],
		'request' => [
			'csrfParam' => '_csrf-cmg-shop-site',
			'parsers' => [
				'application/json' => 'yii\web\JsonParser'
			]
		],
		'user' => [
			'identityCookie' => [ 'name' => '_identity-cmg-shop-site', 'httpOnly' => true ]
		],
		'session' => [
			'name' => 'cmg-shop-site'
		],
		'errorHandler' => [
			'errorAction' => 'core/site/error'
		],
		'assetManager' => [
			'bundles' => require( __DIR__ . '/' . ( YII_ENV_PROD ? 'assets-prod.php' : 'assets-dev.php' ) )
		],
		'urlManager' => [
			'rules' => [
				// TODO: Use Group Rule for api and apix prefix
				// api request rules ---------------------------
				// Generic - 3, 4 and 5 levels - catch all
				'api/<module:\w+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/api/<controller>/<action>',
				'api/<module:\w+>/<controller:[\w\-]+>/<pcontroller:[\w\-]+>/<action:[\w\-]+>' => '<module>/api/<controller>/<pcontroller>/<action>',
				'api/<module:\w+>/<pcontroller1:\w+>/<pcontroller2:\w+>/<controller:\w+>/<action:[\w\-]+>' => '<module>/api/<pcontroller1>/<pcontroller2>/<controller>/<action>',
				// apix request rules --------------------------
				// Forms - site forms
				'apix/form/<slug:[\w\-]+>' => 'forms/apix/form/submit',
				// Core - 2 levels
				'apix/<controller:[\w\-]+>/<action:[\w\-]+>' => 'core/apix/<controller>/<action>',
				// Generic - 3, 4 and 5 levels - catch all
				'apix/<module:\w+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/apix/<controller>/<action>',
				'apix/<module:\w+>/<pcontroller:[\w\-]+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/apix/<pcontroller>/<controller>/<action>',
				'apix/<module:\w+>/<pcontroller1:[\w\-]+>/<pcontroller2:[\w\-]+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/apix/<pcontroller1>/<pcontroller2>/<controller>/<action>',
				// regular request rules -----------------------
				// SNS Connect
				'sns/<controller:\w+>/<action:[\w\-]+>' => 'snsconnect/<controller>/<action>',
				// TODO: Use Group Rule for blog
				// Blog Posts - Public - search, category, tag and single
				'blog/search' => 'cms/post/search',
				'blog/category/<slug:[\w\-]+>' => 'cms/post/category',
				'blog/tag/<slug:[\w\-]+>' => 'cms/post/tag',
				'blog/<slug:[\w\-]+>' => 'cms/post/single',
				// Blog Posts - Private 2 and 3 levels
				'blog/manage/<action:[\w\-]+>' => 'cms/post/<action>',
				'blog/<controller:\w+>/<action:[\w\-]+>' => 'cms/post/<controller>/<action>',
				'blog/<pcontroller:\w+>/<controller:\w+>/<action:[\w\-]+>' => 'cms/post/<pcontroller>/<controller>/<action>',
				// Forms
				'form/<slug:[\w\-]+>' => 'forms/form/single',
				// Core Module Pages
				'<controller:[\w\-]+>/<action:[\w\-]+>' => 'core/<controller>/<action>',
				// Module Pages - 2 and 3 levels - catch all
				'<module:\w+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/<controller>/<action>',
				'<module:\w+>/<pcontroller:[\w\-]+>/<controller:\w+>/<action:[\w\-]+>' => '<module>/<pcontroller>/<controller>/<action>',
				// Standard Pages
				'<action:(home|profile|account|address|settings)>' => 'core/user/<action>',
				'<action:(login|logout|register|forgot-password|reset-password|activate-account|confirm-account)>' => 'core/site/<action>',
				// CMS Pages
				'<slug:[\w\-]+>' => 'cms/page/single'
			]
		],
		'core' => [
			'loginRedirectPage' => '/home',
			'logoutRedirectPage' => '/'
		]
	],
	'params' => $params
];
