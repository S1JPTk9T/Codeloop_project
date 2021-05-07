<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Student;
use App\Models\User;


class Students extends Controller
{
   private $objUser;
   private $objStudent;

    public function __construct() {
      $this->objUser  = new User();
      $this->objStudent = new Student();

    }

    public function index() {
        return "Hello World";
    }

    public function show() {
      $data = $this->objStudent->all();
      return view('show',compact('data'));
    }

    public function create() {
       return view('create');
    }

    public function store(Request $request) {
      $this->objStudent->create([
          'nome' => $request->nome,
          'nascimento'=> $request->nascimento,
          'ano'=> $request->ano,
          'cep'=>$request->cep,
          'rua'=> $request->rua,
          'n'=> $request->n,
          'complemento' => $request->complemento,
          'bairro'=> $request->bairro,
          'cidade'=> $request->cidade,
          'estado'=> $request->estado,
          'mothername' => $request->mothername,
          'mothercpf'=> $request->mothercpf,
          'payment'=> $request->payment
      ]);
      return view('store');
    }

  public function destroy($id)
  {
      $del = $this->objStudent->destroy($id);
      return ($del)?"Excluido":"Não Excluido";   
  }

}
