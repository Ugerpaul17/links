<?php

use Illuminate\Database\Seeder;

class LinksTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Link::class, 5)->create();
    }
    public function run()
{
    $this->call(LinksTableSeeder::class);
}
}
