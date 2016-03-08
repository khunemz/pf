<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $max = 100;
        for($i=0; $i<=$max; $i++):
            DB::table('blogs')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'tag' => $faker->word
            ]);
        endfor;
    }
}
