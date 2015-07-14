<?php namespace Indikator\Gallery\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Indikator\Gallery\Models\Albums as Album;
use Lang;

class Albums extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.gallery::lang.album.name',
            'description' => 'indikator.gallery::lang.album.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'image' => [
                'title'   => 'indikator.gallery::lang.album.show_image',
                'default' => 'true',
                'type'    => 'dropdown',
                'options' => ['true' => Lang::get('indikator.gallery::lang.album.optionstrue'), 'false' => Lang::get('indikator.gallery::lang.album.optionsfalse')]
            ],
            'desc' => [
                'title'   => 'indikator.gallery::lang.album.show_desc',
                'default' => 'true',
                'type'    => 'dropdown',
                'options' => ['true' => Lang::get('indikator.gallery::lang.album.optionstrue'), 'false' => Lang::get('indikator.gallery::lang.album.optionsfalse')]
            ],
            'noImagesMessage' => [
                'title'             => 'indikator.gallery::lang.album.no_images_title',
                'description'       => 'indikator.gallery::lang.album.no_images_description',
                'type'              => 'string',
                'default'           => 'indikator.gallery::lang.album.no_images_found',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'indikator.gallery::lang.album.order_title',
                'description' => 'indikator.gallery::lang.album.order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc'
            ],
            'albumPage' => [
                'title'       => 'indikator.gallery::lang.album.page_title',
                'description' => 'indikator.gallery::lang.album.page_description',
                'type'        => 'dropdown',
                'default'     => 'gallery/album/:slug'
            ]
        ];
    }

    public function getAlbumPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        return Album::$allowedSortingOptions;
    }

    public function onRender()
    {
        $this->image = $this->property('image');
        $this->desc = $this->property('desc');

        $albums = new Album;
        $this->albums = $this->page['albums'] = $albums->where('status', 1)->get();
    }
}
