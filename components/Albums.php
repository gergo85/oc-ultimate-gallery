<?php namespace Indikator\Gallery\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Lang;
use Indikator\Gallery\Models\Albums as Album;

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
                'type'    => 'dropdown',
                'default' => 'true',
                'options' => ['true' => Lang::get('indikator.gallery::lang.album.optionstrue'), 'false' => Lang::get('indikator.gallery::lang.album.optionsfalse')]
            ],
            'desc' => [
                'title'   => 'indikator.gallery::lang.album.show_desc',
                'type'    => 'dropdown',
                'default' => 'true',
                'options' => ['true' => Lang::get('indikator.gallery::lang.album.optionstrue'), 'false' => Lang::get('indikator.gallery::lang.album.optionsfalse')]
            ],
            'noImagesMessage' => [
                'title'             => 'indikator.gallery::lang.album.no_images_title',
                'description'       => 'indikator.gallery::lang.album.no_images_description',
                'type'              => 'string',
                'default'           => Lang::get('indikator.gallery::lang.album.no_images_found'),
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'indikator.gallery::lang.album.order_title',
                'description' => 'indikator.gallery::lang.album.order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc',
                'options'     => ['title asc' => Lang::get('indikator.gallery::lang.sorting.title_asc'), 'title desc' => Lang::get('indikator.gallery::lang.sorting.title_desc'), 'created_at asc' => Lang::get('indikator.gallery::lang.sorting.created_at_asc'), 'created_at desc' => Lang::get('indikator.gallery::lang.sorting.created_at_desc'), 'updated_at asc' => Lang::get('indikator.gallery::lang.sorting.updated_at_asc'), 'updated_at desc' => Lang::get('indikator.gallery::lang.sorting.updated_at_desc'), 'published_at asc' => Lang::get('indikator.gallery::lang.sorting.published_at_asc'), 'published_at desc' => Lang::get('indikator.gallery::lang.sorting.published_at_desc')]
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

    public function onRender()
    {
        $this->image = $this->property('image');
        $this->desc = $this->property('desc');

        $albums = new Album;
        $this->albums = $this->page['albums'] = $albums->where('status', 1)->get();
    }
}
