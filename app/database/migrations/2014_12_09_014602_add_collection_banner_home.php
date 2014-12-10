<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCollectionBannerHome extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('banner_home', function($table)
        {
            $table->integer('collections_id')->unsigned()->nullable();
            $table->foreign('collections_id')->references('id')->on('collections');
        });
	}

    public function collections()
    {
        return $this->belongsTo('Collections');
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
