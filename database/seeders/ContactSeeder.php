<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Se não encontrar o registro com o id, cadastra o registro no BD
        Contact::firstOrCreate(
            ['id' => 1],
            [
                'address' => '<h3 class="mb-3">Nosso Endereço</h3>
                <p>
                    <strong>Nome da Empresa</strong><br>
                    Rua Exemplo, 123<br>
                    Bairro, Cidade, Estado<br>
                    Telefone: (00) 9 1234-5678<br>
                    E-mail: cesar@celke.com.br<br>
                </p>
                <p>
                    <strong>Horário de Funcionamento:</strong><br>
                    Segunda a Sexta: 9h às 18h<br>
                    Sábado: 9h às 13h<br>
                    Domingo: Fechado
                </p>', 
            ],
        );
    }
}
