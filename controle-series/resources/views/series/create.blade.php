<x-layout title="Criar Série">
   <form action="/series/store" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
    </div>
        <button class="btn btn-primary"> adicionar </button>
   </form>
</x-layout>
   