<div wire:ignore.self class="modal fade" id="createCategoryModal" tabindex="-1" aria-labelledby="createCategoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategoryModalLabel">
                    {{ $id != null ? 'Editar Categoria' : 'Cadastrar Categoria' }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <form wire:submit.prevent="{{ $id != null ? 'update' : 'store' }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="description" class="form-label fw-semibold">Descrição</label>
                        <input type="text" id="description" class="form-control" wire:model="description"
                            placeholder="Ex: Sobremesas">
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-pink">
                        <span wire:loading wire:target="{{ $id != null ? 'update' : 'store' }}"
                            class="spinner-border spinner-border-sm me-1"></span>
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
