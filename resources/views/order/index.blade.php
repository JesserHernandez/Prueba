@extends('layouts.Panel')

@section('content')
<div class="card shadow">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="mt-3 ml-3">Lista de pedidos</h3>
        </div>
        <div class="col text-right">
            <a class="mr-2 mt-3 btn btn-primary" data-toggle="modal" data-target="#CreateModal">Nuevo
                <i class="ml-2 fa-sharp fa-solid fa-plus"></i>
            </a>
            <a href="#" class="mr-2 mt-3 btn btn-primary">Exportar
                <i class="ml-2 fa-solid fa-file-export"></i>
            </a>
        </div>
    </div>
    <div class = "card-body">
    </div>
    <div class="table-responsive">
    <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Número Telónico</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Cantidad Producto</th>
                    <th scope="col">Codigo Medicamento</th>
                    <th scope="col">Medicamento</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Condición</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $pedidos)
                <tr>
                    <th scope="row">{{$pedidos->OrderCode}}</th>
                    <td>{{$pedidos->PhoneNumber}}</td>
                    <td>{{$pedidos->Address}}</td>
                    <td>{{$pedidos->ProductQuantity}}</td>
                    <td>{{$pedidos->Medicine->MedicineCode}}</td>
                    <td>{{$pedidos->Medicine->Medicine}}</td>
                    <td>{{$pedidos->Customer->Names." ".$pedidos->Customer->FirstSurName." ".$pedidos->Customer->SecondSurName}}</td>
                    <td>{{$pedidos->Employee->Names." ".$pedidos->Employee->FirstSurName." ".$pedidos->Employee->SecondSurName}}</td>
                    <td>{{$pedidos->Condition  == 1 ? 'Disponible' : 'No Disponible'}}</td>
                    <td>
                        <div class="modal fade" id="UpdateModal{{$pedidos->Id_Supplier}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white" id="UpdateModalLabels{{$pedidos->Id_Supplier}}">Editar pedidos
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            <i class="fa-solid fa-x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <?php if($errors->any()): ?>
                                            @foreach($errors->all() as $error)
                                                <div id="MensajeError" class="alert alert-danger" role="alert">
                                                    <i class = "fas fa-exclamation-triangle"></i><strong>¡Por Favor! </strong>{{$error}}
                                                </div>
                                            @endforeach
                                        <?php endif; ?>
                                        <form action ="{{ route('Medicamentos.update', $pedidos->Id_Supplier) }}" method = "POST" enctype="multipart/form-data" class="row">
                                            {{@csrf_field()}}
                                            @method('PUT')
                                            <div class="col-sm-3">
                                                <div class="mb-2">
                                                    <img  height="200" width="200" class="border rounded mx-auto d-block img-fluid " />
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" type="file" name="Image" accept="image/png, image/jpg, image/jpeg" />
                                                </div>
                                                <div class="mb-3 mt-3">
                                                    <label for="CorreoElectronico" class="col-form-label">Correo Electrónico</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->EmailAddress }}" name="EmailAddress" />
                                                </div>
                                                <div class="mt-3" style="width: 530px"size=3>
                                                    <label for="Direccion" class="col-form-label"  >Dirección</label>
                                                    <input type="text" style="width: 250px; height:130px" class="form-control" value="{{ $pedidos->Address }}" name="Address"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3">
                                                    <label for="Nombres" class="col-form-label">Nombres</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->Names }}" name="Names" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Codigo" class="col-form-label">Código</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->SupplierCode }}" name="SupplierCode"/>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Cedula" class="col-form-label">Cédula</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->DNI }}" name="IdentificationCard"/>
                                                </div>
                                                <label class="mb-3" for="Edad" >Sexo</label>
                                                <select name="Gender" class="form-control selectpicker mt-2" >
                                                    <option value="{{ $pedidos->Gender }}">
                                                            {{ $pedidos->Gender}}
                                                    </option>
                                                    <option>M</option>
                                                </select>
                                                <label class="mb-3" for="Condicion">Estado</label>
                                                <option selected="true" disabled="disabled">Seleccionar</option>
                                                <select name="Condition" class="form-control">
                                                    <option value="1">Disponible</option>
                                                    <option value="0">No Disponible</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3">
                                                    <label for="ApellidoPaterno" class="col-form-label">Apellido Paterno</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->FirstSurName }}" name="FirstSurName"/>
                                                </div>
                                                <div class="mb-3">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Ciudad" class="col-form-label">Ciudad</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->Department }}" name="City" />
                                                </div>
                                                <div class="mb-3" style="width: 150px"size=3>
                                                    <label for="NumeroTelefono" class="col-form-label">Número Telefonico</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->PhoneNumber }}" name="PhoneNumber" />
                                                </div>
                                                <label class="mb-3" for="Usuario" >Usuario</label>
                                                    <select name="users" class="form-control mt-2">
                                                        @foreach($users as $usuario)
                                                            <option value="{{$usuario->id}}">{{$usuario->email}}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="mb-3">
                                                    <label for="ApellidoMaterno" class="col-form-label">Apellido Materno</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->SecondSurName }}" name="SecondSurName" />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Municipio" class="col-form-label">Municipio</label>
                                                    <input type="text" class="form-control" value="{{ $pedidos->Municipality }}" name="Municipality" />
                                                </div>
                                                <div class="mb-3" style="width: 100px"size=3>
                                                    <label for="Edad" class="col-form-label">Edad</label>
                                                    <input type="number" class="form-control" value="{{ $pedidos->Age }}" name="Age" />
                                                </div>
                                                    <label class="mb-3" for="Usuario" >Contraseña</label>
                                                    <select name="users" class="form-control mt-2">
                                                        @foreach($users as $usuario)
                                                            <option value="{{$usuario->id}}">{{$usuario->password}}</option>
                                                        @endforeach
                                                    </select>
                                                <div class = "card-body mt-1"></div>
                                                <div align="right" >
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="Form-Delete" action = "{{ route ('Medicamentos.destroy', $pedidos->Id_Supplier ) }}" method = "POST">
                            @csrf
                            @method('DELETE')
                            <a class = "btn btn-sm btn-primary" data-toggle="modal" data-target="#UpdateModal{{$pedidos->Id_Supplier}}">Editar
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <button class = "btn btn-sm btn-danger">Eliminar
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    {!! $orders->links() !!}
    </div>
