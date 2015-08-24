<?php namespace Indikator\Gallery\Models;

use Model;
use Str;

class Albums extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'gallery_albums';

    public $rules = [
        'name'        => 'required|between:1,100',
        'slug'        => ['between:1,100', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i'],
        'user_id'     => 'between:1,999999|numeric',
        'category_id' => 'between:0,999|numeric',
        'status'      => 'required|between:1,2|numeric'
    ];

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

    public function beforeSave()
    {
        if (!isset($this->slug) || empty($this->slug)) {
            $this->slug = Str::slug($this->name);
        }
    }
}
