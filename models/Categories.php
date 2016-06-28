<?php namespace Indikator\Gallery\Models;

use Model;

class Categories extends Model
{
    use \October\Rain\Database\Traits\Sluggable;
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'gallery_categories';

    public $rules = [
        'name'    => 'required|between:1,100',
        'slug'    => ['between:1,100', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:gallery_categories'],
        'user_id' => 'between:1,999999|numeric',
        'status'  => 'required|between:1,2|numeric'
    ];

    protected $slugs = ['slug' => 'name'];

    public $belongsTo = [
        'user' => ['Indikator\Gallery\Models\User']
    ];

    public $translatable = ['name', 'labels', 'desc'];

    public function getUserIdOptions()
    {
        return User::getNameList();
    }
}
