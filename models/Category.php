<?php namespace Indikator\Gallery\Models;

use Model;
use Form;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'gallery_categories';

    public $rules = [
        'name' => 'required'
    ];

    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }

        return self::$nameList = self::isEnabled()->lists('name', 'id');
    }

    public static function formSelect($name, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getNameList(), $selectedValue, $options);
    }

    public function scopeIsEnabled($query)
    {
        return $query->where('status', 1);
    }
}
