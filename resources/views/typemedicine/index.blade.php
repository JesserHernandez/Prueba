@extends('layouts.Panel')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection


@section('content')
<div class="card shadow">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="mt-3 ml-3">Lista de Tipo de medicamento</h3>
        </div>
        <div class="col text-right text-white">
            <a  class="mr-2 mt-3 btn btn-primary" data-toggle="modal" data-target="#CreateModal">Nuevo
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
                    <th scope="col">Tipo Medicamento</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($typemedicines as $tipomedicamento)
                <tr>
                    <th scope="row">{{$tipomedicamento->TypeMedicineCode}}</th>
                    <td>{{$tipomedicamento->TypeMedicine}}</td>
                    <td>{{$tipomedicamento->Description}}</td>
                    <td>{{$tipomedicamento->Condition   == 1 ? 'Disponible' : 'No Disponible'}}</td>
                    <td>
                        <div class="modal fade" id="UpdateModal{{$tipomedicamento->Id_Typemedicine}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white" id="UpdateModalLabels">Editar Tipo Medicamento
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
                                        <form action ="{{ route ('TipoMedicamentos.update', $tipomedicamento->Id_Typemedicine )}}" method = "post">
                                        @csrf
                                        @method('PUT')
                                            <div class="mb-3">
                                                <label for="CodigoTipoMedicamento" class="col-form-label">Código</label>
                                                <input type="text" value="{{ $tipomedicamento->TypemedicineCode }}" class="form-control" name="TypeMedicineCode">
                                            </div>
                                            <div class="mb-3">
                                                <label for="TipoMedicamento" class="col-form-label">Tipo de Medicamento</label>
                                                <input type="text" value="{{ $tipomedicamento->Typemedicine }}" class="form-control" name="TypeMedicine">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Descripcion" class="col-form-label">Descripción</label>
                                                <input type="text" value="{{ $tipomedicamento->Description }}" class="form-control" name="Description">
                                            </div>
                                            <div align="right">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="Form-Delete" action = "{{ route ('TipoMedicamentos.destroy', $tipomedicamento->Id_Typemedicine ) }}" method = "POST">
                            @csrf
                            @method('DELETE')
                            <a class = "btn btn-sm btn-primary" data-toggle="modal" data-target="#UpdateModal{{$tipomedicamento->Id_Typemedicine}}">Editar
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
    </div>
    <div class="card-body">
        {!! $typemedicines->links() !!}
    </div>
</div>

<!-- Modal crear -->
<div class="modal fade" id="CreateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white" id="CreateModalLabels">Crear Medicamento
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
                <form action ="{{ route('TipoMedicamentos.store') }}" method = "POST" enctype="multipart/form-data">
                {{@csrf_field()}}
                    <div class="mb-3">
                        <label for="CodigoTipoMedicamento" class="col-form-label">Código</label>
                        <input type="text" class="form-control" name="TypeMedicineCode">
                    </div>
                    <div class="mb-3">
                        <label for="TipoMedicamento" class="col-form-label">Tipo Medicamento</label>
                        <input type="text" class="form-control" name="TypeMedicine" >
                    </div>
                    <div class="mb-3">
                        <label for="Descripcion" class="col-form-label">Descripción</label>
                        <textarea class="form-control" name="Description"></textarea>
                    </div>
                    <div align = "right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal crear -->
@endsection

@section('js')
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('mensaje') == 'OkDelete')
        <script>
            Swal.fire(
                '¡Eliminado!',
                '¡El tipo de medicamento ha sido eliminado correctamente!',
                'success',
            )
        </script>
    @endif
    @if (session('mensaje') == 'OkCreate')
        <script>
            Swal.fire(
                '¡Agregado!',
                '¡El tipo de medicamento ha sigo agregado correctamente!',
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
                '¡El tipo de medicamento ha sigo actualizado correctamente!',
                'success',
            )
        </script>
    @endif
<script>
    $('.Form-Delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'El tipo de medicamento será eliminado permanentemente',
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
