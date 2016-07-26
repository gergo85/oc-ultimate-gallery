<?php namespace Indikator\Gallery\Updates;

use Schema;
use DbDongle;
use October\Rain\Database\Updates\Migration;

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