</div>

<!-- Modal crear -->
<div class="modal fade" id="CreateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white" id="CreateModalLabels">Crear Empleado
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-x"></i>
                </button>
            </div>
            <div class="modal-body">
            <?php if($errors->any()): ?>
                    @foreach($errors->all() as $error)
                        <div id="MensajeError" class="alert alert-danger" role="alert">
                            <i class = "fas fa-exclamation-triangle"></i><strong>¡Por Favor! </strong>{{$error}}
                        </div>
                    @endforeach
                <?php endif; ?>
                <form action ="{{ route('Medicamentos.store') }}" method = "POST" enctype="multipart/form-data" class="row">
                    {{@csrf_field()}}
                    <div class="col-sm-3">
                        <div class="mb-2">
                            <img  height="145" width="145" class="border rounded mx-auto d-block img-fluid "/>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="file" name="UrlImage" accept="image/png, image/jpg, image/jpeg"/>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="CorreoElectronico" class="col-form-label">Correo Electrónico</label>
                            <input type="text" class="form-control" name="EmailAddress" />
                        </div>
                        <div class="mt-3" style="width: 530px"size=3>
                            <label for="Direccion" class="col-form-label">Dirección</label>
                            <input type="text" style="width: 250px; height:130px" class="form-control" name="Address"/>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="Nombres" class="col-form-label">Nombres</label>
                            <input type="text" class="form-control" name="Names" />
                        </div>
                        <div class="mb-3">
                            <label for="Codigo" class="col-form-label">Código</label>
                            <input type="text" class="form-control" name="SupplierCode"/>
                        </div>
                        <div class="mb-3">
                            <label for="Cedula" class="col-form-label">Cédula</label>
                            <input type="text" class="form-control" name="IdentificationCard"/>
                        </div>
                        <label class="mb-3" for="Edad">Sexo</label>
                        <select name="Gender" class="form-control mt-2" >
                            <option>M</option>
                            <option>F</option>
                        </select>
                        <label class="mb-3" for="Condicion">Estado</label>
                        <select name="Condition" class="form-control mt-2">
                            <option value="1" >Disponible</option>
                            <option value="0">No Disponible</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="ApellidoPaterno" class="col-form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" name="FirstSurName"/>
                        </div>
                        <div class="mb-3">
                        </div>
                        <div class="mb-3">
                            <label for="Ciudad" class="col-form-label">Ciudad</label>
                            <input type="text" class="form-control" name="City" />
                        </div>
                        <div class="mb-3" style="width: 150px"size=3>
                            <label for="NumeroTelefono" class="col-form-label">Número Télefonico</label>
                            <input type="text" class="form-control" name="PhoneNumber" />
                        </div>
                        <label class="mb-3" for="Usuario" >Usuario</label>
                            <select name="users" class="form-control mt-2">
                                @foreach($users as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->email}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <div class="mb-3">
                            <label for="ApellidoMaterno" class="col-form-label">Apellido Materno</label>
                            <input type="text" class="form-control" name="SecondSurName" />
                        </div>
                        <div class="mb-3">
                            <label for="Municipio" class="col-form-label">Municipio</label>
                            <input type="text" class="form-control" name="Municipality" />
                        </div>
                        <div class="mb-3" style="width: 100px"size=3>
                            <label for="Edad" class="col-form-label">Edad</label>
                            <input type="number" class="form-control" name="Age" />
                        </div>
                            <label class="mb-3" for="Usuario" >Contraseña</label>
                            <select name="users" class="form-control mt-2">
                                @foreach($users as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->password}}</option>
                                @endforeach
                            </select>
                        <div class = "card-body mt-1"></div>
                        <div align="right" >
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal crear -->
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('mensaje') == 'OkDelete')
        <script>
            Swal.fire(
                '¡Eliminado!',
                '¡El proveedor ha sido eliminado correctamente!',
                'success',
            )
        </script>
    @endif
    @if (session('mensaje') == 'OkCreate')
        <script>
            Swal.fire(
                '¡Agregado!',
                '¡El proveedor ha sigo agregado correctamente!',
                'success',
            )
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Vaya...',
                text: '¡Algo salió mal!',
            })
        </script>
    @endif
    @if (session('mensaje') == 'OkUpdate')
        <script>
            Swal.fire(
                'Actualizado!',
                '¡El proveedor ha sigo actualizado correctamente!',
                'success',
            )
        </script>
    @endif
<script>
    $('.Form-Delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'El proveedor será eliminado permanentemente',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            if (result.isConfirmed) {
                this.submit()
            }
        })
    })
</script>
@endsection
