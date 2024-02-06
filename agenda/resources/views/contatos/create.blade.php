<x-layout title="Adicionar um novo contato">
        <form action="/contatos/store" method ="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id = "nome"/>
            </div>
    
            <button class="btn btn-warning">Criar</button>
        </form>
</x-layout>