<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        //creando tablas 
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');

            
            

            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            
            $table->mediumText('excerpt')->nullable();
            $table->text('body');
            $table->enum('status', ['PUBLISHED','DRAFT'])->default('DRAFT');
            $table->string('file', 128)->nullable();

            
        
            //creandoo relacion de tablas
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('posts');
    }
}
