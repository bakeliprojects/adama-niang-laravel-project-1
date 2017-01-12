<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandeTable extends Migration
{
    
   public function up()
    {
        Schema::create('commande', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('commandeur');
            $table->string('nombre');
            $table->string('contact');
            $table->rememberToken();
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
        Schema::drop('commande');
    }
}
