@extends('layouts.master')

@section('content')    
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Blogs</span>
                    <a style="float:right;" href="{{ url('/admin/blogs/create') }}" class="btn btn-success btn-sm pull-right" title="Add New Blog">
                        <i class="fa fa-plus" aria-hidden="true"></i> Adicionar novo Produto
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-hover">
                        <table class="table" id="tabela_blogs">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titles</th>
                                    <th>Contents</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>nome</td>
                                    <td>descricao</td>
                                    <td>preco</td>
                                    <td>
                                        editar
                                        deletar
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div> 
@endsection