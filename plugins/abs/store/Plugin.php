<?php namespace Abs\Store;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Store',
            'description' => 'No description provided yet...',
            'author'      => 'Abs',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Abs\Store\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'abs.store.some_permission' => [
                'tab' => 'Store',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'store' => [
                'label'       => 'Store',
                'url'         => Backend::url('abs/store/categories'),
                'icon'        => 'icon-shopping-bag',
                'permissions' => ['abs.store.*'],
                'order'       => 500,
                'sideMenu'  => [
                    'categories' => [
                        'label'         => 'категории',
                        'icon'          => 'icon-object-ungroup',
                        'url'           => Backend::url('abs/store/categories'),
                        'permissions'   => ['abs.store.*'],
                    ],
                    'products' => [
                        'label'         => 'продукты',
                        'icon'          => 'icon-object-group',
                        'url'           => Backend::url('abs/store/products'),
                        'permissions'   => ['abs.store.*'],
                    ],
                    'prices' => [
                        'label'         => 'Цены',
                        'icon'          => 'icon-rub',
                        'url'           => Backend::url('abs/store/prices'),
                        'permissions'   => ['abs.store.*'],
                    ],
                    'currencies' => [
                        'label'         => 'валюты',
                        'icon'          => 'icon-gg',
                        'url'           => Backend::url('abs/store/currencies'),
                        'permissions'   => ['abs.store.*'],
                    ]
                ]
            ],
        ];
    }
}
