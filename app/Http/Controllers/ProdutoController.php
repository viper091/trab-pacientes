<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Paciente;
use App\Http\Requests\PacienteRequest;

class PacienteController extends Controller {

    public function lista() {
        $Pacientes = Paciente::all();

        return view('Paciente.listagem')->with('pacientes', $Pacientes);
    }

    public function mostra($id) {
        $Paciente = Paciente::find($id);
        return view('Paciente.detalhes')->with('paciente', $Paciente);
    }

    public function novo() {
        return view('formulario');
    }

    public function adiciona(PacienteRequest $request) {
        $params = $request->all();
        Paciente::create($params);   
        return redirect()->action('PacienteController@lista')->withInput(Request::only('nome'));
    }

    public function remove($id) {
        $Paciente = Paciente::find($id);
        $Paciente->delete();
        return redirect()->action('PacienteController@lista');
    }

    public function listaJson() {
        $Pacientes = DB::select('select * from Pacientes');
        return response()->json($Pacientes);;
    }
}
