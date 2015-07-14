<?php namespace Indikator\Gallery\Components;

use Cms\Classes\ComponentBase;
use Indikator\Gallery\Models\Albums as Album;
use Lang;

class Images extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'indikator.gallery::lang.idgallery.title'
        ];
    }

    public function defineProperties()
    {
        return [
            'idGallery' => [
                'title'             => 'indikator.gallery::lang.idgallery.title',
                'description'       => 'indikator.gallery::lang.idgallery.description',
                'type'              => 'dropdown'
            ],
            'lang' => [
                'title'             => 'indikator.gallery::lang.misc.title',
                'description'       => 'indikator.gallery::lang.misc.description',
                'type'              => 'string',
                'default'           => Lang::get('indikator.gallery::lang.misc.defaultname')
            ],
            'jqueryinject' => [
                'title'             => 'indikator.gallery::lang.jqueryinject.title',
                'description'       => 'indikator.gallery::lang.jqueryinject.description',
                'type'              => 'dropdown',
                'default'           => 'yes',
                'options'           => ['yes' => 'indikator.gallery::lang.jqueryinject.optionsyes', 'no' => 'indikator.gallery::lang.jqueryinject.optionsno']
            ],
            'thumbnail' => [
                'title'             => 'indikator.gallery::lang.thumbnail.title',
                'description'       => 'indikator.gallery::lang.thumbnail.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.options'),
                'options'           => ['true' => 'indikator.gallery::lang.thumbnail.optionstrue', 'false' => 'indikator.gallery::lang.thumbnail.optionsfalse']
            ],
            'caption' => [
                'title'             => 'indikator.gallery::lang.caption.title',
                'description'       => 'indikator.gallery::lang.caption.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.options'),
                'options'           => ['true' => 'indikator.gallery::lang.caption.optionstrue', 'false' => 'indikator.gallery::lang.caption.optionsfalse']
            ],
            'desc' => [
                'title'             => 'indikator.gallery::lang.desc.title',
                'description'       => 'indikator.gallery::lang.desc.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.options'),
                'options'           => ['true' => 'indikator.gallery::lang.desc.optionstrue', 'false' => 'indikator.gallery::lang.desc.optionsfalse']
            ],
            'counter' => [
                'title'             => 'indikator.gallery::lang.counter.title',
                'description'       => 'indikator.gallery::lang.counter.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.options'),
                'options'           => ['true' => 'indikator.gallery::lang.counter.optionstrue', 'false' => 'indikator.gallery::lang.counter.optionsfalse']
            ],
            'controls' => [
                'title'             => 'indikator.gallery::lang.controls.title',
                'description'       => 'indikator.gallery::lang.controls.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.options'),
                'options'           => ['true' => 'indikator.gallery::lang.controls.optionstrue', 'false' => 'indikator.gallery::lang.controls.optionsfalse']
            ],
            'preload' => [
                'title'             => 'indikator.gallery::lang.preload.title',
                'description'       => 'indikator.gallery::lang.preload.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'indikator.gallery::lang.preload.validationMessage',
                'default'           => '1',
                'group'             => Lang::get('indikator.gallery::lang.groups.options')
            ],
            'mode' => [
                'title'             => 'indikator.gallery::lang.mode.title',
                'description'       => 'indikator.gallery::lang.mode.description',
                'type'              => 'dropdown',
                'default'           => 'slide',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects'),
                'options'           => ['slide' => 'indikator.gallery::lang.mode.optionsslide', 'fade' => 'indikator.gallery::lang.mode.optionsfade']
            ],
            'speed' => [
                'title'             => 'indikator.gallery::lang.speed.title',
                'description'       => 'indikator.gallery::lang.speed.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'indikator.gallery::lang.speed.validationMessage',
                'default'           => '500',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects')
            ],
            'loop' => [
                'title'             => 'indikator.gallery::lang.loop.title',
                'description'       => 'indikator.gallery::lang.loop.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects'),
                'options'           => ['true' => 'indikator.gallery::lang.loop.optionstrue', 'false' => 'indikator.gallery::lang.loop.optionsfalse']
            ],
            'auto' => [
                'title'             => 'indikator.gallery::lang.auto.title',
                'description'       => 'indikator.gallery::lang.auto.description',
                'type'              => 'dropdown',
                'default'           => 'false',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects'),
                'options'           => ['true'=>'indikator.gallery::lang.auto.optionstrue', 'false' => 'indikator.gallery::lang.auto.optionsfalse']
            ],
            'pause' => [
                'title'             => 'indikator.gallery::lang.pause.title',
                'description'       => 'indikator.gallery::lang.pause.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'indikator.gallery::lang.pause.validationMessage',
                'default'           => '2000',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects')
            ],
            'escKey' => [
                'title'             => 'indikator.gallery::lang.escKey.title',
                'description'       => 'indikator.gallery::lang.escKey.description',
                'type'              => 'dropdown',
                'default'           => 'true',
                'group'             => Lang::get('indikator.gallery::lang.groups.effects'),
                'options'           => ['true' => 'indikator.gallery::lang.escKey.optionstrue', 'false' => 'indikator.gallery::lang.escKey.optionsfalse']
            ],
            'height' => [
                'title'             => 'indikator.gallery::lang.height.title',
                'description'       => 'indikator.gallery::lang.height.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'indikator.gallery::lang.height.validationMessage',
                'default'           => '70',
                'group'             => Lang::get('indikator.gallery::lang.groups.thumbs')
            ],
            'width' => [
                'title'             => 'indikator.gallery::lang.width.title',
                'description'       => 'indikator.gallery::lang.width.description',
                'type'              => 'string',
                'validationPattern' => '^[\d]+$',
                'validationMessage' => 'indikator.gallery::lang.width.validationMessage',
                'default'           => '100',
                'group'             => Lang::get('indikator.gallery::lang.groups.thumbs')
            ],
            'resizer' => [
                'title'             => 'indikator.gallery::lang.resizer.title',
                'description'       => 'indikator.gallery::lang.resizer.description',
                'type'              => 'dropdown',
                'default'           => 'auto',
                'options'           => ['auto' => 'indikator.gallery::lang.resizer.optionsauto', 'exact' => 'indikator.gallery::lang.resizer.optionsexact', 'portrait' => 'indikator.gallery::lang.resizer.optionsportrait', 'landscape' => 'indikator.gallery::lang.resizer.optionslandscape', 'crop' => 'indikator.gallery::lang.resizer.optionscrop'],
                'group'             => Lang::get('indikator.gallery::lang.groups.thumbs')
            ]
        ];
    }

    public function getidGalleryOptions()
    {
        return Album::select('id', 'name')->orderBy('name')->get()->lists('name', 'id');
    }

    public function onRun()
    {
        if ($this->property('jqueryinject') == 'yes') {
            $this->addJs('assets/js/jquery.min.js');
        }

        $this->addJs('assets/js/lightGallery.min.js');
        $this->addCss('assets/css/lightGallery.css');
    }

    public function onRender()
    {
        $gallery = new Album;
        $this->gallery = $this->page['gallery'] = $gallery->where('id', $this->property('idGallery'))->first();

        foreach ($this->getProperties() as $key => $value) {
            $this->page[$key] = $value;
        }
    }
}
