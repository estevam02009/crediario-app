<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id', 'produto_id'
    ];

    public static function rules()
    {
        return [
            'cliente_id' => 'required|exists:clientes.id',
            'produto_id' => 'required|exists:produtos.id',
        ];
    }

    public static function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'exists' => 'O campo :attributr selecionado é inválido.'
        ];
    }
}
