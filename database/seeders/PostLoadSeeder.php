<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\Post;
use App\Models\Image;
use App\Models\Review;
use App\Models\Requirement;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostLoadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts= Post::create([
            'name' => 'Kahoot',
            'slug' => Str::slug('Kahoot'),
            'extract' => 'Kahoot es una plataforma de aprendizaje en línea basada en juegos que permite a los profesores y estudiantes crear y participar en cuestionarios, encuestas y juegos educativos en línea. Los usuarios pueden crear juegos de preguntas y respuestas utilizando una amplia variedad de temas y formatos, y los estudiantes pueden jugar y competir en tiempo real desde sus dispositivos móviles o computadoras. Kahoot es muy popular en las escuelas y universidades de todo el mundo, y se utiliza con frecuencia para evaluar el aprendizaje de los estudiantes, fomentar la participación en clase y hacer que el aprendizaje sea más interactivo y divertido.',
            'body' => 'Kahoot puede ayudar a lograr varias metas en el aprendizaje y la enseñanza, incluyendo:

            Fomentar la participación y la motivación de los estudiantes: Kahoot es una herramienta divertida e interactiva que puede ayudar a aumentar la participación de los estudiantes en clase, lo que a su vez puede mejorar su motivación para aprender.
            
            Evaluar el aprendizaje de los estudiantes: Kahoot ofrece a los profesores una forma rápida y fácil de evaluar el aprendizaje de los estudiantes en tiempo real. Los profesores pueden utilizar Kahoot para medir el conocimiento de los estudiantes y adaptar sus enseñanzas en consecuencia.
            
            Promover el aprendizaje activo y colaborativo: Kahoot se presta a la colaboración y el aprendizaje activo, ya que los estudiantes pueden jugar juntos en equipo y compartir sus conocimientos. Esto puede ayudar a los estudiantes a desarrollar habilidades de comunicación y trabajo en equipo.
            
            Proporcionar retroalimentación inmediata: Kahoot proporciona retroalimentación inmediata tanto para los estudiantes como para los profesores. Los estudiantes pueden ver sus puntajes en tiempo real, lo que puede ayudarles a identificar áreas de mejora. Los profesores, por su parte, pueden evaluar el aprendizaje de los estudiantes y adaptar sus enseñanzas en consecuencia.
            
            Mejorar el aprendizaje personalizado: Kahoot permite a los profesores crear juegos y cuestionarios adaptados a las necesidades individuales de los estudiantes. Esto puede ayudar a los profesores a proporcionar un aprendizaje personalizado y a los estudiantes a mejorar su comprensión y retención de los conceptos.
            
            En resumen, Kahoot puede ayudar a los profesores a mejorar la enseñanza y a los estudiantes a mejorar su aprendizaje de diversas maneras, incluyendo la participación, la evaluación, la retroalimentación, el trabajo en equipo y el aprendizaje personalizado.',
            'status' => 3,
            'tipo_recurso_id'=>2,
            'category_id' => 1,
            'level_id' => 1,
            'user_id' =>1,

    
        ]);
        
    }
}
