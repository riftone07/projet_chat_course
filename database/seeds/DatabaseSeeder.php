<?php

use App\Models\Memoire;
use App\Models\School;
use App\Models\Tag;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

     factory(User::class, 20)->create();
 }
}
