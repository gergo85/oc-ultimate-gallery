<?php namespace Indikator\Gallery\Models;

use Model;

class Albums extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'gallery_albums';

    public $rules = [
        'name'        => 'required|between:1,100',
        'slug'        => ['between:1,100', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:gallery_albums'],
        'user_id'     => 'between:1,999999|numeric',
        'category_id' => 'between:0,999|numeric',
        'status'      => 'required|between:1,2|numeric'
    ];

    protected $slugs = ['slug' => 'name'];

    public $belongsTo = [
        'user'     => ['Indikator\Gallery\Models\User'],
        'category' => ['Indikator\Gallery\Models\Category']
    ];

    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order']
    ];

    public $translatable = ['name', 'labels', 'desc'];

    public function getUserIdOptions()
    {
        return User::getNameList();
    }

    public function getCategoryIdOptions()
    {
        return Category::getNameList();
    }

    public function afterDelete()
    {
        $this->images && $this->images->delete();
    }
}
