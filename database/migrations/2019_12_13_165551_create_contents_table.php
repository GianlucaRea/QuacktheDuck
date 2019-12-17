<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreign('id') ->references('id')->on('documents');
            $table->String('type');
            $table->String('file');
        });
        DB::table('contents')->insert([
            ['id'=>'1','type'=> 'pdf','file'=>'appuntifisica1.pdf'],
            ['id'=>'2','type'=> 'pdf','file'=>'appuntidatabase.pdf'],
            ['id'=>'3','type'=> 'pdf','file'=>'appuntidante.pdf'],
            ['id'=>'4','type'=> 'pdf','file'=>'appuntimachinelearning.pdf'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
