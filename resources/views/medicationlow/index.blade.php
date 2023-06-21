@extends('layouts.Panel')

@section('styles')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection


@section('content')
<div class="card shadow">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="mt-3 ml-3">Lista de Medicamento Baja</h3>
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
                    <th scope="col">Motivo</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Fecha de Baja</th>
                    <th scope="col">Codigo Medicina</th>
                    <th scope="col">Medicina</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicationlows as $medicamentobaja)
                <tr>
                    <th scope="row">{{$medicamentobaja->MedicationLowCode}}</th>
                    <td>{{$medicamentobaja->Motive}}</td>
                    <td>{{$medicamentobaja->Observations}}</td>
                    <td>{{$medicamentobaja->DateLeaving}}</td>
                    <td>{{$medicamentobaja->Medicine->MedicineCode}}</td>
                    <td>{{$medicamentobaja->Medicine->Medicine}}</td>
                    <td>{{$medicamentobaja->Condition   == 1 ? 'Vencido' : 'No Vencido'}}</td>
                    <td>
                        <form class="Form-Delete" action = "{{ route ('MedicamentoBaja.destroy', $medicamentobaja->Id_MedicationLow ) }}" method = "POST">
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
        {!! $medicationlows->links() !!}
    </div>
</div>

@endsection

@section('js')
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('mensaje') == 'OkDelete')
        <script>
            Swal.fire(
                '¡Eliminado!',
                '¡El medicamento ha sido eliminado correctamente!',
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
<script>
    $('.Form-Delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'El medicamento será eliminado permanentemente',
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
