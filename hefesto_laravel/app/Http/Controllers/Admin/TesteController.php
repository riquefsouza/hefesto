<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProductRequest;
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
        $teste = 'Henrique';
        $teste2 = '<h1>Olá</h1>';
        //return "Exibindo o form de cadastro de um novo produto";
        return view('teste', compact('teste', 'teste2'));
    }

    public function edit($id)
    {
        return view('edit', compact('id'));
    }

    public function store(StoreUpdateProductRequest $request)
    {

        /*
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'nullable|min:3|max:1000',
            'photo' => 'required|image',
        ]);
        */

        //dd('cadastrando');
        //dd($request->all());
        //dd($request->only(['name', 'description']));
        //dd($request->name);
        //dd($request->description);
        //dd($request->has('name'));
        //dd($request->input('name', 'valor default caso seja nulo'));
        //dd($request->except('_token'));

        if ($request->file('photo')->isValid()) {
            //dd($request->photo->extension());
            //dd($request->photo->getClientOriginalName());
            $nameFile = $request->name . '.' . $request->photo->extension();
            //dd($request->file('photo')->store('pasta'));
            dd($request->file('photo')->storeAs('pasta', $nameFile));
        }


        return "Cadastrando um novo produto";
    }

    public function update(Request $request, $id)
    {
        dd("Editando o produto de id: {$id}");
    }

    public function destroy($id)
    {
        return "Excluindo o produto de id: {$id}";
    }
}
