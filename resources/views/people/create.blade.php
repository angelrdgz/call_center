@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 pt-2">
                        <h5 class="m-0 font-weight-bold text-primary">Recursos Humanos</h5>
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Descripción del trabajo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Reclutamiento y selección</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#fourth" role="tab" aria-controls="Three" aria-selected="false">Test Psicometricos</a>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <h5 class="card-title">Tab Card One</h5>
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Solicitante</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Departamento</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Fecha de Prospección</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Número de vacantes</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Puesto</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Lugar de entrevista</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="">Responsabilidades</label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            <div class="col-sm-6">
                                <label for="">Comentarios</label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Código de la vacante</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Titulo</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Departamento</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Jefe Inmediato</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-12">
                                <label for="">Responsabilidades</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="">Habilidades</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="">Experiencia</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="">Requisitos de Formacion Academica</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="">Conocimientos</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <label for="">Otros Conocimientos</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="">Solicitud aprobada </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                                <label for="">Comentarios sobre la aprobación </label>
                                <textarea name="" id="" cols="30" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                        <div class="row">
                        <div class="col-sm-4">
                                <label for="">JAñadir tipo de Test a aplicar</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Fecha de Aplicación</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Candidato</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Fecha y hora de Aplicación para el Test Psicométrico</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="">Mando el Test a la hora acordada / Terminó el Test a la hora acordada</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Continua en el proceso</label>
                                <select name="" id="" class="form-control"></select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@stop