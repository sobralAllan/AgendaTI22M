<x-layout titulo="Consultar">
    @csrf
    <div class="mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Data</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Modificar</th>                                
                </tr>
            </thead>
            <tbody>
                @foreach($ids as $id)
                <tr>
                    <td scope="row">{{$id->id}}</td>
                    <td scope="row">{{$id->dataEvento}}</td>
                    <td scope="row">{{$id->descricao}}</td>
                    <td>logo = Bootstrap</td>
                <tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>