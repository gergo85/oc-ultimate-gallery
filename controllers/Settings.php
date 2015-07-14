<?php namespace Indikator\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Settings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Gallery', 'gallery', 'settings');
    }
}
