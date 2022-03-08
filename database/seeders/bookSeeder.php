<?php

namespace Database\Seeders;

use App\Models\books;
use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        books::create([
            'id' => '1',
            'category_id' => '1',
            'title' => 'book1'
        ]);

        books::create([
            'id' => '2',
            'category_id' => '2',
            'title' => 'book2'
        ]);

        books::create([
            'id' => '3',
            'category_id' => '3',
            'title' => 'book3'
        ]);

        books::create([
            'id' => '4',
            'category_id' => '1',
            'title' => 'book4'
        ]);

        books::create([
            'id' => '5',
            'category_id' => '2',
            'title' => 'book5'
        ]);

        books::create([
            'id' => '6',
            'category_id' => '3',
            'title' => 'book6'
        ]);

        books::create([
            'id' => '7',
            'category_id' => '1',
            'title' => 'book7'
        ]);

        books::create([
            'id' => '8',
            'category_id' => '2',
            'title' => 'book8'
        ]);

        books::create([
            'id' => '9',
            'category_id' => '3',
            'title' => 'book9'
        ]);

        books::create([
            'id' => '10',
            'category_id' => '1',
            'title' => 'book10'
        ]);
    }
}
