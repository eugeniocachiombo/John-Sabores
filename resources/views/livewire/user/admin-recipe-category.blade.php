@section('title', 'Categorias')
<div>
    <link rel="stylesheet" href="{{ asset('assets/css/admin_crud.css') }}">

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark">Categorias de Receitas</h4>
            <button class="btn btn-pink rounded-pill" wire:click.prevent="clear" data-bs-toggle="modal"
                data-bs-target="#createCategoryModal">
                <i class="fas fa-plus-circle me-1"></i> Nova Categoria
            </button>
        </div>

        <div class="filter-box mb-4">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <label for="search" class="form-label fw-semibold text-pink mb-1">Pesquisar Categoria</label>
                    <input type="text" id="search" wire:model.live="search" class="form-control"
                        placeholder="Digite o nome da categoria...">
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Criada em</th>
                            <th class="text-center">Acções</th>
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
                                        <i class="fas fa-pencil-square" style="font-size: 18px"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-pink" wire:click="delete({{ $category->id }})">
                                        <i class="fas fa-trash" style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Nenhuma categoria encontrada</td>
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

    @include('livewire.user.modal.admin-recipe-category')
</div>

<script>
    window.addEventListener('close-modal', () => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('createCategoryModal'));
        if (modal) modal.hide();
    });
</script>
