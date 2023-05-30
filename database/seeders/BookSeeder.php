<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Provider\DateTime;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $category = ['Quick Reads', 'Medium Reads', 'Long Reads'];
        for ($i = 0 ; $i <= 23 ; $i++){
            $number = mt_rand(0,2);
            DB::table('books')->insert([
                'category' => $category[$number],
                'title' => $faker->sentence(mt_rand(1,3)),
                'description' => $faker->sentence(mt_rand(10,15)),
                'author' => $faker->name(),
                'day' => $faker->dayOfMonth(),
                'month' => $faker->monthName(),
                'year' => $faker->year(),
                'body' => $faker->paragraph(mt_rand(4,8)),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
