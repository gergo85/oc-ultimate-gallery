<?php namespace Indikator\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use DB;
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
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds))
        {
            foreach ($checkedIds as $objectId)
            {
                if (DB::table('gallery_albums')->where('id', $objectId)->where('status', 2)->count() == 1)
                {
                    DB::table('gallery_albums')->where('id', $objectId)->update(array('status' => 1));
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.booking.activate_succes'));
        }

        return $this->listRefresh('manage');
    }

    public function onDeactivateAlbums()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds))
        {
            foreach ($checkedIds as $objectId)
            {
                if (DB::table('gallery_albums')->where('id', $objectId)->where('status', 1)->count() == 1)
                {
                    DB::table('gallery_albums')->where('id', $objectId)->update(array('status' => 2));
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.booking.deactivate_succes'));
        }

        return $this->listRefresh('manage');
    }

    public function onRemoveAlbums()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds))
        {
            foreach ($checkedIds as $objectId)
            {
                if (DB::table('gallery_albums')->where('id', $objectId)->count() == 1)
                {
                    DB::table('gallery_albums')->where('id', $objectId)->delete();
                }
            }

            Flash::success(Lang::get('indikator.gallery::lang.booking.remove_succes'));
        }

        return $this->listRefresh('manage');
    }
}
