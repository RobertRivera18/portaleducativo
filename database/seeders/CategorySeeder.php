<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Gamificación',
            'slug' => Str::slug('Gamificación'),
            'type'=> 2

        ]);
        Category::create([
            'name'=>'Plataformas de Interacción',
            'slug' => Str::slug('Plataformas de Interacción'),
            'type'=> 2

        ]);

        Category::create([
            'name'=>'Estrategias de Aprendizaje',
            'slug' => Str::slug('Estrategias de Aprendizaje'),
            'type'=> 1

        ]);

        Category::create([
            'name'=>'Metodologías Educativas',
            'slug' => Str::slug('Metodologías Educativas'),
            'type'=> 1

        ]);

        
        
    }
}
