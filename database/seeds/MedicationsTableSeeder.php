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
        	'last_taken' => Carbon\Carbon::now()->subHours(12),
            ]);
    }
}
