<?php

namespace Butils\Assets\Updates;

use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class BuilderTableCreateButilsAssetsCategory extends Migration
{
    public function up()
    {
        Schema::create('butils_assets_category', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('introduction');
            $table->text('details');
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('butils_assets_category');
    }
}
