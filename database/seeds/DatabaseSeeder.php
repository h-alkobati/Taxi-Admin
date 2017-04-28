<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'first_name' => "Aiman",
            'last_name' => "Noman",
            'phone' => "773393905",
            'owner_id' => 1,
            'owner_type' => "noIdea",
            'gender' => 1,
            'email' => "Aiman@gmail.com",
            'password' => bcrypt('secret'),
        ]);

        factory(App\User::class, 10)->create();



    }
}
