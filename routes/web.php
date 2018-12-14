<?php

use App\Http\Controllers\BaseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('Aulas')->group(function (){
    Route::get("/",array('as' => '/Aulas', function(){
        return view("Page.aulas");
    }));
});

Route::prefix('Acervo')->group(function (){
    Route::get("/",array('as' => '/Acervo', function(){
        return view("Page.acervo");
    }));
});

Route::prefix('Entrar')->group(function (){
    Route::get("/",array('as' => '/Entrar', function(){
        return view("Page.cadastro");
    }));
});

Route::prefix('Forum')->group(function (){
    Route::get("/",array('as' => '/Forum', function(){
        return view("Page.forum");
    }));
});

Route::prefix('Perfil')->group(function (){
    Route::get("/",array('as' => '/Perfil', function(){
        return view("Page.perfil");
    }));
    
    Route::get("/Configuracao",array('as' => '/Configuracao', function(){
        return view("Page.configuracao");
    }));
});

Route::prefix('Sobre')->group(function (){
    Route::get("/",array('as' => '/Sobre', function(){
        return view("Page.sobre");
    }));
});

Route::get("/", array('as' => '/', function(){
    return view("index");
}));

Route::group(["prefix" => "Api"], function (){

    Route::group(["prefix"=>"Login"], function(){

        Route::get('/All', ['uses'=>'LoginController@All']);

        Route::get('/Find/{id}', ["uses"=>"LoginController@find"]);

        Route::get('/logon', ['uses' => 'LoginController@Logar', "as"=>"Login.logon"]);

        Route::post('/Create', ["uses"=>"LoginController@create","as"=>"Login.create"]);

        Route::put('/Edit/{id}', ["uses"=>"LoginController@refresh"]);

        Route::delete('/Delete/{id}',  ["uses"=>"LoginController@delete"]);

        Route::get('/Subscribe/{id}/{nome}',["uses"=>"LoginController@Subscribe","as"=>"Login.Subscribe"]);
        
        Route::get('/Unsubscribe/{id}/{nome}',["uses"=>"LoginController@Unsubscribe","as"=>"Login.Unsubscribe"]);

        Route::get('/SignIn', ["uses"=>"BaseController@SignIn","as"=>"Base.SignIn"]);

        Route::get('/SignOut', ["uses"=>"BaseController@SignOut","as"=>"Login.SignOut"]);
        
        Route::post('Post', ["uses"=>"BaseController@Post","as"=>"Login.Post"]);
        Route::post('/SetResposta/{id}', ["uses"=>"BaseController@SetResposta", 'as'=>'Base.SetResposta']);

    });
    
        Route::group(["prefix"=>"Postagem"], function(){
    
            Route::get('/All', ['uses'=>'PostagemController@All']);
    
            Route::get('/Find/{id}', ["uses"=>"PostagemController@find"]);
    
            Route::post('/Create', ["uses"=>"PostagemController@create","as"=>"Postagem.create"]);
    
            Route::put('/Edit/{id}', ["uses"=>"PostagemController@refresh"]);
    
            Route::post('/Delete/{id}',  ["uses"=>"PostagemController@delete", 'as'=>'Postagem.Delete']);
    
        });
    
        Route::group(["prefix"=>"Acervo"], function(){
    
            Route::get('/All', ['uses'=>'PostagemController@All']);
    
            Route::get('/Find/{id}', ["uses"=>"PostagemController@find"]);
    
            Route::post('/Create', ["uses"=>"PostagemController@create","as"=>"Postagem.create"]);
    
            Route::put('/Edit/{id}', ["uses"=>"PostagemController@refresh"]);
    
            Route::post('/Delete/{id}',  ["uses"=>"PostagemController@delete", 'as'=>'Postagem.Delete']);
    
        });
    
    Route::group(["prefix"=>"Pergunta"], function(){

        Route::get('/All', ['uses'=>'PerguntaController@All']);

        Route::get('/Find/{id}', ["uses"=>"BaseController@SetQuestion","as"=>"Pergunta.SetQuestion"]);

        Route::post('/CreateQuestion', ["uses"=>"BaseController@CreateQuestion","as"=>"Base.CreateQuestion"]);

        Route::put('/Edit/{id}', ["uses"=>"PerguntaController@refresh"]);

        Route::delete('/Delete/{id}',  ["uses"=>"PerguntaController@delete"]);

        Route::post('/Like/{id}', ["uses"=>"BaseController@Like", 'as'=>'Pergunta.Like']);

        Route::get('/Search', ["uses"=>"BaseController@Search", 'as'=>'Pergunta.Search']);
        
        
    });
    
    Route::group(["prefix"=>"Curso"], function(){
        
        Route::get('/All', ['uses'=>'CursoController@All', "as" =>"Curso.All"]);
        
        Route::get('/LoadCourse', ['uses'=>'CursoController@LoadCourse', "as"=>"Curso.LoadCourse"]);
        
        Route::get('/Find/{id}', ["uses"=>"CursoController@find"]);
        
        Route::post('/Create', ["uses"=>"CursoController@create","as"=>"Curso.create"]);
        
        Route::put('/Edit/{id}', ["uses"=>"CursoController@refresh"]);
        
        Route::delete('/Delete/{id}',  ["uses"=>"CursoController@delete"]);
        
    });
    
    Route::group(["prefix"=>"Aulas"], function(){
        
        Route::get('/All', ['uses'=>'AulasController@All', "as"=>"Aulas.All"]);
        
        Route::get('/Find/{id}', ["uses"=>"AulasController@find"]);
        
        Route::post('/Create', ["uses"=>"AulasController@create","as"=>"Postagem.create"]);
        
        Route::put('/Edit/{id}', ["uses"=>"AulasController@refresh"]);
        
        Route::delete('/Delete/{id}',  ["uses"=>"AulasController@delete"]);
        
    });
    
    Route::group(["prefix"=>"Resposta"], function(){
        
        Route::get('/All', ['uses'=>'RespostaController@All']);
        
        Route::get('/Find/{id}', ["uses"=>"RespostaController@find"]);
        
        Route::post('/Create', ["uses"=>"RespostaController@create","as"=>"Postagem.create"]);
        
        Route::put('/Edit/{id}', ["uses"=>"RespostaController@refresh"]);
        
        Route::delete('/Delete/{id}',  ["uses"=>"RespostaController@delete"]);
    });
    
    Route::group(["prefix"=>"LoginCursos"], function(){
        
        Route::get('/All', ['uses'=>'LoginCursosController@All']);
        
        Route::get('/Find/{id}', ["uses"=>"LoginCursosController@find"]);
        
        Route::post('/Create', ["uses"=>"LoginCursosController@create","as"=>"Postagem.create"]);

        Route::put('/Edit/{id}', ["uses"=>"LoginCursosController@refresh"]);

        Route::delete('/Delete/{id}',  ["uses"=>"LoginCursosController@delete"]);

    });

});