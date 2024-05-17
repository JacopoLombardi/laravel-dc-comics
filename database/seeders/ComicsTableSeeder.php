<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('comics');

        foreach($products as $item){
            $new_comic = new Comic;
            $new_comic->title = $item['title'];
            $new_comic->description = $item['description'];
            $new_comic->image = $item['thumb'];
            $new_comic->price = $item['price'];
            $new_comic->series = $item['series'];
            $new_comic->sale_date = $item['sale_date'];
            $new_comic->type = $item['type'];
            $new_comic->save();
        }
    }
}
