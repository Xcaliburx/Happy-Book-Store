<?php

namespace Database\Seeders;

use App\Models\details;
use Illuminate\Database\Seeder;

class detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        details::create([
            'id' => '1',
            'book_id' => '1',
            'author' => 'budi',
            'publisher' => 'andi',
            'year' => '2012',
            'description' => 'ini buku 1'
        ]);

        details::create([
            'id' => '2',
            'book_id' => '2',
            'author' => 'budi s',
            'publisher' => 'andi s',
            'year' => '2015',
            'description' => 'ini buku 2'
        ]);

        details::create([
            'id' => '3',
            'book_id' => '3',
            'author' => 'budi a',
            'publisher' => 'andi a',
            'year' => '2017',
            'description' => 'ini buku 3'
        ]);

        details::create([
            'id' => '4',
            'book_id' => '4',
            'author' => 'budi z',
            'publisher' => 'andi z',
            'year' => '2018',
            'description' => 'ini buku 4'
        ]);

        details::create([
            'id' => '5',
            'book_id' => '5',
            'author' => 'budi y',
            'publisher' => 'andi y',
            'year' => '2010',
            'description' => 'ini buku 5'
        ]);

        details::create([
            'id' => '6',
            'book_id' => '6',
            'author' => 'budi h',
            'publisher' => 'andi h',
            'year' => '2011',
            'description' => 'ini buku 6'
        ]);

        details::create([
            'id' => '7',
            'book_id' => '7',
            'author' => 'budi n',
            'publisher' => 'andi n',
            'year' => '2019',
            'description' => 'ini buku 7'
        ]);

        details::create([
            'id' => '8',
            'book_id' => '8',
            'author' => 'budi p',
            'publisher' => 'andi p',
            'year' => '2013',
            'description' => 'ini buku 8'
        ]);

        details::create([
            'id' => '9',
            'book_id' => '9',
            'author' => 'budi c',
            'publisher' => 'andi c',
            'year' => '2017',
            'description' => 'ini buku 9'
        ]);

        details::create([
            'id' => '10',
            'book_id' => '10',
            'author' => 'budi b',
            'publisher' => 'andi b',
            'year' => '2014',
            'description' => 'ini buku 10'
        ]);
    }
}
