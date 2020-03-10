<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        //$products = ['Prod 01', 'Prod 02', 'Prod 03'];
        //return $products;
        
        //return 'Teste Controller';

        $teste = 'Henrique';
        $teste2 = '<h1>Olá</h1>';
        /*
        return view('teste', [
            'teste' => $teste
        ]);
        */
        return view('teste', compact('teste', 'teste2'));
    }

    public function show($id)
    {
        return "Exibindo o produto de id: {$id}";
    }

    public function create()
    {
        return "Exibindo o form de cadastro de um novo produto";
    }

    public function edit($id)
    {
        return "Form para editar o produto de id: {$id}";
    }

    public function store()
    {
        return "Cadastrando um novo produto";
    }

    public function update($id)
    {
        return "Editando o produto de id: {$id}";
    }

    public function destroy($id)
    {
        return "Excluindo o produto de id: {$id}";
    }
}
