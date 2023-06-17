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

    public static function rules()
    {
        return [
            'produto' => 'required|string',
            'descricao' => 'required|string',
            'valor' => 'required|numeric',
            'data_compra' => 'required|date',
            'vencimento_parcela' => 'required|date'
        ];
    }

    public static function message()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attributr deve ser uma string.',
            'numeric' => 'O campo :attribute dever um número.',
            'date' => 'O campo :attribute deve ser uma data válida.'
        ];
    }
}
