@extends('layouts.panel')

@section('content')


    <div class="card shadow">
        <div class="card-header border-0">

            <!--Inicia del Menu slider -->
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Ciudadanos Capacitados</a>
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
                                        <h3 class="mb-0">Listado de Participantes</h3>
                                        </div>
                                        <div class="col text-right">
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-user-plus"> Ingrese datos del Participante</i>
                                            </button>
                                        </div>

                                      <!-- Modal -->

                                      @include('includes.panel.participantmodal')
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session('errorsa'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                {{ session('errorsa') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                                     <div class="card-body">
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
                                    <table  id="idparticipants" class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th style="width: 20px" >Fecha</th>
                                                <th scope="col"  >Nombre del taller</th>
                                                <th scope="col"  >Programa de Categoria</th>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Edad</th>
                                                <th scope="col">Municipio</th>
                                                 <th scope="col">Departamento</th>
                                                 <th scope="col">Digitalizador</th>
                                                <th scope="col"> &nbsp; </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>

@include('includes.panel.editparticipantmodal')



                                    </table>

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

      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js">    </script>

       <script src="{{ asset('js/select_department.js') }}"></script>

     <script>
              $(document).ready(function () {
              $('#idparticipants').DataTable({
             //   "bFilter": false,
              //   "scrollY": 200,
                   "serverSide": true,
                    "ajax": "{{ url('api/Participants')  }}",
                    "columns": [
                        {data:'id',
                        name: 'id'},
                        {data:'activity_date',
                        name: 'activity_date'},

                        {data:'name_workshop',
                       name: 'name_workshop'},

                        {data:'activity',
                       name: 'act.name'},


                        {data:'name',
                        name: 'name'},
                        {data:'last_name',
                        name: 'last_name'},
                        {data:'age',
                        name: 'age'},
                       {data:'municipio',
                        name: 'muni.name'},
                      {data:'departamento',
                       name: 'dep.name'},

                       {data:'usuario',
                       name: 'digitalizador.name'},
                        {data:'btn',
                        name: 'btn'},
                     ],
                     "pageLength": 5,
                    "language":{
                        "info":"_TOTAL_ Registros",
                        "search": "Buscar",
                        "show": "Ver",
                        "zeroRecords": "Sin resultados encontrados",
                        "paginate": {
                            "next": 'Siguiente',
                            "previous": "Anterior",

                        },
                        "lengthMenu":'Mostrar <select>'+
                                     '<option value="5">5</option>'+
                                     '<option value="10">10</option>'+
                                     '<option value="25">25</option>'+
                                     '<option value="-1">Todos</option>'+
                                     '</select> registros'

                    }

              });
              });


      </script>
@stop
