<?php

namespace Sntools\Assets;

use System\Classes\PluginBase;
use Backend\Facades\Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Sntools Assets',
            'description' => 'Provides functionality to manage and display Sntools assets.',
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
                'url' => Backend::url('sntools/assets/assets'),
                'icon' => 'icon-list-ul',
                'sideMenu' => [
                    'assets' => [
                        'label' => 'Assets',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('sntools/assets/assets'),
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'icon' => 'icon-sitemap',
                        'url' => Backend::url('sntools/assets/categories'),
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
            'sntools.assets.*' => [
                'label' => 'Manage Sntools assets',
                'tab' => 'Assets'
            ]
        ];
    }
}
