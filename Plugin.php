<?php namespace Indikator\Gallery;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'indikator.gallery::lang.plugin.name',
            'description' => 'indikator.gallery::lang.plugin.description',
            'author'      => 'indikator.gallery::lang.plugin.author'
        ];
    }

    public function registerNavigation()
    {
        return [
            'gallery' => [
                'label'       => 'indikator.gallery::lang.menu.gallery',
                'url'         => Backend::url('indikator/gallery/albums'),
                'icon'        => 'icon-picture-o',
                'permissions' => ['indikator.gallery.*'],
                'order'       => 500,

                'sideMenu' => [
                    'albums' => [
                        'label'       => 'indikator.gallery::lang.menu.albums',
                        'url'         => Backend::url('indikator/gallery/albums'),
                        'icon'        => 'icon-file-image-o',
                        'permissions' => ['indikator.gallery.albums']
                    ],
                    'categories' => [
                        'label'       => 'indikator.gallery::lang.menu.categories',
                        'url'         => Backend::url('indikator/gallery/categories'),
                        'icon'        => 'icon-folder',
                        'permissions' => ['indikator.gallery.categories']
                    ],
                    'settings' => [
                        'label'       => 'indikator.gallery::lang.menu.settings',
                        'url'         => Backend::url('indikator/gallery/settings'),
                        'icon'        => 'icon-cog',
                        'permissions' => ['indikator.gallery.settings']
                    ]
                ]
            ]
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Indikator\Gallery\ReportWidgets\Albums' => [
                'label'   => 'indikator.gallery::lang.albums.widget',
                'context' => 'dashboard'
            ],
            'Indikator\Gallery\ReportWidgets\Categories' => [
                'label'   => 'indikator.gallery::lang.categories.widget',
                'context' => 'dashboard'
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'Indikator\Gallery\Components\Images'     => 'images',
            'Indikator\Gallery\Components\Albums'     => 'albums',
            'Indikator\Gallery\Components\Categories' => 'categories'
        ];
    }

    public function registerPermissions()
    {
        return [
            'indikator.gallery.albums'     => ['tab' => 'indikator.gallery::lang.menu.gallery', 'label' => 'indikator.gallery::lang.permission.albums'],
            'indikator.gallery.categories' => ['tab' => 'indikator.gallery::lang.menu.gallery', 'label' => 'indikator.gallery::lang.permission.categories'],
            'indikator.gallery.settings'   => ['tab' => 'indikator.gallery::lang.menu.gallery', 'label' => 'indikator.gallery::lang.permission.settings']
        ];
    }
}
