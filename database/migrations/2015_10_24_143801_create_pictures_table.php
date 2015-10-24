<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_hashed_name');
            $table->string('picture_name')->unique();
            $table->string('mime_type');
            $table->binary('data');
            $table->timestamps();
        });
        //TODO: Change from BLOB to LONGBLOB for MySQL database
        \Illuminate\Support\Facades\DB::statement('ALTER TABLE `pictures` MODIFY `data` LONGBLOB NOT NULL;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pictures');
    }
}
