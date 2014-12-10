<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColletionTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('collections_type', function($table)
        {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description');
            $table->integer('collections_id')->unsigned();
            $table->foreign('collections_id')->references('id')->on('collections');
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
		//
	}

}
