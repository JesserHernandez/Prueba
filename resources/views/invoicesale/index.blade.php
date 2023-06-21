@extends('layouts.Panel')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection


@section('content')
<div class="card shadow">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="mt-3 ml-3">Lista de Facturas</h3>
        </div>
        <div class="col text-right text-white">
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
                    <th scope="col">Codigo Medicamento</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Total</th>
                    <th scope="col">Codigo Medicamento</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoicesales as $facturas)
                <tr>
                    <th scope="row">{{$facturas->InvoiceSaleCode}}</th>
                    <td>{{$facturas->Brand}}</td>
                    <td>{{$facturas->Description}}</td>
                    <td>{{$facturas->Sale->Order->Medicine->MedicineCode}}</td>
                    <td>{{$facturas->Sale->ProductQuantity}}</td>
                    <td>{{$facturas->Sale->SubTotal}}</td>
                    <td>{{$facturas->Sale->Descount}}</td>
                    <td>{{$facturas->Sale->Total}}</td>
                    <td>{{$facturas->Sale->Customer->Names." ".$facturas->Sale->Customer->FirstSurName." ".$facturas->Sale->Customer->SecondSurName}}</td>
                    <td>{{$facturas->Sale->Empleyee->Names." ".$facturas->Sale->Empleyee->FirstSurName." ".$facturas->Sale->Empleyee->SecondSurName}}</td>
                    <td>{{$facturas->BroadcastDate}}</td>
                    <td>
                        <form class="Form-Delete" action = "{{ route ('Facturas.destroy', $facturas->Id_Brand ) }}" method = "POST">
                            @csrf
                            @method('DELETE')
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
        {!! $brands->links() !!}
    </div>
</div>

<!-- Modal crear -->
{{-- <div class="modal fade" id="CreateModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="CreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white" id="CreateModalLabels">Crear Marca
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
                <form action ="{{ route('facturas.store') }}" method = "POST" enctype="multipart/form-data">
                {{@csrf_field()}}
                    <div class="mb-3">
                        <label for="CodigoMarca" class="col-form-label">Código</label>
                        <input type="text" class="form-control" name="BrandCode">
                    </div>
                    <div class="mb-3">
                        <label for="Marca" class="col-form-label">Marca</label>
                        <input type="text" class="form-control" name="Brand" >
                    </div>
                    <div class="form-group">
                        <label class="mb-3" for="Condicion">Estado</label>
                        <select name="Condition" class="form-control mt-2">
                            <option value="1" >Disponible</option>
                            <option value="0">No Disponible</option>
                        </select>
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
</div> --}}
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
                '¡La marca ha sido eliminado correctamente!',
                'success',
            )
        </script>
    @endif
    @if (session('mensaje') == 'OkCreate')
        <script>
            Swal.fire(
                '¡Agregado!',
                '¡La marca ha sigo agregado correctamente!',
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
                '¡La marca ha sigo actualizado correctamente!',
                'success',
            )
        </script>
    @endif
<script>
    $('.Form-Delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'La marca será eliminado permanentemente',
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
