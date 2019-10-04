<?php

use Illuminate\Database\Seeder;
use App\cats;
class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(cats::class,1)->create();
    }
}
