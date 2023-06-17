<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'produto',
        'descricao',
        'valor',
        'data_compra',
        'vencimento_parcela'
    ];
}
