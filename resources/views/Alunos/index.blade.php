@extends('layouts.master')
@section('content')
<table class="table-bordered table-sm text-center tab-center">
        <tr class="bg-warning tab-texto">
            <th>Nº do Aluno</th>
            <th>Nome</th>
            <th>Ano Curricu. Aluno</th>
            <th>Data (atualização)</th>
            <th>Mais Info.</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
        <?php foreach($alunos as $aluno): ?>
        <tr class="tab-texto">
            <td><?php echo $aluno->n_aluno; ?></td>
            <td><?php echo $aluno->nome; ?></td>
            <td><?php echo $aluno->ano_aluno; ?></td>
            <td><?php echo $aluno->updated_at->format('d/m/Y'); ?></td>
            <td><a class="btn btn-info tab-botao" href="{{ URL::route('alunoinfo.edit', $aluno->id) }}"> + Info. </a> </td>
            <td><a class="btn btn-success tab-botao" href="{{ URL::route('aluno.edit', $aluno->id) }}"> editar </a> </td>
            <td>
                <form action="{{ route('aluno.destroy', $aluno->id) }}" method="POST"> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger tab-botao">Apagar</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
                
</table>
<div class="centrar-botao">
    <a class="btn btn-primary botao-ext" href="{{ URL::route('aluno.create')}}">Inserir novo aluno...</a>
</div>
@stop