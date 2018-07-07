<?php
/***************** Descrição do documento ***************
* Nome do ficheiro: menu.blade.php                       *
* UC: P3                                                *
* @author Agostinho Martins                             *
* @versão 1.0                                           *
* Data: 6 Julho de 2018                                 *
* Descrição: menu (include) - Multimedia - ISMT         *
*********************************************************/
$log = 0;
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark float-xs-right">
  <a class="navbar-brand titulo" href="#">
    <img src="imagens/logoMultimediaIsmt-A5.png" width="30" height="32" alt="">&nbsp&nbspMultimédia - ISMT
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link {{ Request::is('aluno') ? 'active' : '' }}" href="{{ route('aluno.index') }}">Alunos</a></li>
        <li class="nav-item"> <a class="nav-link {{ Request::is('professor') ? 'active' : '' }}" href="{{ route('professor.index') }}">Professores</a></li>
    </ul>
  </div>  
</nav>