<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ophones', function (Blueprint $table) {
            $table->id();

            $table->string('number', '8');
            $table->string('number1', '16');
            $table->bigInteger('id_office');
            $table->bigInteger('id_street');
            $table->bigInteger('id_func');
            $table->bigInteger('id_branch');
            $table->string('surname', '50');
            $table->string('name', '50');
            $table->string('patronymyc', '50');
            $table->date('birthday');
            $table->string('house', '5');
            $table->string('flat', '5');
            $table->string('note', '50');
            $table->string('indexSort')->nullable();            
            $table->text('email','50');
           
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
        Schema::dropIfExists('ophones');
    }
}
