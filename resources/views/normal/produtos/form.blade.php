<div class="container">
    <div class="form-group{{ $errors->has('nome') ? ' has-error' : ''}} row">
        <label class="col-2 col-form-label" for="nome">{{ 'Nome' }}</label>

        <div class="col-5">
            <input name="nome" class="form-control" type="text" id="nome" value="{{ old('nome', isset($produto->nome) ? $produto->nome : '') }}">
        </div>
        @if ($errors->has('nome'))
            <span class="text-danger">{{ $errors->first('nome') }}</span>
        @endif
    </div> 

    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : ''}} row">
        <label  class="col-2 col-form-label" for="descricao">Descricao</label>

        <div class="col-5">
            <textarea name="descricao" class="form-control" id="descricao" rows="3">{{ old('descricao', isset($produto->descricao) ? $produto->descricao : '') }}</textarea>
        </div>
        @if ($errors->has('descricao'))
            <span class="text-danger">{{ $errors->first('descricao') }}</span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('preco') ? ' has-error' : ''}} row">
        <label class="col-2 col-form-label" for="preco">{{ 'Preço' }}</label>

        <div class="col-5">
            <input name="preco" class="form-control" type="number" id="preco" value="{{ old('preco', isset($produto->preco) ? $produto->preco : '') }}">
        </div>
        @if ($errors->has('preco'))
            <span class="text-danger">{{ $errors->first('preco') }}</span>
        @endif
    </div>

    <br/>
        
    <div class="form-group offset-md-5">
        <a class="btn btn-warning" href="{{ route('produtos.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
        
        <button class="btn btn-primary" type="submit">
        <i class="fa fa-check fa-1" aria-hidden="true"></i> {{ $formMode === 'edit' ? 'Editar' : 'Salvar' }}</button>
    </div>
</div> 