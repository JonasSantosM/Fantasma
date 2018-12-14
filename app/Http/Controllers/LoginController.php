<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

use App\Login;
use App\Curso;

use Illuminate\Support\ServiceProvider;
use View;

class LoginController extends Controller
{
    protected $login = null;

    public function _construct(Login $login){
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
        return $data=('App\Login')::all();
    }

    public function All(){
        return $data=('App\Login')::all();
    }

    public function Subscribe(Request $request, $id, $nome){

        $input = Input::all();

        $login = new Login();

        $login->fill($input);

        $login = ("App\Login")::find($id);

        $curso = Curso::where("nome", $nome)->first();

        $login->curso()->attach($curso);

    }

    public function Unsubscribe(Request $request, $id, $nome){

        $input = Input::all();

        $login = new Login();

        $login->fill($input);

        $login = ("App\Login")::find($id);

        $curso = Curso::where("nome", $nome)->first();

        $login->curso()->detach($curso);

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
        $Login = new Login();
        $Login->fill($input);
        if(!is_null($Login)){
            if(!is_null($Login->senha) && $Login->senha == $input['confirmar']){
                $Login->save();
                return view('Page.cadastro');
            }
        }
    }

    public function find($id)
    {
        //
        $data = ("App\Login")::find($id);
        if(is_null($data)){
            return Response(["response" => "Error"], 400);
        }
        return $data;
    }

    public function refresh($id)
    {
        //
        $Login = ("App\Login")::find($id);
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
        $data = ("App\Login")::find($id);
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
        return ('App\Login')::create($request->all);
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
        return $data=('App\Login')::all();
    }
}
