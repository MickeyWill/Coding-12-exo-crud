<?php

use Illuminate\Database\Seeder;
use App\contact;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(contact::class, 1)->create();
    }
}
