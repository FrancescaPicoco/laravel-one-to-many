<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_art = config("artist");       //richiamo l'array all'interno del config
        foreach($array_art as $single_art)
        {
            $new_art=new Artist();
            $new_art->title=$single_art['title'];
            $new_art->description=$single_art['description'];
            $new_art->img=$single_art['img'];
            $new_art->author=$single_art['author'];
            $new_art->fill($single_art);
            $new_art->save();
        }
    }
}
