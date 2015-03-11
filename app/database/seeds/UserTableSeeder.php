<?php
class UserTableSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        foreach(range(1,100) as $index)
        {
            User::create([
                'name' => str_replace('.', '_', $faker->unique()->name),
                'house_name' => $faker->secondaryAddress,
                'monthly' => $faker->numberBetween($min = 100, $max = 1000)
            ]);
        }
    }
}