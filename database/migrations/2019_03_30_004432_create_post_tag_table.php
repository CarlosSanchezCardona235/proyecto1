<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        //creando tablas
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id');

            //creando relacion tablas
            $table->bigInteger('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('no action')->onUpdate('no action');

            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')->onUpdate('no action')->onDelete('no action');
            

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
        Schema::dropIfExists('post_tag');
    }
}
