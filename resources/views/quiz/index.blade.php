@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 pt-2">
                        <h5 class="m-0 font-weight-bold text-primary">Encuestas de Calidad</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ url('admin/quiz/1') }}" class="btn btn-link">
                            <i class="fas fa-plus"></i>
                            Nueva Encuesta
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Asesor</th>
                                <th>Linea de Negocio</th>
                                <th>ID de la llamada</th>
                                <th>RCS</th>
                                <th>Calificación</th>
                                <th>Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sets as $set)
                            <tr>
                                <td>{{ date('d/m/Y H:i:s', strtotime($set->created_at))}}</td>
                                <td>{{ $set->client }}</td>
                                <td>{{ $set->adviser->name }}</td>
                                <td>{{ $set->business_line == 1 ? "Atención a clientes":"Ventas" }}</td>
                                <td>{{ $set->call_id }}</td>
                                <td>{{ $set->rcs == 1 ? "Sí":"No" }}</td>
                                <td>
                                    @php
                                    $total = 0;

                                    foreach($set->answers as $answer){
                                    $question = App\Question::find($answer->question_id);
                                    $ans = App\Answer::find($answer->answer_id);
                                    $total += (($ans->points / 100) * $question->points);
                                    }
                                    echo $total.'%';
                                    @endphp
                                </td>
                                <td>{{ $set->comments }}</td>
                                <!--<td>
      <a href="{{ url('ordenes-de-fabricacion/'.$set->id.'/edit')}}" class="btn btn-warning btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-pencil-alt"></i>
                    </span>
                    <span class="text">Modificar</span>
                  </a>
                  <a href="{{ url('ordenes-de-fabricacion/'.$set->id)}}" target="_blank" class="btn btn-info btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                    <i class="far fa-file-pdf"></i>
                    </span>
                    <span class="text">PDF</span>
                  </a>
                  <a href="{{ url('ordenes-de-fabricacion/'.$set->id)}}" class="btn btn-danger btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Cancelar</span>
                  </a>
      </td>-->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop