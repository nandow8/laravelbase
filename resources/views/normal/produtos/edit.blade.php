@extends('layouts.master')

@section('content') 
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="h3 card-header">Editar Produto</div>
                    <div class="card-body">
                        <a href="{{ route('produtos.index') }}" title="Voltar"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <br />
                        <br />

                        <form method="POST" action="{{ url('/produtos/' . $produto->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}

                            @include ('normal.produtos.form', ['formMode' => 'Editar'])                 
                        </form> 

                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection