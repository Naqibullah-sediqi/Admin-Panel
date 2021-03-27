<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderImageTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_image_tables', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->String('page_id');
            $table->String('Image_name');
            $table->String('Image_path_name');
            $table->String('Image_path_GeneratedName');
            $table->text('description');
            $table->text('title')->default(null);
            $table->text('subTitle')->default(null);
            $table->text('phoneNumber')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_image_tables');
    }
}
