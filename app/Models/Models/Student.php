<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = [
      'nome',
      'nascimento',
      'ano',
      'cep',
      'rua',
      'n',
      'complemento',
      'bairro',
      'cidade',
      'estado',
      'mothername',
      'mothercpf',
      'payment'

    ];


}
