<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Portfolio::create([
            'name' => 'Aalux',
            'link' => 'http://www.aalux.co.uk',
            'image' =>'portfolio.png',
        ]);
    }

}
