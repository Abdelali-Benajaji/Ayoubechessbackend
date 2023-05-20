<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Archive;
use Illuminate\Support\Facades\DB;
 

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Archive::factory()->count(15)->create();
    }
}