<?php namespace Indikator\Gallery\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Lang;
use Indikator\Gallery\Models\Albums as Album;
use Indikator\Gallery\Models\Categories as Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.gallery::lang.category.name',
            'description' => 'indikator.gallery::lang.category.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'image' => [
                'title'       => 'indikator.gallery::lang.category.show_image',
                'default'     => 'true',
                'type'        => 'dropdown',
                'options'     => [
                    'true'  => Lang::get('indikator.gallery::lang.category.optionstrue'),
                    'false' => Lang::get('indikator.gallery::lang.category.optionsfalse')
                ]
            ],
            'desc' => [
                'title'       => 'indikator.gallery::lang.category.show_desc',
                'default'     => 'true',
                'type'        => 'dropdown',
                'options'     => [
                    'true'  => Lang::get('indikator.gallery::lang.category.optionstrue'),
                    'false' => Lang::get('indikator.gallery::lang.category.optionsfalse')
                ]
            ],
            'sortOrder' => [
                'title'       => 'indikator.gallery::lang.category.order_title',
                'description' => 'indikator.gallery::lang.category.order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc',
                'options'     => [
                    'title asc'         => Lang::get('indikator.gallery::lang.sorting.title_asc'),
                    'title desc'        => Lang::get('indikator.gallery::lang.sorting.title_desc'),
                    'created_at asc'    => Lang::get('indikator.gallery::lang.sorting.created_at_asc'),
                    'created_at desc'   => Lang::get('indikator.gallery::lang.sorting.created_at_desc'),
                    'updated_at asc'    => Lang::get('indikator.gallery::lang.sorting.updated_at_asc'),
                    'updated_at desc'   => Lang::get('indikator.gallery::lang.sorting.updated_at_desc'),
                    'published_at asc'  => Lang::get('indikator.gallery::lang.sorting.published_at_asc'),
                    'published_at desc' => Lang::get('indikator.gallery::lang.sorting.published_at_desc')
                ]
            ],
            'categoryPage' => [
                'title'       => 'indikator.gallery::lang.category.page_title',
                'description' => 'indikator.gallery::lang.category.page_description',
                'type'        => 'dropdown',
                'default'     => 'gallery'
            ]
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRender()
    {
        $this->image = $this->property('image');
        $this->desc = $this->property('desc');
    }

    public function onRun()
    {
        $this->currentCategorySlug = $this->page['currentCategorySlug'] = $this->property('slug');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->categories = $this->page['categories'] = $this->loadCategories();
    }

    protected function loadCategories()
    {
        $categories = Category::orderBy('name')->where('status', 1)->get();

        return $categories;
    }
}
