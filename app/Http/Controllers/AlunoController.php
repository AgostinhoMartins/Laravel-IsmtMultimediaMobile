<?php

namespace App\Http\Controllers;

use App\Aluno;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('id')->get();
        

        return view('alunos.index', compact('alunos'));
    }

    public function encryptvalor(){
        return Crypt::encrypt("thisissomevalue");
    }
    public function decryptvalor() {
        return Crypt::decrypt("eyJpdiI6IjRyKytQUUJocXdGS2FGbU1LZTZcL05BPT0iLCJ2YWx1ZSI6ImhncytSQ1I4aDlzMEhYUE9YRUp4S2c5NjVWdFBJSGpWM3lYSzU5OHpOMU09IiwibWFjIjoiMmE4Nzg0MjMxODg1ZWY1ZTcwYjVjNjAwOWEwMzg2MTI5MTFjYTg3NmM2MjU5MWQzMzRlMTg0MjRmZTk4ZWRiMCJ9");
        
    }

}
