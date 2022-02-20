<?php

namespace Sntools\Assets\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Assets extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['sntools.assets.*'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sntools.Assets', 'assets', 'assets');
    }
}
