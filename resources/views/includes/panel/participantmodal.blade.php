<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-light fa-user-plus">  Formulario Participantes</i></h4>
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

                                                                        <i class="fas fa-solid fa-calendar"> Fecha Capacitaci&oacuten:</i>
                                                                     <input type="date" name="activity_date" min="2023-02-02" max="2023-06-15" class="form-control"  required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">

                                                                    <div class="form-group">
                                                                        <i class="fas fa-duotone fa-book"> Tipo de Capacitaci&oacuten:</i>

                                                                       <select name="activity_name" class="form-control"   required>
                                                                            <option value="">Seleccione Tipo de Capacitaci&oacuten:</option>
                                                                                @foreach ($type_activities as $activity )
                                                                                <option value="{{ $activity->id }}">{{ $activity->name }}</option>

                                                                                @endforeach
                                                                        </select>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">

                                                                        <i class="fas fa-marker"> Nombre del Taller:</i>
                                                                     <input type="text" name="name_workshop"  class="form-control"  style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <i class="fas fa-solid fa-user"> Nombres:</i>

                                                                        <input type="text" name="name" class="form-control" placeholder="Ingrese Nombres" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <i class="fas fa-regular fa-address-book"> Apellidos:</i>

                                                                        <input type="text" name="last_name" class="form-control" placeholder="Ingrese Apellidos" style="text-transform:uppercase;" value=""  onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <i class="fas fa-solid fa-file-signature"> Cui:</i>
                                                                        <input type="number" name="cui" class="form-control" title= "Si no indico cui ingre 999"   placeholder="Ingrese CUI de 13 digitos" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <i class="ni ni-pin-3"> Departamento:</i>
                                                                        <select name="" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Departamento </option>
                                                                                @foreach ($departments as $department )
                                                                                <option value="{{ $department->id }}">{{ $department->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <i class="ni ni-square-pin"> Municipio donde se impartio el taller:</i>
                                                                        <select name="municipality_id" class="form-control"  id="select-municipio" required>
                                                                            <option value="" selected disabled hidden>Seleccione Municipio </option>
                                                                                @foreach ($municipios as $municipio )
                                                                                <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">

                                                                        <i class="fas fa-shoe-prints">  Edad:</i>
                                                                        <input type="number" name="age" class="form-control" title= "Si no indico edad ingrese 999" placeholder="Edad" >
                                                                     </div>
                                                                </div>

                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <i class="fas fa-venus-mars"> Sexo:</i>
                                                                        <select name="generous_id" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Sexo </option>
                                                                                @foreach ($generos as $genero )
                                                                                <option value="{{ $genero->id }}">{{ $genero->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                      <i class="fas fa-user-friends"> Identidad Cultural:</i>

                                                                        <select name="identities_id" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione Grupo Cultural </option>
                                                                                @foreach ($identitys as $identity )
                                                                                <option value="{{ $identity->id }}">{{ $identity->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                     </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <i class="fab fa-accessible-icon"> Tiene alguna discapacidad:</i>

                                                                        <select  name="disability" class="form-control" required >
                                                                            <option value="" selected disabled hidden>Selecciona Opci&oacuten</option>

                                                                            <option value="NO">NO</option>
                                                                            <option value="SI">SI</option>
                                                                            <option value="SI">No quiso contestar</option>
                                                                          </select>
                                                                    </div>
                                                                </div>


                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <i class="fas fa-wheelchair"> Tipo de discapacidad:</i>
                                                                       <select  name="type_disability" class="form-control" required >
                                                                            <option value="" selected disabled hidden>Selecciona Opci&oacuten</option>
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
                                                                        <option value="">Seleccione Grupo Linguisticos </option>
                                                                            @foreach ($linguistics as $linguistic )
                                                                            <option value="{{ $linguistic->id }}">{{ $linguistic->name }}</option>

                                                                            @endforeach
                                                                    </select>
                                                                     </div>
                                                                </div>



                                                            </div>
                                                           <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
                                                    </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"> Cerrar</i> </button>
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"> Guardar Participante</i> </button>
                                            </form>
                                            </div>
                                        </div>
