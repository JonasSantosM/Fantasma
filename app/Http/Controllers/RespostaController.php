<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

use App\Resposta;


class RespostaController extends Controller
{
    protected $login = null;

    public function _construct(Resposta $login){
        $this->login = $login;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $data=('App\Resposta')::all();
    }

    public function All(){
        return $data=('App\Resposta')::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $input = Input::all();
        $Login = new Resposta();
        $Login->fill($input);
        $Login->save();
        return $Login;
    }

    public function find($id)
    {
        //
        $data = ("App\Resposta")::find($id);
        if(is_null($data)){
            return Response(["response" => "Error"], 400);
        }
        return $data;
    }

    public function refresh($id)
    {
        //
        $Login = ("App\Resposta")::find($id);
        if(is_null($Login)){
            return Response(["response" => "Error"], 400);
        }
        $input = Input::all();
        $Login = new Login();
        $Login->fill($input);
        $Login->save();
        return Response(["response" => "Sucess"], 200);
    }

    public function delete($id)
    {
        //
        $data = ("App\Resposta")::find($id);
        if(is_null($data)){
            return Response(["response" => "Error"], 400);
        }
        $data->delete($id);
        return Response(["response" => "Sucess"], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return ('App\Resposta')::create($request->all);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logon(){
        return $data=('App\Resposta')::all();
    }
}
