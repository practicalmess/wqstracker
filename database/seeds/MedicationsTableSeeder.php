<?php

use Illuminate\Database\Seeder;

class MedicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medications')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'med_name' => 'ibuprofen',
        	'interval' => 8,
        	'last_taken' => Carbon\Carbon::now(),
            ]);
        DB::table('medications')->insert([
        	'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        	'med_name' => 'excedrin',
        	'interval' => 6,
        	'last_taken' => Carbon\Carbon::now()->subHours(8),
            ]);
        DB::table('medications')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'med_name' => 'ondansetron',
            'interval' => 8,
            'last_taken' => Carbon\Carbon::now()->subHours(2),
            ]);
        DB::table('medications')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'med_name' => 'omeprazole',
            'interval' => 24,
            'last_taken' => Carbon\Carbon::now()->subHours(12),
            ]);
        DB::table('medications')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'med_name' => 'naproxen',
            'interval' => 12,
            'last_taken' => Carbon\Carbon::now()->subHours(1),
            ]);

    }
}
