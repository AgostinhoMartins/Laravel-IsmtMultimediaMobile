<?php

namespace App\Http\Controllers;

use App\Aluno;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('id')->get();
        

        return view('alunos.index', compact('alunos'));
    }
}
