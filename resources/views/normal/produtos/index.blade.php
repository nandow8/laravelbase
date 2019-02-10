@extends('layouts.master')

@section('content')    
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Blogs</span>
                    <a style="float:right;" href="{{ route('produtos.create') }}" class="btn btn-success btn-sm pull-right" title="Add New Blog">
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
                                @foreach($produtos as $key => $produto)
                                    <tr>
                                        <td> {{ $produto->nome }}</td>
                                        <td> {{ $produto->descricao }}</td>
                                        <td> {{ $produto->preco }}</td>
                                        <td>
                                            <a href="{{ url('/produtos/' . $produto->id . '/edit') }}" title="Editar Produto">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                            </a>
                                            
                                            <form action="{{ route('produtos.destroy',$produto->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div> 
@endsection

@section('local_script')
<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            var form = this;

            Swal.fire({
                title: 'Deletar Produto?' ,
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim!',
                cancelButtonText: 'Não',
                }).then((result) => {
                if (result.value) {
                
                    form.submit()
                }
            })
        });
    });
</script>
@endsection