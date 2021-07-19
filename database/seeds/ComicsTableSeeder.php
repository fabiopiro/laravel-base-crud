<?php

use Illuminate\Database\Seeder;

// Classe Comic
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //comics.php
        $comics = config('comics');

        //FOREACH
        foreach ($comics as $comic) {
            # code...
            //1) creazione istanza
            $newComic = new Comic();

            //2) valorizzazione proprietà
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            //3) salvataggio
            $newComic->save();
        }
        //FOREACH
    }
}
