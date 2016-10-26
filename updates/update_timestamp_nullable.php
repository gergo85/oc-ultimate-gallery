<?php namespace Indikator\Gallery\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('gallery_albums');
        DbDongle::convertTimestamps('gallery_categories');
    }

    public function down()
    {
        // ...
    }
}
