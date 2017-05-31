<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$permission = [

			[
				'name' => 'users',
				'display_name' => 'Users',
				'description' => 'Users',
			],
			[
				'name' => 'create-user',
				'display_name' => 'Create Users',
				'description' => 'Cretae Users',
			],
			[
				'name' => 'update-user',
				'display_name' => 'Update Users',
				'description' => 'Update Users',
			],
			[
				'name' => 'delete-user',
				'display_name' => 'Delete Users',
				'description' => 'Delete Users',
			],

			[
				'name' => 'posts',
				'display_name' => 'Posts',
				'description' => 'Posts',
			],
			[
				'name' => 'create-post',
				'display_name' => 'Create Posts',
				'description' => 'Cretae Posts',
			],
			[
				'name' => 'update-post',
				'display_name' => 'Update Posts',
				'description' => 'Update Posts',
			],
			[
				'name' => 'delete-post',
				'display_name' => 'Delete Posts',
				'description' => 'Delete Posts',
			],

		];

		foreach ($permission as $key => $value) {

			Permission::create($value);

		}
	}
}