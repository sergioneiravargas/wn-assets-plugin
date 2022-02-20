<?php

namespace Butils\Assets\Updates;

use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class BuilderTableCreateAssetsAsset extends Migration
{
    public function up()
    {
        Schema::create('butils_assets_asset', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id');
            $table->string('name');
            $table->text('introduction');
            $table->text('details');
            $table->string('slug');
            $table->integer('sort_order');
            $table->json('images');
        });
    }

    public function down()
    {
        Schema::dropIfExists('butils_assets_asset');
    }
}
