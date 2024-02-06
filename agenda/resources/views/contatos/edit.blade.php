<x-layout title="Editar Contato">
   <form action="{{route('contatos.update', $contato->id)}}"  method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$contato->nome}}"/>
    </div>
        <button class="btn btn-primary"> Atualizar </button>
   </form>
</x-layout>
   