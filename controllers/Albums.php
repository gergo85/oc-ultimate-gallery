<?php namespace Indikator\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use Lang;

class Albums extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['indikator.gallery.albums'];

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Indikator.Gallery', 'gallery', 'albums');
    }

    public function onActivateAlbums()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Albums::where('status', 2)->find($itemId)) {
                    continue;
                }

                $item->update(['status' => 1]);
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.activate'));
        }

        return $this->listRefresh();
    }

    public function onDeactivateAlbums()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Albums::where('status', 1)->find($itemId)) {
                    continue;
                }

                $item->update(['status' => 2]);
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.deactivate'));
        }

        return $this->listRefresh();
    }

    public function onRemoveAlbums()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Albums::find($itemId)) {
                    continue;
                }

                $item->delete();
            }

            Flash::success(Lang::get('indikator.gallery::lang.flash.remove'));
        }

        return $this->listRefresh();
    }
}
