<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // toda vez que excluir, o produto nao aparece na lista, mas continua no banco de dados

class Produto extends Model
{
    use SoftDeletes; // toda vez que excluir, o produto nao aparece na lista, mas continua no banco de dados

    protected $fillable = [   // se não passar os nomes dos campos aqui, nao vai conseguir salvar no banco ( id, created_at e updated_at nao precisa )
        'nome',
        'descricao',
        'preco'
    ];
}
