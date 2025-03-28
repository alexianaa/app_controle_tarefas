@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header" style="display: flex; justify-content: space-between;">
              Tarefas 
              <div>
                <a href="{{ route('tarefa.create') }}">Novo</a>
                <a href="{{ route('tarefa.exportacao', ['extensao' => 'xlsx']) }}" style="margin-left: 10px;">XLSX</a>
                <a href="{{ route('tarefa.exportacao', ['extensao' => 'csv']) }}" style="margin-left: 10px;">CSV</a>
                <a href="{{ route('tarefa.exportacao', ['extensao' => 'pdf']) }}" style="margin-left: 10px;">PDF</a>
                <a href="{{ route('tarefa.exportar') }}" target="_blank" style="margin-left: 10px;">PDF v2</a>
              </div>
            </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tarefa</th>
                        <th scope="col">Data Conclusão</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tarefas as $key => $t)
                        <tr>
                          <td scope="row" >{{ $t['id'] }}</td>
                          <td>{{ $t['tarefa'] }}</td>
                          <td>{{ date('d/m/Y', strtotime($t['data_limite_conclusao'])) }}</td>
                          <td><a href="{{ route('tarefa.edit', ['tarefa' => $t['id']]) }}">Editar</a></td>
                          <td>
                            <form id="form_{{ $t['id'] }}" method="post" action="{{ route('tarefa.destroy', ['tarefa' => $t['id']]) }}">
                              @method('DELETE')
                              @csrf
                            </form>
                            <a onclick="document.getElementById('form_{{ $t['id'] }}').submit()" href="#">Exluir</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                  <nav>
                    <ul class="pagination">

                      <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a></li>

                      @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                        <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}">
                          <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                        </li>
                      @endfor

                      <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Avançar</a></li>

                    </ul>
                  </nav>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
