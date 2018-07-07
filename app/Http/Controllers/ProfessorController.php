<?php

namespace App\Http\Controllers;

use App\Professor;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProfessorController extends Controller
{
    public function index()
    {
        $professores = Professor::orderBy('id')->get();

        return view('professores.index', compact('professores'));
    }
}
