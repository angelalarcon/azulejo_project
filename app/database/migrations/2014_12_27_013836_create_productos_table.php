<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('productos', function($table)
        {
            $table->increments('id');
            $table->string('img', 255);
            $table->string('title', 255);
            $table->text('description');
            $table->string('description_img', 255);
            $table->string('description_img_big', 255);
            $table->integer('collections_type_id')->unsigned();
            $table->foreign('collections_type_id')->references('id')->on('collections_type');
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