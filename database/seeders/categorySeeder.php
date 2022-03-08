<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        categories::create([
            'id' => '1',
            'category' => 'Fiction'
        ]);

        categories::create([
            'id' => '2',
            'category' => 'Science'
        ]);

        categories::create([
            'id' => '3',
            'category' => 'Computer'
        ]);
    }
}
