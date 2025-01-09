<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Indicar o nome da tabela
    protected $table = 'contacts';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['address'];
}
