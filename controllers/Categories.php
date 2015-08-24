<?php namespace Indikator\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Backend\Models\UserPreferences;
use DB;
use Flash;
use Lang;

class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['indikator.gallery.categories'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Gallery', 'gallery', 'categories');
    }

    public function onActivateCategories()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (DB::table('gallery_categories')->where('id', $objectId)->where('status', 2)->count() == 1) {
                    DB::table('gallery_categories')->where('id', $objectId)->update(array('status' => 1));
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.activate'));
        }

        return $this->listRefresh('manage');
    }

    public function onDeactivateCategories()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (DB::table('gallery_categories')->where('id', $objectId)->where('status', 1)->count() == 1) {
                    DB::table('gallery_categories')->where('id', $objectId)->update(array('status' => 2));
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.deactivate'));
        }

        return $this->listRefresh('manage');
    }

    public function onRemoveCategories()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $objectId) {
                if (DB::table('gallery_categories')->where('id', $objectId)->count() == 1) {
                    DB::table('gallery_categories')->where('id', $objectId)->delete();
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.remove_succes'));
        }

        return $this->listRefresh('manage');
    }
}
