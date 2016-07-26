<?php namespace Indikator\Gallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddFeaturedFieldToTable extends Migration
{
    public function up()
    {
        Schema::table('gallery_albums', function($table)
        {
            $table->string('featured', 1)->default(2);
        });

        Schema::table('gallery_categories', function($table)
        {
            $table->string('featured', 1)->default(2);
        });
    }

    public function down()
    {
        Schema::table('gallery_albums', function($table)
        {
            $table->dropColumn('featured');
        });

        Schema::table('gallery_categories', function($table)
        {
            $table->dropColumn('featured');
        });
    }
}
