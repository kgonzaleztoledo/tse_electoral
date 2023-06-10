@extends('layouts.panel')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">{{ __('Dashboard') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                {{ __('Bienvenido :)') }} Fecha: {{ now()->toDateTimeString()  }}<br>
            Email: {{ auth()->user()->email }}<br>
               Puesto: {{ auth()->user()->puesto }}


            </div>
        </div>

        <br>
        <div class="row">

            <div class="col-xl-3 col-md-6">
            <div class="card card-stats">

            <div class="card-body">
            <div class="row">
            <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">    <a href="{{ url('participantes') }}">Total de Participantes Registrados</a></h5>
            <span class="h2 font-weight-bold mb-0">{{ $participants }}</span>
            </div>
            <div class="col-auto">
            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
            <i class="ni ni-chart-pie-35"></i>
            </div>
            </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> Meta {{ $participants*100/50000 }}%</span>
            <span class="text-nowrap">Porcentaje</span>
            </p>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card card-stats">

            <div class="card-body">
            <div class="row">
            <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total de Mujeres Capacitadas en Talleres</h5>
            <span class="h2 font-weight-bold mb-0">{{ $femenino }}</span>
            </div>
            <div class="col-auto">
            <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
            <i class="ni ni-chart-bar-32"></i>
            </div>
            </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            <span class="text-success mr-2"> {{ number_format ($femenino*100/$participants,2) }} %</span>
            <span class="text-nowrap">Porcentaje</span>
            </p>
            </div>
            </div>
            </div>
            <div class="col-xl-3 col-md-6">
            <div class="card card-stats">

            <div class="card-body">
            <div class="row">
            <div class="col">
            <h5 class="card-title text-uppercase text-muted mb-0">Total de Hombres Capacitados en Talleres</h5>
            <span class="h2 font-weight-bold mb-0">{{ $masculino }}</span>
            </div>
            <div class="col-auto">
            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
            <i class="ni ni-single-02"></i>
            </div>
            </div>
            </div>
            <p class="mt-3 mb-0 text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ number_format($masculino*100/$participants,2) }} %</span>
            <span class="text-nowrap">Porcentaje</span>
            </p>
            </div>
            </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">

                <div class="card-body">
                <div class="row">
                <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">Total de Personas que no quisieron identificar su sexo</h5>
                <span class="h2 font-weight-bold mb-0">{{ $otros_sex }}</span>
                </div>
                <div class="col-auto">
                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                <i class="ni ni-chart-bar-32"></i>
                </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> {{ number_format ($otros_sex*100/$participants,2) }} %</span>
                <span class="text-nowrap">Porcentaje</span>
                </p>
                </div>
                </div>
                </div>



        </div>




    </div>

    <div class="col-md-6 mb-4">
        <div class="card">

            <div class="card-body">
                  <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">

                <tr>
                    <th scope="col"><center>Total de Personas Capacitadas por Departamento</center></th>
                    <th scope="col"></th>

                  </tr>
                <tr>
                <th scope="col">Departamento</th>
                <th scope="col">Total</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td class="text-center">{{ $department->department_count }}</td>

                </tr>
            @endforeach

            </tbody>
          </table>
        </div>


            </div>
        </div>






    </div>


</div>


@endsection
