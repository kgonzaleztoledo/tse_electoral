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
                                                                    Fecha Capacitaci&oacuten: <input type="date" name="activity_date" class="form-control" placeholder="Ingrese Fecha" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">

                                                                    <div class="form-group">
                                                                        Tipo de Capacitaci&oacuten:
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
                                                                        <input type="number" name="cui" class="form-control" placeholder="Ingrese CUI">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
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
                                                                <div class="col-md-5">
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
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                     Edad:
                                                                        <input type="number" name="age" class="form-control" placeholder="" required>
                                                                     </div>
                                                                </div>

                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        G&eacutenero:
                                                                        <select name="generous_id" class="form-control" id="select-department" required>
                                                                            <option value="">Seleccione G&eacutenero </option>
                                                                                @foreach ($generos as $genero )
                                                                                <option value="{{ $genero->id }}">{{ $genero->name }}</option>

                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
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
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        Tiene alguna discapacidad:
                                                                        <select  name="disability" class="form-control" required >
                                                                            <option value="" selected disabled hidden>Selecciona Opci&oacuten</option>
                                                                            <option value="NO">NO</option>
                                                                            <option value="SI">SI</option>
                                                                          </select>
                                                                    </div>
                                                                </div>


                                                            </div>



                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        Tipo de discapacidad:

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
                                                                          </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                     Idioma:
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
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Registrar Participante</button>
                                            </form>
                                            </div>
                                        </div>
