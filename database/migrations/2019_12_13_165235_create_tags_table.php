<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id') ->references('id')->on('documents');
            $table->String('tag_name');
        });
        DB::table('tags')->insert([
            ['id'=> '1','tag_name'=>'fisica'],['id'=> '1','tag_name'=>'meccanica'],
            ['id'=> '2','tag_name'=>'database'],['id'=> '1','tag_name'=>'query'],
            ['id'=> '3','tag_name'=>'divina commedia'],['id'=> '1','tag_name'=>'alighieri'],
            ['id'=> '4','tag_name'=>'Machine Learning'],['id'=> '1','tag_name'=>'alexa'],
            ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
