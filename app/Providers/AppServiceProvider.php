<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
      $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

          $event->menu->add([
              'text'    => '仪表盘',
              'icon'    => 'nav-icon fas fa-tachometer-alt',
              'url'     => '/admin'
          ]);
          
          $event->menu->add('订单');
          $event->menu->add([
              'text' => 'SALES',
              'icon' => 'nav-icon fas fa-chart-bar',
              'submenu' => [
                [
                    'text' => '订单管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
                [
                    'text' => '物流管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],      
                [
                    'text' => '发票管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
                [
                    'text' => '售后管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
              ]
          ]);


          $event->menu->add('商品');
          $event->menu->add([
              'text' => 'CATELOG',
              'icon' => 'nav-icon fas fa-cubes',
              'submenu' => [
                [
                    'text' => '商品管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-cubes',
                ],
                [
                    'text' => '属性管理',
                    'url'  => route('admin.attributes.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],      
                [
                    'text' => '分类管理',
                    'url'  => route('admin.categories.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
                [
                    'text' => '属性组管理',
                    'url'  => route('admin.attribute_families.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
              ]
          ]);
          

          $event->menu->add('会员');
          $event->menu->add([
              'text' => 'CUSTOMERS',
              'icon' => 'nav-icon fas fa-users',
              'submenu' => [
                [
                    'text' => '会员管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
                [
                    'text' => '组管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ]
              ]
          ]);

          $event->menu->add('促销');
          $event->menu->add([
              'text' => 'PROMOTIONS',
              'icon' => 'nav-icon fas fa-users',
              'submenu' => [
                [
                    'text' => '优惠券管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ]
              ]
          ]);

          $event->menu->add('CMS');
          $event->menu->add([
              'text' => 'CMS',
              'icon' => 'nav-icon fas fa-users',
              'submenu' => [
                [
                    'text' => '公告管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ]
              ]
          ]);


          $event->menu->add('系统');
          $event->menu->add([
              'text'    => '系统设置',
              'icon'    => 'nav-icon fas fa-cogs',
              'submenu' => [
                [
                    'text' => '权限管理',
                    //'url'  => route('admin.permissions.index'),
                    'icon'    => 'nav-icon fas fa-ban',
                ],
                [
                    'text' => '角色管理',
                    'url'  => route('admin.roles.index'),
                    'icon'    => 'nav-icon fas fa-user',
                ],
                [
                    'text' => '菜单管理',
                    'url'  => '#',
                    'icon'    => 'nav-icon fas fa-bars',
                ],
                [
                    'text' => '用户管理',
                    'url'  => route('admin.users.index'),
                    'icon'    => 'nav-icon fas fa-users',
                ],
                [
                    'text' => '操作日志',
                    'url'  => '#',
                    'icon'    => 'nav-icon fas fa-history',
                ],
              ]
          ]);
      });
    }
}
