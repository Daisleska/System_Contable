@extends('layouts.vertical')


@section('css')
<link href="{{ URL::asset('Shreyu/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <div class="col-sm-4 col-xl-6">
        <h4 class="mb-1 mt-0">Panel de Control</h4>
    </div>
    <div class="col-sm-8 col-xl-6">
        <form class="form-inline float-sm-right mt-3 mt-sm-0">
            <div class="form-group mb-sm-0 mr-2">
                <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class='uil uil-file-alt mr-1'></i>Descargar
                    <i class="icon"><span data-feather="chevron-down"></span></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                        <span>Correo</span>
                    </a>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                        <span>Imprimir</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item notify-item">
                        <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                        <span>Re-Generate</span>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@section('content')
    <?php 
    $user_type=\Auth::User()->user_type; 
    ?> 

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Valor Del
                            Inventario</span>
                              <?php
                          
                              if ($valor_inventario) {
                         $total_inventario=array_sum($valor_inventario);
                               }else{
                                $total_inventario=0;
                               }  ?>
                   <h2 class="mb-0">{{number_format($total_inventario, 2,',','.')}} <small>Bs.F</small></h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-primary" data-feather="shopping-bag"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-xl-3">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-12 font-weight-bold">Clientes registrados</span>
                         <?php
                              if ($clientes) {
                                $cantidad=count($clientes);
                               }else{
                                $cantidad=0;
                               }  ?>
                        <h2 class="mb-0" style="color: #006699;">{{$cantidad}}</h2>
                    </div>
                    <div class="align-self-center">
                        <span class="icon-lg icon-dual-warning" data-feather="coffee"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- stats + charts -->
 <div class="col-xl-6">
        <div class="card">
            <div class="card-body pb-0">
                <ul class="nav card-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">Hoy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">7d</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">15d</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">1m</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#">1y</a>
                    </li>
                </ul>
                <h5 class="card-title mb-0 header-title">balance</h5>

                <div id="revenue-chart" class="apex-charts mt-3" dir="ltr"></div>
            </div>
        </div>
    </div>
<!-- row -->
@endsection
@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('Shreyu/assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('Shreyu/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('Shreyu/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('Shreyu/assets/js/pages/dashboard.init.js') }}"></script>
@endsection