<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    // Indicar o nome da tabela
    protected $table = 'homes';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['title', 'subtitle', 'text_btn', 'link_btn', 'title_topics', 'subtitle_topics', 'title_topic_one', 'description_topic_one', 'title_topic_two', 'description_topic_two', 'title_topic_three', 'description_topic_three'];
}
