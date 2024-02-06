<x-layout title="Editar Série">
   <form action="{{route('series.update', $serie->id)}}"  method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$serie->nome}}"/>
    </div>
        <button class="btn btn-primary"> Atualizar </button>
   </form>
</x-layout>
   