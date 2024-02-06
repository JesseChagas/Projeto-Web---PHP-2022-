<x-layout title="Listando Séries">
    
    <a href="/series/criar" class="btn btn-primary mb-2"> Adicionar </a>
    
    <ul class="list-group">
        <?php foreach($series as $serie): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                
                <?= $serie->nome; ?>
                <span class="d-flex">
                <a href="{{route('series.edit', $serie->id)}}"
                    class="btn btn-primary btn-sm mr-2">
                        <i class="fa-solid fa-pen"></i>
                    </a>                <a class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i></a>
                </span>
            </li>        
        <?php endforeach; ?>
    </ul>      
</x-layout>
   
 