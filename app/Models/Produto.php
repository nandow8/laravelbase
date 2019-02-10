<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [   // se não passar os nomes dos campos aqui, nao vai conseguir salvar no banco ( id, created_at e updated_at nao precisa )
        'nome',
        'descricao',
        'preco'
    ];
}
