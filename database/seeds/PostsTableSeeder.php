<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        // ランダム投稿
        for ($i = 0; $i < 100; $i++)
        {
            DB::table('posts')->insert([
                'artist' => $faker->name(),
                'title' => $faker->text(20),
                'date' => $faker->date(),
                'venu' => $faker->city(),
                'body' => $faker->text(150),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
                'user_id' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}
