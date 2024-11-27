<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prematricula;
use Illuminate\Support\Facades\Storage;

class PreMatriculaController extends Controller
{
    public function index()
    {
        // Buscar todas as pré-matrículas
        $prematriculas = Prematricula::all();

        // Retornar a view com os dados
        return view('pre-matricula.lista', compact('prematriculas'));
    }


    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'categoria' => 'required|string|max:255',
            'anexo.*' => 'mimes:jpeg,png,jpg,pdf|max:5120',  // Máximo de 5MB por arquivo
        ]);

        // Processar os arquivos
        $anexos = [];
        if ($request->hasFile('anexo')) {
            foreach ($request->file('anexo') as $anexo) {
                // Armazenar os arquivos na pasta 'public/uploads'
                $anexos[] = $anexo->store('public/uploads');  // Armazenar na pasta 'uploads'
            }
        }

        // Criar a prematrícula no banco de dados
        Prematricula::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'categoria' => $request->categoria,
            'anexos' => json_encode($anexos), // Armazenar os caminhos dos arquivos
        ]);

        return redirect()->route('pre-matricula.lista')->with('success', 'Pré-matrícula enviada com sucesso!');
    }

    public function destroy($id)
    {
        // Recuperar a pré-matrícula
        $prematricula = Prematricula::findOrFail($id);

        // Remover os arquivos anexos, caso existam
        if ($prematricula->anexos) {
            $anexos = json_decode($prematricula->anexos);  // Decodifica a string JSON em um array
            foreach ($anexos as $anexo) {
                Storage::delete($anexo);  // Deletando os arquivos do storage
            }
        }
        // Deletar o registro da pré-matrícula
        $prematricula->delete();

        return redirect()->route('pre-matricula.lista')->with('success', 'Pré-matrícula deletada com sucesso!');
    }


}
