@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Item_af</div>
                    <div class="card-body">
                        <a href="{{ url('/item_af/create') }}" class="btn btn-success btn-sm" title="Add New item_af">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/item_af') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Id</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Alto</th>
                                        <th>Ancho</th>
                                        <th>Largo</th>
                                        <th>Color</th>
                                        <th>Lote</th>
                                        <th>Tiempo vida</th>
                                        <th>Control</th>
                                        <th>Clasificacion</th>
                                        <th>Modelo</th>
                                        <th>Marca</th>
                                        <th>Estado</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($item_af as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->codigo }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->alto }}</td>
                                        <td>{{ $item->ancho }}</td>
                                        <td>{{ $item->largo }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->lote }}</td>
                                        <td>{{ $item->tiempo_vida }}</td>
                                        <td>{{ $item->control_mante }}</td>
                                        <td>{{ $item->id_clasificacion }}</td>
                                        <td>{{ $item->id_modelo }}</td>
                                        <td>{{ $item->id_marca }}</td>
                                        <td>{{ $item->estado }}</td>
                                        <td>
                                            <a href="{{ url('/item_af/' . $item->id) }}" title="View item_af"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/item_af/' . $item->id . '/edit') }}" title="Edit item_af"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/item_af' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete item_af" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $item_af->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection