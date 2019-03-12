<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function _construct()
    {
        header('Access -Control-Allow-Origin: ');//Permiti o acesso ao método POST do POSTMAN.
 
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();//Vai no banco e pega tudo;
        return response()->json(['data'=>$categoria,'status'=>true]);//Retorna tudo em Json
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['descricao']); //pega tudo que vem da URL ESPECIFICO a descrição .
        $produtos = $request['produtos']; //Igual Insert into Categoria. Conceito de ORM -> ELOQUENT.

        $categoria = Categoria::create($data);

        if($categoria){

            $categoria->produto()->createMany($produtos);
            return response()->json(['data'=>$categoria,'status'=>true]);

        }else{

            return response()->json(['data'=>'Erro ao criar categoria','status'=>false]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //SHOW = MOSTRAR.
        //MOSTRA AS INFORMAÇÕES PELO ID

        $categoria = Categoria::find($id); //Vá na base e selecione  a categoria pelo ID

        if($categoria){

            return response()->json(['data'=>$categoria,'status'=>true]);

        }else{
            return response()->json(['data'=>'Categoria não existe','status'=>false]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //MODIFICA O ID E ENVIA NOVAMENTE.
        //TRABALHA JUNTO DO EDIT.
        //Request passa as informações pela URL.
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all(); //Utilizar sempre que for utilizar o RESPONSE.
        $categoria = Categoria::find($id); //Vá na base e selecione o produto pelo ID

        if($categoria){

            $categoria -> update($data);//Altera informações da URL.
            return response()->json(['data'=>$categoria,'status'=>true]);

        }else{
            return response()->json(['data'=>'Erro ao editar','status'=>false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id); //Vá na base e selecione o produto pelo ID

        if($categoria){

            $categoria -> delete();//Altera informações da URL.
            return response()->json(['data'=>'Deletado','status'=>true]);
      
    }else{
        return response()->json(['data'=>'Erro ao excluir','status'=>false]);
    }
}
    
}
