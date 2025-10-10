<div>
    <style>
        body {
            background: #fff8f8;
            font-family: 'Poppins', sans-serif;
        }

        .btn-pink {
            background-color: #ff7b9c;
            color: white;
            border: none;
            transition: all 0.2s ease;
        }

        .btn-pink:hover {
            background-color: #ff4f78;
            color: white;
        }

        .btn-light-pink {
            background-color: #ffe4ec;
            color: #ff4f78;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(255, 105, 135, 0.1);
            background: #fff;
        }

        .table th {
            color: #555;
        }

        .table-hover tbody tr:hover {
            background-color: #fff0f4;
        }

        .modal-header {
            background: linear-gradient(135deg, #ff5f6d, #ffc371);
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.15rem rgba(255, 105, 135, 0.25);
            border-color: #ff7b9c;
        }

        .text-pink {
            color: #ff4f78;
        }
    </style>

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark">Categorias de Receitas</h4>
            <button class="btn btn-pink rounded-pill" data-bs-toggle="modal" data-bs-target="#createCategoryModal">
                <i class="bi bi-plus-circle me-1"></i> Nova Categoria
            </button>
        </div>

        {{-- Tabela de Categorias --}}
        <div class="card card-custom">
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Criada em</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $category->description }}</td>
                                <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light-pink me-1" data-bs-toggle="modal"
                                        data-bs-target="#createCategoryModal"
                                        wire:click.prevent="edit({{ $category->id }})">
                                        <i class="fas fa-pencil-square " style="font-size: 18px"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-pink" wire:click="delete({{ $category->id }})">
                                        <i class="fas fa-trash " style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Nenhuma categoria cadastrada</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="4" class="mt-2">
                                @isset($categories)
                                    {{ $categories->links('livewire::bootstrap') }}
                                @endisset
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Modal de Cadastro --}}
    <div wire:ignore.self class="modal fade" id="createCategoryModal" tabindex="-1"
        aria-labelledby="createCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="createCategoryModalLabel">Cadastrar Categoria</h5>
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
</div>
<script>
    window.addEventListener('close-modal', () => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('createCategoryModal'));
        if (modal) modal.hide();
    });
</script>
