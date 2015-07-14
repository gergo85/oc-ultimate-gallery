<?php namespace Indikator\Gallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateAlbumsTable extends Migration
{
    public function up()
    {
        Schema::create('gallery_albums', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->string('image', 200)->nullable();
            $table->string('labels', 100)->nullable();
            $table->string('category_id', 4);
            $table->string('user_id', 6);
            $table->text('desc')->nullable();
            $table->text('common')->nullable();
            $table->string('status', 1)->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery_albums');
    }
}
