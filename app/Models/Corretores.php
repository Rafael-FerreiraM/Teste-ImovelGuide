<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corretores extends Model
{
    use HasFactory;

    //Tabela e colunas do banco de dados
    protected $table = 'corretores';
    protected $fillable = [
        'nome',
        'creci',
        'cpf'
    ];

    //Função de cadastrar corretor
    public static function cadastrar(array $data)
    {
        return self::create($data);
    }

    //Função de editar/atualizar dados

    public function atualizarDados(array $dados)
    {
        $this->update($dados);
    }

    //Função de deletar dados
   public function deletar(){
    $this->delete();
   }

    // Removendo timestamps
    public $timestamps = false;
}
