<?php

namespace App\Http\Controllers;

use App\Models\Corretores;
use Illuminate\Http\Request;

class CorretoresController extends Controller
{

    //Função cadastrar

    public function cadastrar()
    {
        $corretores = Corretores::get();
        return view('corretores.cadastrar', compact('corretores'));
    }

    public function enviarCadastro(Request $request)
    {
        $mensagens = [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.min' => 'O campo Nome deve ter pelo menos :min caracteres.',
            'nome.max' => 'Nome inválido.',
            'nome.string' => 'O campo Nome deve ser apenas letras.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.digits' => 'O campo CPF deve conter 11 dígitos e somente números.',
            'cpf' => 'CPF inválido, coloque somente números e um CPF válido.',
            'creci.required' => 'O campo CRECI é obrigatório.',
            'creci.min' => 'O campo CRECI deve ter pelo menos :min caracteres.'
        ];
    
        $request->validate([
            'nome' => 'required|min:2|max:255|string',
            'cpf' => [
                'required',
                'digits:11',
                function ($attribute, $value, $fail) {
                    if (!$this->validarCPF($value)) {
                        $fail('CPF inválido, coloque somente números e um CPF válido.');
                    }
                },
            ],
            'creci' => 'required|min:2',
        ], $mensagens);
    
        Corretores::cadastrar([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'creci' => $request->creci
        ]);
    
        return redirect('corretores/cadastrar')->with('status', 'Corretor Cadastrado!');
    }
    

// Função editar cadastro
public function editar(int $id){
    $corretores = Corretores::findOrFail($id);
    //return $corretor;
    return view ('corretores.editar', compact('corretores'));
}
    

//Função para enviar dados editados/atualizados
public function atualizarDados(Request $request, int $id){

    //Aqui contem mensagens de sucesso/erro ao executar uma ação
    $mensagens = [
        'nome.required' => 'O campo Nome é obrigatório.',
        'nome.min' => 'O campo Nome deve ter pelo menos :min caracteres.',
        'nome.max' => 'Nome inválido.',
        'nome.string' => 'O campo Nome deve ser apenas letras.',
        'cpf.required' => 'O campo CPF é obrigatório.',
        'cpf.digits' => 'O campo CPF deve conter 11 dígitos e somente números.',
        'cpf' => 'CPF inválido, coloque somente números e um CPF válido.',
        'creci.required' => 'O campo CRECI é obrigatório.',
        'creci.min' => 'O campo CRECI deve ter pelo menos :min caracteres.'
    ];

    $request->validate([
        'nome' => 'required|min:2|max:255|string',
        'cpf' => [
            'required',
            'digits:11',
            function ($attribute, $value, $fail) {
                if (!$this->validarCPF($value)) {
                    $fail('CPF inválido, coloque somente números e um CPF válido.');
                }
            },
        ],
        'creci' => 'required|min:2',
    ], $mensagens);

    Corretores::findOrFail($id)->atualizarDados([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'creci' => $request->creci
    ]);


    //Redirecionando e mostrando status de resposta
    return redirect()->back()->with('status', 'Dados Atualizados Com Sucesso!');
}

//Função para deletar cadastro
public function deletar(int $id){
   $corretores = Corretores::findOrFail($id);
   $corretores->deletar();

   //Redirecionando e mostrando status de resposta
   return redirect()->back()->with('status', 'Corretor Excluído Com Sucesso!');
}

   
//Função pronta do PHP para validar CPF
    private function validarCPF($cpf)
    {
        $cpf = preg_replace('/[^0-9]/', '', (string) $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        $digitoUm = 0;
        $digitoDois = 0;

        for ($i = 0, $j = 10; $i < 9; $i++, $j--) {
            $digitoUm += $cpf[$i] * $j;
        }

        for ($i = 0, $j = 11; $i < 10; $i++, $j--) {
            if (str_repeat($i, 11) == $cpf) {
                return false;
            }
            $digitoDois += $cpf[$i] * $j;
        }

        $calculoDigitoUm = (($digitoUm % 11) < 2) ? 0 : (11 - ($digitoUm % 11));
        $calculoDigitoDois = (($digitoDois % 11) < 2) ? 0 : (11 - ($digitoDois % 11));

        if ($calculoDigitoUm != $cpf[9] || $calculoDigitoDois != $cpf[10]) {
            return false;
        }

        return true;
    }
}
