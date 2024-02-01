<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_type = config("type"); 
        foreach($array_type as $single_type)
        {
            $new_type=new Type();
            $new_type->name=$single_type['name'];
            $new_type->description=$single_type['description'];
            $new_type->epoch=$single_type['epoch'];
            $new_type->fill($single_type);
            $new_type->save();
        }   
    }
}
