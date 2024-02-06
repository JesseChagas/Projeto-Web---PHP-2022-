<x-layout title="Lista de Contatos">
    <ul class="list-group">
        <?php foreach($contatos as $cont): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center" >


            <?= $cont->nome; ?>
                    <span class="d-flex">
                    <a href="{{route('contatos.edit', $cont->id)}}"
                        class="btn btn-primary btn-sm mr-2">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i></a>
                    </span>
                </li>  

        <?php endforeach; ?>
    </ul>
</x-layout>
