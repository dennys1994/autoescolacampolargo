<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
       // Buscar todos os contatos no banco de dados
        $contatos = Contato::all();

        // Retornar a view com os dados
        return view('contato.lista', compact('contatos'));
    }

    public function store(Request $request)
    {
        // Valide e armazene os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Armazene os dados no banco de dados ou envie para outro serviço
        Contato::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
        ]);

        // Retorne uma resposta JSON indicando sucesso
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        return redirect()->route('contato.lista')->with('success', 'Contato deletado com sucesso!');

    }


}
