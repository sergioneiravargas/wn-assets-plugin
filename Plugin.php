<?php

namespace Butils\Assets;

use System\Classes\PluginBase;
use Backend\Facades\Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Butils Assets',
            'description' => 'Provides functionality to manage and display Butils assets.',
            'author' => 'Sergio Neira',
            'icon' => 'icon-list'
        ];
    }

    public function registerComponents()
    {
    }

    public function registerNavigation()
    {
        return [

            'assets' => [
                'label' => 'Assets',
                'url' => Backend::url('butils/assets/assets'),
                'icon' => 'icon-list-ul',
                'sideMenu' => [
                    'assets' => [
                        'label' => 'Assets',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('butils/assets/assets'),
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'icon' => 'icon-sitemap',
                        'url' => Backend::url('butils/assets/categories'),
                    ],
                ]
            ]
        ];
    }

    public function registerSettings()
    {
    }


    public function registerPermissions()
    {
        return [
            'butils.assets.*' => [
                'label' => 'Manage Butils assets',
                'tab' => 'Assets'
            ]
        ];
    }
}
