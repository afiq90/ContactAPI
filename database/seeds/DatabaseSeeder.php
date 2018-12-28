<?php

use Illuminate\Database\Seeder;

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
        $faker = Faker\Factory::create();
        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('contacts')->insert([ //mengisi datadi database
                'name' => $faker->name,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'address' => $faker->address,
                'phonenumber' => $faker->phoneNumber,
            ]);
        }

    }
}
