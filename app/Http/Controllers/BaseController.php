<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cookie;

use App\Login;
use App\Postagem;
use App\Pergunta;
use App\Resposta;
use DB;

use Illuminate\Support\ServiceProvider;
use View;

class BaseController extends Controller
{

    public static $Publiclogin;

    public $Base;

    public $LocalLogin;

    public $Logged;

    public $Signed;

    public function Sign(){
        $LocalLogin = new Login();

        $input = Input::all();

        $login = new Login();

        $login->fill($input);

        $Login = DB::select('select * from logins where email = :email and senha = :senha', ['email'=>$login->email,'senha'=>$login->senha]);

        if($Login == null){
            return "erro";
            $Signed = false;
        }

        $LocalLogin = login;

        $Logged = true;

        
        return view('Page.menu', ['login'=>$LocalLogin]);

    }

    public function _construct(){
        View::share('logged', $Logged);
        $Signed = 0;
    } 

    public function Creating(){
        $this->Base = new BaseController();
    }

    public static function FindLogin($id){
        $data = ("App\Login")::find($id);
        if(is_null($data)){
            return Response(["response" => "Error"], 400);
        }
        return $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public static $loged;

    public static function logs($loge){
        $loged = $loge;
    }

    public static function SignIn(){

        $input = Input::all();

        $login = new Login();

        $login->fill($input);

        $Login = DB::select('select * from logins where email = :email and senha = :senha', ['email'=>$login->email,'senha'=>$login->senha]);

        if($Login == null){
            return $Login;
            $Signed = false;
        }

        $Publiclogin = $login;

        $loged = $login;

        logs($Publiclogin);
        View::share('logged', $Login);

        $data = DB::select('select * from postagems where login_id = :id', ['id'=>$Login[0]->id]);
        Cookie::queue('login',$login,60);
        Cookie::queue('id',$Login[0]->id,60);

        return view('Page.perfil');
        
    }
    
    public static function SignOut(){
        
        Cookie::queue('login',null,60);
        return view('/Page.cadastro');

    }

    public static function Post(){
        $login = Cookie::get('id');

        $post = new Postagem();

        $input = Input::all();

        $post->fill($input);

        $l = new Login();

        $l = $login;

        $post->login_id = $login;

        $post->save();

        return view('Page.perfil');

    }

    public static function Like($id){
        $data = ("App\Pergunta")::find($id);
        if(is_null($data)){
            return Response(["response" => "Error"], 400);
        }
        $likes = $data->likes;

        if($likes == 0){
            DB::table('perguntas')->where('id', $id)->update(['likes' => 1]);
            
        }else{
            DB::table('perguntas')->where('id', $id)->update(['likes' => 0]);
        }

        return redirect()->to('/Forum');
    }

    public static function Search(){

        $input = Input::all();

        $title = new Pergunta();

        $title->fill($input);

        $data = DB::table('perguntas')->select('perguntas.*')->where('titulo', 'like', 'a%');

        return $data;
        
    }

    public static function SetQuestion($id){
        $Pergunta = Pergunta::find($id);
        $Resposta = DB::select("select * from respostas where pergunta_id = :id", ['id'=>$id]);
        return view('Page.resposta')->with('Pergunta', $Pergunta)->with('Resposta', $Resposta);
    }
    
    public static function GetQuestion(){
        return DB::table('perguntas')->join('logins','perguntas.login_id', '=', 'logins.id')->select('perguntas.*')->get();
    }
    
    public static function Acervo(){
        return $data=('App\Acervo')::all();
    }
    
    public static function CreateQuestion(){
        $input = Input::all();
        $Login = new Pergunta();
        $login = Cookie::get('id');
        $Login->fill($input);
        $Login->login_id = $login;
        $Login->save();
        return view('Page.Forum');
    }
    
    public static function SetResposta($id){
        $input = Input::all();
        $Login = new Resposta();
        $Login->fill($input);
        $Login->pergunta_id = $id;
        $Login->save();
        $Pergunta = Pergunta::find($id);
        DB::table('perguntas')->where('id', $id)->update(['respondida' => 1]);
        $Resposta = DB::select("select * from respostas where pergunta_id = :id", ['id'=>$id]);
        return view('Page.resposta')->with('Pergunta', $Pergunta)->with('Resposta', $Resposta);
    }

    public static function GetLogin(){
        $login = Cookie::get('login');
        $Login = Login::find(Cookie::get('id'));
        return $Login;
    }

    public static function GetPosts(){
        $login = Cookie::get('login');
        $id = Cookie::get('id');

        $l = new Login();

        $l = $login;

        $data = null;

        $order = "'created_at'";

        if(!is_null($login)){
            $dado = DB::select("select * from postagems where login_id = :id", ['id'=>$id]);
            if(is_null($dado)){
                return Response(["response" => "Error"], 400);
            }
            return $dado;
        }

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
        //
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
}
