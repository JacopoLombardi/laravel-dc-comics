<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics');

        foreach($products as $item){
            $new_book = new Book;
            $new_book->title = $item['title'];
            $new_book->description = $item['description'];
            $new_book->image = $item['thumb'];
            $new_book->price = $item['price'];
            $new_book->series = $item['series'];
            $new_book->sale_date = $item['sale_date'];
            $new_book->type = $item['type'];
            $new_book->save();
        }
    }
}
