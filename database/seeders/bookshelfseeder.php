<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bookshelfseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bookshelfs')->insert([
            [
                'code' =>'451ff',
                'nama'=>'monggi',
            ],
            [
                'code' =>'459ff',
                'nama'=>'mongg',
            ]
        ]);
        Book::create([
            'title'        =>'gajah terbang',
            'author'=>'minsittar',
            'years'=>'2024',
            'publisher'=>'universitas gajah duduk',
            'city'=>'cianjur',
            'cover'=>'gajahduduk.jpg',
            'bookshelf_id'=>1,
        ]);
    }
    
}
