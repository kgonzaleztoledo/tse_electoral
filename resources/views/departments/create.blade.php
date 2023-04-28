@extends('layouts.panel')

@section('content')


    <div class="card shadow">
        <div class="card-header border-0">

            <!--Inicia del Menu slider -->
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Departamentos</a>
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
                                        <h3 class="mb-0">Nuevo departamento</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="{{url('categorias/departamentos')  }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-chevron-left"> </i>
                                            Regresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="card-body">
                        <form action="{{ url('categorias/departamentos') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                    <label form="name"> Nombre del Departamento</label>
                                    <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label form="description"> Descripción</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm-primary">Crear departamento</button>



                        </form>
                    </div>
                </div>


                <!-- Fin modulo de tablas view -->



        </div>

    </div>







@endsection
