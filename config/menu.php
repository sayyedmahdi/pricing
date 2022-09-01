<?php

return [
    [
        'categoryName' => 'اصلی',
        'permission'   => 'view user',
        'subMenus'     => [
            [
                'name'       => 'صفحه اصلی' ,
                'url'        => 'dashboard' ,
                'icon'       => '<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>' ,
                'permission' => 'view user',
                'children'   => []
            ]
        ],
    ],
    [
        'categoryName' => 'کاربران ',
        'permission'   => 'view user',
        'subMenus'     => [
            [
                'name'     => 'مدیریت کاربران' ,
                'url'      => '#' ,
                'icon'     => '<i class="fas fa-users side-menu__icon"></i>' ,
                'children' => [
                    [
                        'name'         => 'لیست کاربران',
                        'url'          => '/user' ,
                        'icon'         => '<i class="fas fa-user side-menu__icon"></i>' ,
                        'permission'   => 'view user',
                    ],
                    [
                        'name'         => 'سطح دسترسی' ,
                        'url'          => '/access-control' ,
                        'icon'         => '' ,
                        'permission'   => '',
                    ],
                ]
            ]
        ]
    ],
    [
        'categoryName' => 'محصولات ',
        'permission'   => 'view all product',
        'subMenus'     => [
            [
                'name'     => 'مدیریت محصولات' ,
                'url'      => '#' ,
                'icon'     => '<i class="fa fa-gamepad side-menu__icon"></i>' ,
                'children' => [
                    [
                        'name'         => 'لیست محصولات',
                        'url'          => '/product' ,
                        'icon'         => '<i class="fa fa-gamepad side-menu__icon"></i>' ,
                        'permission'   => 'view all product',
                    ],
                ]
            ]
        ]
    ],
    [
        'categoryName' => 'دسته بندی',
        'permission'   => 'view user',
        'subMenus'     => [
            [
                'name'     => 'مدیریت دسته بندی' ,
                'url'      => '#' ,
                'icon'     => '<i class="fas fa-store side-menu__icon"></i>' ,
                'children' => [
                    [
                        'name'         => 'لیست دسته بندی ها',
                        'url'          => '/category' ,
                        'icon'         => '<i class="fas fa-store side-menu__icon"></i>' ,
                        'permission'   => 'view category',
                    ],
                ]
            ]
        ]
    ],
];
