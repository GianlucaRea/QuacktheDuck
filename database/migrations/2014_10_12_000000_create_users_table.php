<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('university');
            $table->string('course');
            $table->boolean('subscription')->default(false);
            $table->integer('points')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
            DB::table('users')->insert([
            ['name' => 'Giacomo', 'surname' => 'Rossi', 'email' => 'giacomo.rossi@gmail.com','password'=>'giacomo100','university'=>'Unibo','course'=>'Informatica'],
            ['name' => 'Aldo', 'surname' => 'Verdi', 'email' => 'aldo.verdi@gmail.com','password'=>'verdi1100','university'=>'Univaq','course'=>'Informatica'],
            ['name' => 'Giovanni', 'surname' => 'Basso', 'email' => 'giovanni.basso@gmail.com','password'=>'basso100','university'=>'Unibo','course'=>'Letteratura'],
            ['name' => 'Matteo', 'surname' => 'Rossi', 'email' => 'matteo.rossi@gmail.com','password'=>'matteo2919','university'=>'Unimi','course'=>'Informatica'],
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
