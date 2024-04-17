<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Partner;

class PartnerTableSeeder extends Seeder
{/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::factory()->count(13)->create();
    }
}
