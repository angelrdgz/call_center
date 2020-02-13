@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 pt-2">
                        <h5 class="m-0 font-weight-bold text-primary">Call Center</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ url('admin/calibration/create') }}" class="btn btn-link">
                            <i class="fas fa-plus"></i>
                            Nueva Solicitud
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
</div>

@stop