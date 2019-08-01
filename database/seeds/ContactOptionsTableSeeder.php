<?php

use Illuminate\Database\Seeder;

class ContactOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ContactOption::class, 3)->create();
    }
}
