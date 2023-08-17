<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Colaborador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrarfuncionario', function(Request $informacao)  {
    Colaborador::create([
        'nome' => $informacao->nome_funcionario,
        'cargo' => $informacao->cargo_funcionario,
        'salario' => $informacao->salario_funcionario,
        'setor' => $informacao->setor_funcionario
    ]);
    echo "Funcionario Cadastrado com Sucesso! ;)";
});

Route::get('/mostrarfuncionario/{id_do_funcionario}', function($id_do_funcionario){
    $Colaborador = Colaborador::findorfail($id_do_funcionario);
    echo $Colaborador->nome;
    echo "<br />";
    echo $Colaborador->cargo;
    echo "<br />";
    // echo $Colaborador->salario;
    // echo "<br />";
    // echo $Colaborador->setor;
    // echo "<br />";
    // dd($id_do_funcionario);
});

Route::get('/editarfuncionario/{id_do_funcionario}', function($id_do_funcionario){
    $Colaborador = Colaborador::findorfail($id_do_funcionario);
    return view('editarfuncionario', ['colaborador'=> $Colaborador]);
});

Route::put('/atualizarfuncionario/{id_do_funcionario}', function(Request $informacao, $id_do_funcionario){
    $Colaborador = Colaborador::findorfail($id_do_funcionario);
    $Colaborador->nome = $informacao->nome_funcionario;
    $Colaborador->cargo = $informacao->cargo_funcionario;
    $Colaborador->salario = $informacao->salario_funcionario;
    $Colaborador->setor = $informacao->setor_funcionario;
    $Colaborador->save();
    echo "(;Funcionario Atualizado com Sucesso ;)";
});
