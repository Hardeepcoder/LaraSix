<?php

use Illuminate\Database\Seeder;
use App\news;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(news::class,5)->create();
    }
}
