<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::factory()->count(5)->create();
        DB::table('positions')->insert([
            [
                'code' => 'FE',
                'name' => 'Front End Developer',
                'description' => 'Front End Developer'
            ],
            [
                'code' => 'BE',
                'name' => 'Back End Developer',
                'description' => 'Back End Developer'
            ],
            [
                'code' => 'SA',
                'name' => 'System Analist',
                'description' => 'System Analist'
            ],
        ]);
    }
}
