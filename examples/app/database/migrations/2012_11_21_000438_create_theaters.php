<?php

use Illuminate\Database\Migrations\Migration;

class CreateTheaters extends Migration
{
    /**
     * Make changes to the database.
     */
    public function up()
    {
        Schema::create('theaters', function ($table) {
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
        });
    }

    /**
     * Revert the changes to the database.
     */
    public function down()
    {
        Schema::drop('theaters');
    }
}
