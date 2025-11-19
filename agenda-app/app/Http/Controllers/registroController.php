<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registroModel;

class registroController extends Controller
{
    public function paginaInicial(){
        return view('paginas.index');
    }//fim da páginaInicial

    public function cad(){
        return view('paginas.cadastrar');
    }//fim do método que direciona para a página cadastrar

    public function inserir(Request $request){
        $data = $request->input('dataEvento');//Coletando a data
        $descricao = $request->input('descricao');//Coletando a descricao
        //Chamar a Model = Ela vai inserir os dados no banco = mandar o comando
        $model = new registroModel();
        $model->dataEvento = $data;
        $model->descricao  = $descricao;
        //Efetivar a inserção no banco
        $model->save();
        //Depois de cadastrar permanece na página vazia ouuuuuu vai para outra página
        return redirect('/cadastrar');
    }//fim do método inserir

    public function consultar(){
        $ids = registroModel::all();
        return view('paginas.consultar', compact('ids'));
    }//fim do consultar

    public function editar($id){
        $dado = registroModel::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do editar

    public function atualizar(Request $request, $id){
        registroModel::where('id', $id)->update($request->all());
        return redirect('/consultar');
    }//fim do atualizar

    public function excluir(Request $request, $id){
        registroModel::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do excluir
}//fim da classe



