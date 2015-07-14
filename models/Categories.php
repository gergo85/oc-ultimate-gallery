<?php namespace Indikator\Gallery\Models;

use Model;
use Str;

class Categories extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    protected $table = 'gallery_categories';

    public $rules = [
        'name'    => 'required|between:1,100',
        'slug'    => 'between:1,100',
        'user_id' => 'between:1,999999|numeric',
        'status'  => 'required|between:1,2|numeric'
    ];

    public $belongsTo = [
        'user' => ['Indikator\Gallery\Models\User']
    ];

    public $translatable = ['name', 'labels', 'desc'];

    public function getUserIdOptions()
    {
        return User::getNameList();
    }

    public function beforeSave()
    {
        if (!isset($this->slug) || empty($this->slug)) {
            $this->slug = Str::slug($this->name);
        }
    }
}
