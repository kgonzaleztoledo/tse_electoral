@extends('layouts.panel')

@section('content')


    <div class="card shadow">
        <div class="card-header border-0">

            <!--Inicia del Menu slider -->
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab"
                        data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                        aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Modulo de Reportes</a>
                    </li>

                </ul>
            </div>

            <!--Fin del Menu slider -->

                <!-- Inicia tabla -->

                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <center><h3 class="mb-0">Gráfica de Personas Capacitadas a nivel Nacional</h3></center>
                                        </div>

                                      <!-- Modal -->

                                </div>
                            </div>
                        </div>


                                     <div class="card-body" id="prueba1">
                                        @if(session('notification'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                            {{ session('notification') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        @foreach ($errors->all() as $error )
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                            <span class="alert-text"><strong></strong> {{ $error }}</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endforeach
                                        @endif

                                     </div>


                            </div>

                        </div>
                    </div>


                <!-- Fin modulo de tablas view -->


                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <center><h3  class="mb-0">Gráfica Nacional por Identidad de género </h3></center>
                                        </div>

                                      <!-- Modal -->

                                </div>
                            </div>
                        </div>


                                     <div class="card-body" id="prueba2">
                                        @if(session('notification'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                            {{ session('notification') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endif

                                        @if($errors->any())
                                        @foreach ($errors->all() as $error )
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                            <span class="alert-text"><strong></strong> {{ $error }}</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endforeach
                                        @endif

                                     </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->


                                    </div>


                            </div>

                        </div>
                    </div>


                <!-- Fin modulo de tablas view -->

                <div class="card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                       <center> <h3 class="mb-0">Gráfica por Grupo lingüístico</h3></center>
                                        </div>

                                      <!-- Modal -->

                                </div>
                            </div>
                        </div>


                        <div class="card-body" id="prueba3">
                            @if(session('notification'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                {{ session('notification') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            @if($errors->any())
                            @foreach ($errors->all() as $error )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text"><strong></strong> {{ $error }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                            @endif

                         </div>


                            </div>

                        </div>
                    </div>


                <!-- Fin modulo de tablas view -->


    </div>




        </div>

    </div>



@stop

@section('scripts')
<script src="{{ asset('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

     <script>
        // Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('prueba1', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Total de Participante Capacitados'
    },
    subtitle: {
        text: 'Fuente: ' +
            '<a href=https://www.tse.org.gt/index.php/sistema-de-estadisticas/estadisticas-de-empadronados" ' +
            'target="_blank">tse.org.gt</a>'
    },
    xAxis: {
        categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
    },
    yAxis: {
        title: {
            text: 'Cantidad de Participantes'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Total Participantes Registrados',
        data: @json($counts)
    },
    {
        name: 'Guatemala',
        data: @json($guatemalas)
    },
    {
        name: 'El Progreso',
        data: @json($elprogresos)
    },
    {
        name: 'Sacatepequez',
        data: @json($sacatepequezs)
    },
    {
        name: 'Chimaltenango',
        data: @json($chimaltenangos)
    },

]
});



//segunda grafica

Highcharts.chart('prueba2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Gráfica Nacional por Identidad de género'
    },
    subtitle: {
        text: 'Fuente: https://tse.org.gt/'
    },
    xAxis: {
        categories: [
            'Ene',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad por Género (Hombre y Mujeres)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Hombres',
        data: @json($sexcounts1)
    },
    {
        name: 'Mujeres',
        data: @json($sexcounts2)
    }
    ,
    {
        name: 'Hombre/T',
        data: @json($sexcounts3)
    },
    {
        name: 'Mujer/T',
        data: @json($sexcounts4)
    }
    ,
    {
        name: 'No quiso contestar',
        data: @json($sexcounts5)
    }

    ]
});


Highcharts.chart('prueba3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Gráfica por Grupo lingüístico'
    },
    subtitle: {
        text: 'Fuente: https://tse.org.gt/'
    },
    xAxis: {
        categories: [
            'Ene',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad por Grupo lingüístico'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.0f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Español',
        data: @json($idiomacounts1)
    },
    {
        name: 'Mam',
        data: @json($idiomacounts2)
    },

    {
        name: 'Poqoman',
        data: @json($idiomacounts3)
    }

    ]
});

      </script>
@stop
