<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    // Indicar o nome da tabela
    protected $table = 'contact_messages';

    // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['name', 'email', 'subject', 'message'];
}
