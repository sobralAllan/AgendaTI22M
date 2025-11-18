<x-layout titulo="Cadastrar">
    <form class="container" action="cadastrar/salvar" method="GET">
        @csrf 
        <div class="mb3">
            <label class="form-label">Data Compromisso</label>
            <input type="date" name="dataEvento" class="form-control" id="dataEvento">
        </div>
        <br><br>
        <div class="mb3">
            <label class="form-label">Descrição</label>
            <textArea name="descricao" class="form-control" id="descricao"></textArea>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-primary" href="consultar">Voltar</a>     
    </form>
</x-layout>