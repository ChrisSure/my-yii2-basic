<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
    
		'page/<slug:\w+>' => 'blog/pages/view',
		'category/<slug:\w+>' => 'blog/category/view',
		
		
		//---------------------Admin------------------------//
		
		'admin/pages' => 'admin/blog/pages/index',
		'admin/pages/create' => 'admin/blog/pages/create',
		'admin/pages/update/<id:\d+>' => 'admin/blog/pages/update',
		'admin/pages/view/<id:\d+>' => 'admin/blog/pages/view',
		'admin/pages/move-up/<id:\d+>' => 'admin/blog/pages/move-up',
	    'admin/pages/move-down/<id:\d+>' => 'admin/blog/pages/move-down',
		
		'admin/category' => 'admin/blog/category/index',
	    'admin/category/create' => 'admin/blog/category/create',
	    'admin/category/update/<id:\d+>' => 'admin/blog/category/update',
	    'admin/category/move-up/<id:\d+>' => 'admin/blog/category/move-up',
	    'admin/category/move-down/<id:\d+>' => 'admin/blog/category/move-down',
	    
	    'admin/user' => 'admin/auth/user/index',
	    'admin/user/create' => 'admin/auth/user/create',
	    'admin/user/update/<id:\d+>' => 'admin/auth/user/update',
	    'admin/user/password/<id:\d+>' => 'admin/auth/user/password',
	    'admin/user/view/<id:\d+>' => 'admin/auth/user/view',
	    
	    'admin/system/info' => 'admin/system/info/view',
	    'admin/system/setting' => 'admin/system/setting/view',
	    'admin/system/log' => 'admin/system/log/view',
	    
	    'admin/security' => 'admin/system/security/index',
		'admin/security/create' => 'admin/system/security/create',
		'admin/security/update/<id:\d+>' => 'admin/system/security/update',
		'admin/security/view/<id:\d+>' => 'admin/system/security/view',
		
		//---------------------Admin------------------------//
		
    ],
]
?>