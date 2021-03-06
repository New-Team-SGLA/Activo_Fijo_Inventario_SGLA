@extends('layouts.app')

@section('contenido')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">responsable_af {{ $responsable_af->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/responsable_af') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/responsable_af/' . $responsable_af->id . '/edit') }}" title="Edit responsable_af"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('responsable_af' . '/' . $responsable_af->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete responsable_af" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $responsable_af->id }}</td>
                                    </tr>
                                    <tr><th> Nombre </th><td> {{ $responsable_af->nombre }} </td></tr><tr><th> Apellido </th><td> {{ $responsable_af->apellido }} </td></tr><tr><th> Ci </th><td> {{ $responsable_af->ci }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
