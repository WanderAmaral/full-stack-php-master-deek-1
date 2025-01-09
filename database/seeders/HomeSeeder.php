<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Se não encontrar o registro com o id, cadastra o registro no BD
        Home::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Bem-vindo à Xxxxx!', 
                'subtitle' => 'Transforme sua carreira com cursos e alcance novos patamares profissionais.', 
                'text_btn' => 'Explore os Cursos',
                'link_btn' => '#',

                'title_topics' => 'Por Que Fazer Cursos?',
                'subtitle_topics' => 'O mercado de trabalho está cada vez mais competitivo e em constante transformação. Fazer cursos ajuda você a:', 
                
                'title_topic_one' => 'Atualizar-se',
                'description_topic_one' => 'Mantenha-se atualizado com as últimas tendências e tecnologias da sua área.',

                'title_topic_two' => 'Diferenciar-se',
                'description_topic_two' => 'Adquira habilidades que farão você se destacar no mercado de trabalho.',

                'title_topic_three' => 'Alcançar Objetivos',
                'description_topic_three' => 'Avance na sua carreira e atinja suas metas profissionais com mais facilidade.',
            ],
        );
    }
}
