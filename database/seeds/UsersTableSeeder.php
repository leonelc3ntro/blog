<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user = [

			[
				'name' => 'leonel',
				'email' => 'leonel.gonzalez@c3ntro.com',
				'password' => bcrypt('123456'),
			],

		];

		foreach ($user as $key => $value) {

			User::create($value);

		}
	}
}