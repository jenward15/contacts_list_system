<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $params = [
        		'first_name' 	=> 'Edward',
        		'last_name'  	=> 'Gaborno',
        		'email' 	 	=> 'admin@email.com',
        		'password'	 	=> \Hash::make('password'),
        		'contact_number'=> '+9073311127',
        	];

        $user = new User;
        $user->create($params);
    }
}
