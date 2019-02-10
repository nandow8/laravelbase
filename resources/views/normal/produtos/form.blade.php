<div class="container">
    <div class="form-group row">
        <label class="col-2 col-form-label" for="nome">{{ 'Nome' }}</label>

        <div class="col-5">
            <input name="nome" class="form-control" type="text" id="nome">
        </div>
    </div> 

    <div class="form-group row">
        <label  class="col-2 col-form-label" for="descricao">Descricao</label>

        <div class="col-5">
            <textarea name="descricao" class="form-control" id="descricao" rows="3"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label" for="preco">{{ 'Preço' }}</label>

        <div class="col-5">
            <input name="preco" class="form-control" type="number" id="preco">
        </div>
    </div>

    <br/>
        
    <div class="form-group offset-md-5">
        <a class="btn btn-warning" href="{{ route('produtos.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
        
        <button class="btn btn-primary" type="submit">
        <i class="fa fa-check fa-1" aria-hidden="true"></i> {{ $formMode === 'edit' ? 'Editar' : 'Salvar' }}</button>
    </div>
</div> 