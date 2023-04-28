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
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Genero</a>
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
                                        <h3 class="mb-0">Departamentos</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="{{url('categorias/departamentos/create')  }}" class="btn btn-sm btn-primary">Nuevo Departamento</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre del Departamento</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($departments as $department )


                                            <tr>
                                                <th scope="row">
                                                {{ $department->id }}
                                                </th>
                                                <td>
                                               {{$department->name}}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary">Editar </a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete </a>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h3 class="mb-0">Municipios</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">Nuevo Muicipio</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Nombre del Departamento</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($municipalitys as $municipality )


                                            <tr>
                                                <th scope="row">
                                                {{ $municipality->id }}
                                                </th>
                                                <td>
                                               {{$municipality->name}}
                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary">Editar </a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete </a>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h3 class="mb-0">Page visits</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Visitors</th>
                                            <th scope="col">Unique users</th>
                                            <th scope="col">Bounce rate</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                            /argon/
                                            </th>
                                            <td>
                                            4,569
                                            </td>
                                            <td>
                                            340
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/index.html
                                            </th>
                                            <td>
                                            3,985
                                            </td>
                                            <td>
                                            319
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/charts.html
                                            </th>
                                            <td>
                                            3,513
                                            </td>
                                            <td>
                                            294
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/tables.html
                                            </th>
                                            <td>
                                            2,050
                                            </td>
                                            <td>
                                            147
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/profile.html
                                            </th>
                                            <td>
                                            1,795
                                            </td>
                                            <td>
                                            190
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Fin modulo de tablas view -->



        </div>

    </div>

    <br>

    <div class="card shadow">
        <div class="card-header border-0">

            <!--Inicia del Menu slider -->
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Genero</a>
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
                                        <h3 class="mb-0">Page visits</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Visitors</th>
                                            <th scope="col">Unique users</th>
                                            <th scope="col">Bounce rate</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                            /argon/
                                            </th>
                                            <td>
                                            4,569
                                            </td>
                                            <td>
                                            340
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/index.html
                                            </th>
                                            <td>
                                            3,985
                                            </td>
                                            <td>
                                            319
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/charts.html
                                            </th>
                                            <td>
                                            3,513
                                            </td>
                                            <td>
                                            294
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/tables.html
                                            </th>
                                            <td>
                                            2,050
                                            </td>
                                            <td>
                                            147
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/profile.html
                                            </th>
                                            <td>
                                            1,795
                                            </td>
                                            <td>
                                            190
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h3 class="mb-0">Page visits</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Visitors</th>
                                            <th scope="col">Unique users</th>
                                            <th scope="col">Bounce rate</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                            /argon/
                                            </th>
                                            <td>
                                            4,569
                                            </td>
                                            <td>
                                            340
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/index.html
                                            </th>
                                            <td>
                                            3,985
                                            </td>
                                            <td>
                                            319
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/charts.html
                                            </th>
                                            <td>
                                            3,513
                                            </td>
                                            <td>
                                            294
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/tables.html
                                            </th>
                                            <td>
                                            2,050
                                            </td>
                                            <td>
                                            147
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/profile.html
                                            </th>
                                            <td>
                                            1,795
                                            </td>
                                            <td>
                                            190
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h3 class="mb-0">Page visits</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="#!" class="btn btn-sm btn-primary">See all</a>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- Projects table -->
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Visitors</th>
                                            <th scope="col">Unique users</th>
                                            <th scope="col">Bounce rate</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                            /argon/
                                            </th>
                                            <td>
                                            4,569
                                            </td>
                                            <td>
                                            340
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/index.html
                                            </th>
                                            <td>
                                            3,985
                                            </td>
                                            <td>
                                            319
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/charts.html
                                            </th>
                                            <td>
                                            3,513
                                            </td>
                                            <td>
                                            294
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/tables.html
                                            </th>
                                            <td>
                                            2,050
                                            </td>
                                            <td>
                                            147
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            /argon/profile.html
                                            </th>
                                            <td>
                                            1,795
                                            </td>
                                            <td>
                                            190
                                            </td>
                                            <td>
                                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Fin modulo de tablas view -->



        </div>

    </div>





@endsection
