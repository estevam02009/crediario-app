<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cidade',
        'uf'
    ];

    public static function rules()
    {
        return [
            'nome' => 'required|string',
            'endereco' => 'required|string',
            'telefone' => 'required|string',
            'cidade' => 'required|string',
            'uf' => 'required|string',
        ];
    }

    public static function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório.',
            'required' => 'O campo :attribute deve ser uma string',
        ];
    }
}
