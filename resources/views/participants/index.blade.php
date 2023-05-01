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
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Formulario Participantes</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card-body">

                                                        <form action="{{ url('participantes') }}" method="POST">
                                                            @csrf

                                                            <div class="form-group">
                                                                    <label form="name"> Nombres</label>
                                                                    <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del Departamento">
                                                            </div>

                                                            <div class="form-group">
                                                                <label form="description"> Descripción</label>
                                                                <input type="text" name="description" class="form-control">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Registrar Departamento</button>
                                            </form>
                                            </div>
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
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre Completo</th>
                                                <th scope="col">CUI</th>
                                                <th scope="col">Edad</th>
                                                <th scope="col">Municipio</th>
                                                <th scope="col">Departamento</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($participants as $participant )
                                            <tr>
                                                <td>
                                                {{ $participant->id }}
                                                </td>
                                                <td>
                                                    <i class="ni ni-single-02 text-yellow"></i>   {{$participant->name.", ".$participant->last_name }}
                                                </td>
                                                <td>
                                                    {{ $participant->cui }}
                                                </td>
                                                <td>
                                                    {{ $participant->age }}
                                                </td>
                                                <td>
                                                    {{ $participant->Municipality->name }}
                                                </td>

                                                <td>
                                                    {{ $participant->Municipality->Department->name }}
                                                </td>

                                                <td>
                                                    <a href="{{ url('participantes/'.$participant->id.'/edit')}}" class="btn btn-sm btn-primary">Editar </a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete </a>
                                                </td>

                                            </tr>
                                            @endforeach
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
@endsection
