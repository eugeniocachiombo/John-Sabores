<div wire:ignore.self class="modal fade" id="createDetailsModal" tabindex="-1" aria-labelledby="createDetailsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="createDetailsModalLabel">
                    Detalhes da Receita
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                @isset($recipeFound)
                    {{ $recipeFound->description }}
                @endisset
            </div>
        </div>
    </div>
</div>
