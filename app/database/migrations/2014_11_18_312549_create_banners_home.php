<?php

use Illuminate\Database\Migrations\Migration;

class CreateBannersHome extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('banner_home', function($table)
        {
            $table->increments('id');
            $table->string('banner', 255);
            $table->string('type', 2)->index();
            $table->unique('type');
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