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
                                                Ingrese datos del Participante
                                            </button>
                                        </div>

                                      <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Formulario Participantes</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="card-body ">
                                                        <div class="modal-body">

                                                        <form action="{{ url('participantes') }}" method="POST">
                                                            @csrf

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                    Fecha Capacitación: <input type="date" name="activity_date" class="form-control" placeholder="Ingrese Fecha" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">

                                                                    <div class="form-group">
                                                                        Tipo de Capacitación:
                                                                        <input type="text" name="activity_name" class="form-control" placeholder="Ingrese nombre de la Actividad" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                     Nombres:
                                                                        <input type="text" name="name" class="form-control" placeholder="Ingrese Nombres" required>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        Apellidos:
                                                                        <input type="text" name="last_name" class="form-control" placeholder="Ingrese Apellidos" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        Cui:
                                                                        <input type="text" name="cui" class="form-control" placeholder="Ingrese CUI">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                     Edad:
                                                                        <input type="number" name="age" class="form-control" placeholder="" required>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        Tiene alguna discapacidad:
                                                                        <select  name="disability" class="form-control" >
                                                                            <option value="" selected disabled hidden>Selecciona Optición</option>
                                                                            <option value="NO">NO</option>
                                                                            <option value="SI">SI</option>
                                                                          </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        Tipo de discapacidad:

                                                                        <select  name="type_disability" class="form-control" >
                                                                            <option value="" selected disabled hidden>Selecciona Opción</option>
                                                                            <option value="Ningua">Ninguna</option>
                                                                            <option value="Discapacidad Fisica">Discapacidad Fisica</option>
                                                                            <option value="Discapacidad Visual">Discapacidad Visual</option>
                                                                            <option value="Discapacidad Auditiva">Discapacidad Auditiva</option>
                                                                            <option value="Discapacidad Sensorial">Discapacidad Sensorial</option>
                                                                            <option value="Discapacidad Multiple">Discapacidad Multiple</option>
                                                                            <option value="Discapacidad Psicosocial">Discapacidad Psicosocial</option>
                                                                            <option value="Discapacidad Mental">Discapacidad Mental</option>
                                                                          </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                     Departamento:
                                                                        <select name="" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Departamento </option>
                                                                                @foreach ($departments as $department )
                                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        Municipio:
                                                                        <select name="municipality_id" class="form-control"  id="select-municipio" required>
                                                                            <option value="" selected disabled hidden>Seleccione Municipio </option>
                                                                                @foreach ($municipios as $municipio )
                                                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        Genero:
                                                                        <select name="generous_id" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Género </option>
                                                                                @foreach ($generos as $genero )
                                                                                <option value="{{ $genero->id }}">{{ $genero->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                     Grupo Linguistico:
                                                                     <select name="linguistics_id" class="form-control" id="select-department" required>
                                                                        <option value="">Seleccione Grupo Linguisticos </option>
                                                                            @foreach ($linguistics as $linguistic )
                                                                            <option value="{{ $linguistic->id }}">{{ $linguistic->name }}</option>

                                                                            @endforeach
                                                                    </select>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        Identidad Cultural:
                                                                        <select name="identities_id" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Grupo Cultural </option>
                                                                                @foreach ($identitys as $identity )
                                                                                <option value="{{ $identity->id }}">{{ $identity->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                     </div>
                                                                </div>


                                                            </div>
                                                           <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Registrar Participante</button>
                                            </form>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>


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
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Programa de Formación</th>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Edad</th>
                                                <th scope="col">Municipios</th>
                                                <th scope="col"> &nbsp; </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>

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
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js">    </script>

       <script src="{{ asset('js/select_department.js') }}"></script>

     <script>
              $(document).ready(function () {
              $('#idparticipants').DataTable({

                    "responsive":true,
                    "serverSide": true,
                    "ajax": "{{ url('api/Participants')  }}",
                    "columns": [
                        {data:'id',
                        name: 'id'},
                        {data:'activity_date',
                        name: 'activity_date'},
                        {data:'activity_name',
                        name: 'activity_name'},
                        {data:'name',
                        name: 'name'},
                        {data:'last_name',
                        name: 'last_name'},
                        {data:'age',
                        name: 'age'},
                        {data:'municipio',
                        name: 'municipalities.name'},
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


