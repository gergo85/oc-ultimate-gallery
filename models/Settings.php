<?php namespace Indikator\Gallery\Models;

use Model;

class Settings extends Model
{
    public $implement = ['Backend.Behaviors.UserPreferencesModel'];
    public $settingsCode = 'backend::backend.preferences';
    public $settingsFields = 'fields.yaml';
}
