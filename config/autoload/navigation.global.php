<?php
/**
 * @Created by PhpStorm.
 * @Project: XtCms
 * @User: Coopoo
 * @Copy Right: 2014
 * @Date: 2014-07-31
 * @Time: 20:02
 * @QQ: 259522
 * @FileName: navigation.global.php
 */
return [
    'navigation' => [
        'manager_navigation' => [
            [
                'label' => '首页',
                'route' => 'home'
            ], //end home
            [
                'label' => '设置',
                'route' => 'XtDb-admin',
                'pages' => [
                    [
                        'label' => '数据管理',
                        'route' => 'XtDb-admin'
                    ]
                ]
            ], //end XtDb-admin
            [
                'label' => '用户',
                'route' => 'Xt_User',
                'pages' => [
                    [
                        'label' => '用户管理',
                        'route' => 'Xt_User'
                    ]
                ]
            ], //end Xt_User
            [
                'label' => '角色管理',
                'route' => 'Xt_Role/page',
                'action' => 'list',
                'pages' => [
                    [
                        'label' => '角色添加',
                        'route' => 'Xt_Role/default',
                        'action' => 'add'
                    ],
                    [
                        'label' => '角色编辑',
                        'route' => 'Xt_Role/default',
                        'action' => 'edit'
                    ],
                    [
                        'label' => '角色管理',
                        'route' => 'Xt_Role/page',
                        'action' => 'list'
                    ]
                ]
            ], //end Xt_Role
            [
                'label' => '资源管理',
                'route' => 'Xt_Resource/page',
                'action' => 'list',
                'pages' => [
                    [
                        'label' => '资源添加',
                        'route' => 'Xt_Resource/default',
                        'action' => 'add'
                    ],
                    [
                        'label' => '资源编辑',
                        'route' => 'Xt_Resource/default',
                        'action' => 'edit'
                    ],
                    [
                        'label' => '资源管理',
                        'route' => 'Xt_Resource/page',
                        'action' => 'list'
                    ]
                ]
            ], //end Xt_Resource
        ]
    ],
    'service_manager' => [
        'factories' => [
            'manager_navigation' => 'XtBase\Service\NavigationFactory',
        ]
    ]
];