<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {

            $item = new Comic();
            $item->title = $comic['title'];
            $item->url = $comic['thumb'];
            $item->price = $comic['price'];
            $item->series = $comic['series'];
            $item->description = $comic['description'];
            $item->type = $comic['type'];
            $item->save();
        }
    }
}
