<div wire:ignore.self class="modal fade" id="createRecipeModal" tabindex="-1" aria-labelledby="createRecipeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="createRecipeModalLabel">
                    {{ $id != null ? 'Editar Receita' : 'Cadastrar Receita' }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <form wire:submit.prevent="{{ $id != null ? 'update' : 'store' }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="search" class="form-label fw-semibold text-pink mb-1">Categoria</label> <br>
                        <select class="form-select" wire:model="category_id">
                            <option value="">Nenhum selecionado</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->description }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold text-pink mb-1">Título</label>
                        <input type="text" id="title" class="form-control" wire:model="title"
                            placeholder="Ex: Bolo de ananás">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label fw-semibold text-pink mb-1">Descrição</label>
                        <textarea name="" id="" class="form-control" wire:model="description" cols="30" rows="4"></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label fw-semibold text-pink mb-1">Foto</label>
                        <input type="file" id="photo" class="form-control" wire:model="photo"
                            placeholder="Ex: Bolo de ananás">
                        @error('photo')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        <!-- Barra de progresso simples com wire:loading -->
                        <div class="my-2 w-100" wire:loading wire:target="photo">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                    role="progressbar" style="width: 100%">
                                    Carregando...
                                </div>
                            </div>
                        </div>

                         <!-- Pré-visualizador-->
                        <center>
                            @isset ($photo)
                                <div class="my-3">
                                    <img src="{{ $photo->temporaryUrl() }}" alt="Pré-visualização da Foto"
                                        class="img-fluid rounded" style="max-height: 100px;"> <br>
                                    <button type="button" class="btn btn-sm btn-danger mt-2"
                                        wire:click="$set('photo', null)">
                                        Remover Foto
                                    </button>
                                </div>
                            @endisset
                        </center>
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
