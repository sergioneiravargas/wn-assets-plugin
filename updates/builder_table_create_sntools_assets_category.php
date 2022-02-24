<?php

namespace Sntools\Assets\Updates;

use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class BuilderTableCreateSntoolsAssetsCategory extends Migration
{
    public function up()
    {
        Schema::create('sntools_assets_category', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('introduction');
            $table->text('details');
            $table->string('slug')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sntools_assets_category');
    }
}
