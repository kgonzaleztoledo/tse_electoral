@extends('layouts.panel')

@section('content')

      <!--Inicia del Menu slider -->

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
                                        <h3 class="mb-0">Actualizar Participante</h3>
                                        </div>
                                        <div class="col text-right">
                                        <a href="{{url('participantes')  }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-chevron-left"> </i>
                                            Regresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="card-body">

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

                        <form action="{{ url('participantes/'.$participant->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="card-body ">
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <i class="fas fa-solid fa-calendar"> Fecha Capacitaci&oacuten:</i>
                                             <input type="date" name="activity_date" value="{{$participant->activity_date}}"  min="2023-04-02" max="2023-06-30" class="form-control"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <i class="fas fa-duotone fa-book"> Tipo de Capacitaci&oacuten:</i>

                                               <select name="activity_name" class="form-control"   required>
                                                <option value="{{$participant->type_activities_id}}">{{$participant->activity->name}}</option>

                                                @foreach ($category_activities as $category_activitie )
                                                <option value="{{ $category_activitie->id }}">{{ $category_activitie->name }}</option>

                                                @endforeach

                                                </select>

                                            </div>
                                        </div>

                                    </div> <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <i class="fas fa-marker"> Nombre del Taller:</i>
                                             <input type="text" name="name_workshop"  class="form-control"  style="text-transform:uppercase;" value="{{ $participant->name_workshop  }}"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                            </div>
                                        </div>
                                    </div> <br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fas fa-solid fa-user"> Nombres:</i>

                                                <input type="text" name="name" class="form-control" placeholder="Ingrese Nombres" style="text-transform:uppercase;" value="{{ $participant->name  }}"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                             </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fas fa-regular fa-address-book"> Apellidos:</i>

                                                <input type="text" name="last_name" class="form-control" placeholder="Ingrese Apellidos" style="text-transform:uppercase;" value="{{ $participant->last_name  }}"  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fas fa-solid fa-file-signature"> Cui:</i>
                                                <input type="number" name="cui" class="form-control" title= "Si no indico cui ingre 999" value="{{ $participant->cui}}"  placeholder="Ingrese CUI de 13 digitos" >
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <i class="ni ni-square-pin"> Municipio donde se impartio el taller:</i>
                                                <select name="municipality_id" class="form-control"  id="select-municipio" required>
                                                    <option value="{{$participant->municipality_id}}">{{$participant->department->name}}</option>

                                                    @foreach ($municipios as $municipio )
                                                    <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <i class="fas fa-shoe-prints">  Edad:</i>
                                                <input type="number" name="age" class="form-control" title= "Si no indico edad ingrese 999" value="{{ $participant->age}}" placeholder="Edad" >
                                             </div>
                                        </div>

                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fas fa-venus-mars"> Sexo:</i>
                                                <select name="generous_id" class="form-control" id="select-department" required>
                                                    <option value="{{$participant->genders_id}}">{{$participant->gender->name}}</option>

                                                    @foreach ($gender as $gende )
                                                    <option value="{{ $gende->id }}">{{ $gende->name }}</option>

                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <i class="fas fa-user-friends"> Identidad Cultural:</i>

                                                <select name="identities_id" class="form-control" id="select-department" required>
                                                    <option value="{{$participant->identities_id}}">{{$participant->identiti->name}}</option>

                                                    @foreach ($identiti as $identiti )
                                                    <option value="{{ $identiti->id }}">{{ $identiti->name }}</option>

                                                    @endforeach

                                                </select>
                                             </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <i class="fab fa-accessible-icon"> Tiene alguna discapacidad:</i>

                                                <select  name="disability" class="form-control" required >
                                                    <option value="{{$participant->disability}}">{{$participant->disability}}</option>
                                                    <option value="NO">NO</option>
                                                    <option value="SI">SI</option>
                                                    <option value="No quiso contestar">No quiso contestar</option>
                                                  </select>
                                            </div>
                                        </div>


                                    </div><br>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <i class="fas fa-wheelchair"> Tipo de discapacidad:</i>
                                               <select  name="type_disability" class="form-control" required >
                                                <option value="{{$participant->type_disability}}">{{$participant->type_disability}}</option>
                                                    <option value="Ninguna">Ninguna</option>
                                                    <option value="Discapacidad Fisica">Discapacidad Fisica</option>
                                                    <option value="Discapacidad Visual">Discapacidad Visual</option>
                                                    <option value="Discapacidad Auditiva">Discapacidad Auditiva</option>
                                                    <option value="Discapacidad Sensorial">Discapacidad Sensorial</option>
                                                    <option value="Discapacidad Multiple">Discapacidad Multiple</option>
                                                    <option value="Discapacidad Psicosocial">Discapacidad Psicosocial</option>
                                                    <option value="Discapacidad Mental">Discapacidad Mental</option>
                                                    <option value="No quiso contestar">No quiso contestar</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <i class="fas fa-globe"> Idioma:</i>
                                                <select name="linguistics_id" class="form-control" id="select-department" required>
                                                    <option value="{{$participant->linguistics_id}}">{{$participant->linguistic->name}}</option>

                                                    @foreach ($linguistic as $linguisti )
                                                    <option value="{{ $linguisti->id }}">{{ $linguisti->name }}</option>

                                                    @endforeach
                                            </select>
                                             </div>
                                        </div>



                                    </div>



                            </div>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <h5 class="mb-0">¿Estás seguro de que quieres actualizar este registro?</h5>
                                        </div>
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-primary primary-sm">Actualizar Participante</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                        </form>
                    </div>
                </div>


                <!-- Fin modulo de tablas view -->



        </div>

    </div>







@endsection
