@extends('layouts.app')

@section('contenido')
    <div class="">
        <div class="row col-md-12">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">item_af {{ $item_af->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/item_af') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/item_af/' . $item_af->id . '/edit') }}" title="Edit item_af"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('item_af' . '/' . $item_af->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete item_af" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   <!--  <tr>
                                        <th>ID</th><td>{{ $item_af->id }}</td>
                                    </tr> -->
                                    <tr><th> Id </th><td> {{ $item_af->id }} </td></tr><tr><th> Codigo </th><td> {{ $item_af->codigo }} </td></tr><tr><th> Nombre </th><td> {{ $item_af->nombre }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
