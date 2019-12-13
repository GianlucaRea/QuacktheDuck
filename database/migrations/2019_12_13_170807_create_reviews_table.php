<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('id_review')->unique()->unsigned();
            $table->bigIncrements('id_review_by_user');
            $table->foreign('id_review_by_user') ->references('id_user')->on('users');
            $table->integer('id_document_reviewed');
            $table->foreign('id_document_reviewed') ->references('document_id')->on('documents');
            $table->integer('stars_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
}
