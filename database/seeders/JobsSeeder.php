<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jobs;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define the number of records you want to create
        $numberOfRecords = 10;

        // Use the factory to create and insert records into the database
        Jobs::factory($numberOfRecords)->create();
    }
}
