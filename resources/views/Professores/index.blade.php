@extends('layouts.master')
@section('content')
<table class="table-bordered table-sm text-center tab-center">
    <tr class="bg-danger tab-texto text-white">
        <th>Nº do prof.</th>
        <th>Nome</th>
        <th>Tipo de Prof.</th>
        <th>Data (atualização)</th>
        <th>+ Inform.</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>
    <?php foreach($professores as $professor): ?>
    <tr class="tab-texto">
        <td><?php echo $professor->n_professor; ?></td>
        <td><?php echo $professor->nome; ?></td>
        <td><?php echo $professor->tipo_professor; ?></td>
        <td><?php echo $professor->updated_at->format('d/m/Y'); ?></td>
        <td><a class="btn btn-info tab-botao" href="{{ URL::route('professorinfo.edit', $professor->id) }}"> + Info. </a> </td>
        <td><a class="btn btn-success tab-botao" href="{{ URL::route('professor.edit', $professor->id) }}"> editar </a> </td>
        <td>
            <form action="{{ route('professor.destroy', $professor->id) }}" method="POST"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger tab-botao">Apagar</button>
            </form>
        </td>
    </tr>
    <?php endforeach ?>
                
</table>
<div class="centrar-botao">
    <a class="btn btn-primary botao-ext" href="{{ URL::route('professor.create')}}">Inserir novo Professores...</a>
</div>
@stop