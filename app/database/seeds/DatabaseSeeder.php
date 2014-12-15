<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');
        DB::table('users')->delete();

        User::create(array(
            'id'        => 'admin',
            'fullname'  => 'Administrador',
            'password'  => Hash::make('123456'),
            'email'     => 'admin@gmail.com'
        ));
	}

}