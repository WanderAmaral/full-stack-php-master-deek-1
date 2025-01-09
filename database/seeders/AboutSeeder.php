<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Se não encontrar o registro com o id, cadastra o registro no BD
        About::firstOrCreate(
            ['id' => 1],
            [
                'title_topics' => 'Sobre a  Xxxxx',
                'subtitle_topics' => 'Uma empresa comprometida em oferecer soluções inovadoras e acessíveis para transformar vidas e carreiras.', 
                
                'title_topic_one' => 'Nossa Missão',
                'description_topic_one' => 'Proporcionar soluções que simplifiquem o aprendizado e promovam o crescimento pessoal e profissional de nossos clientes.',

                'title_topic_two' => 'Nossa Visão',
                'description_topic_two' => 'Ser referência em inovação e acessibilidade, transformando desafios em oportunidades por meio de conhecimento de qualidade.',

                'title_topic_three' => 'Nossos Valores',
                'description_topic_three' => 'Compromisso com a excelência, respeito pelas pessoas e paixão por ensinar e aprender.',
            ],
        );
    }
}
