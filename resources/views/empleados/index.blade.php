@extends('app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-lg-9 col-md-6">
                Lista de empleados
            </div>
            <div class="col col-lg-3 col-md-6">
                <a href="empleados/create" class="btn btn-primary">Nuevo empleado</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">DNI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if(count($data)>0)
                @foreach($data as $row)
                <tr>
                    <th scope="row"><a href="{{ route('empleados.show', $row->id) }}">{{ $row->dni }}</a></th>
                    <td>{{ $row->nombre }}</td>
                    <td>{{ $row->apellido }}</td>
                    <td>{{ $row->direccion }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->telefono }}</td>
                    <td>
                        <a href="{{ route('empleados.edit',$row->id) }}"><i class="bi bi-pen"></i></a>&nbsp;
                        <a href="#"
                            onclick="document.getElementById('delete-form-{{ $row->id }}').submit();">
                            <i class="bi bi-trash"></i>
                        </a>

                        <form id="delete-form-{{ $row->id }}" action="{{ route('empleados.destroy', ['id' => $row->id]) }}"
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6">No existen empleados registrados</td>
                </tr>
                @endif
            </tbody>
        </table>
       {!! $data->links() !!}
    </div>
</div>
@endsection
