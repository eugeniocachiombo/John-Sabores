@section('title', 'Receitas')
<div>
    <link rel="stylesheet" href="{{ asset('assets/css/admin_crud.css') }}">

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark">Receitas</h4>
            <button class="btn btn-pink rounded-pill" wire:click.prevent="clear" data-bs-toggle="modal"
                data-bs-target="#createRecipeModal">
                <i class="fas fa-plus-circle me-1"></i> Nova Receita
            </button>
        </div>

        <div class="filter-box mb-4">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <label for="search" class="form-label fw-semibold text-pink mb-1">Pesquisar Receita</label>
                    <input type="text" id="search" wire:model.live="search" class="form-control"
                        placeholder="Digite o título da receita...">
                </div>
                <div class="col-md-4">
                    <label for="search" class="form-label fw-semibold text-pink mb-1">Categoria</label> <br>
                    <select class="form-select" wire:model.live="searchCategory">
                        <option value="">Nenhum selecionado</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="search" class="form-label fw-semibold text-pink mb-1">Usuário</label> <br>
                    <select class="form-select" wire:model.live="searchUser">
                        <option value="">Nenhum selecionado</option>
                        @foreach ($users as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th class="ms-2">Foto</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Criada em</th>
                            <th class="text-center">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($recipes as $index => $recipe)
                            <tr>
                                <td class="fw-semibold " style="max-width: 10px; max-height: 10px">

                                    @if ($recipe->photo)
                                        <a href="{{ asset('storage/' . $recipe->photo) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $recipe->photo) }}"
                                                style="object-fit: cover; border: 2px solid pink; max-width: 50px; height: 50px"
                                                class="img-fluid rounded-circle">
                                        </a>
                                    @else
                                        <i class="fas fa-image ms-2"
                                            style="border-radius: 50%;max-width: 0px; height: 0px"
                                            class="img-fluid rounded-circle"></i>
                                    @endif

                                </td>
                                <td class="fw-semibold">{{ $recipe->title }}</td>
                                <td class="fw-semibold">{{ $recipe->category->description }}</td>
                                <td>{{ $recipe->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light-pink me-1" data-bs-toggle="modal"
                                        data-bs-target="#createDetailsModal"
                                        wire:click.prevent="edit({{ $recipe->id }})">
                                        <i class="fas fa-eye" style="font-size: 18px"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-pink me-1" data-bs-toggle="modal"
                                        data-bs-target="#createRecipeModal"
                                        wire:click.prevent="edit({{ $recipe->id }})">
                                        <i class="fas fa-pencil-square" style="font-size: 18px"></i>
                                    </button>
                                    <button class="btn btn-sm btn-light-pink" wire:click="delete({{ $recipe->id }})">
                                        <i class="fas fa-trash" style="font-size: 18px"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center text-muted">Nenhuma receita encontrada</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="10" class="mt-2">
                                @isset($recipes)
                                    {{ $recipes->links('livewire::bootstrap') }}
                                @endisset
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('livewire.user.modal.admin-recipes')
    @include('livewire.user.modal.admin-recipe-details')
</div>

<script>
    window.addEventListener('close-modal', () => {
        const modal = bootstrap.Modal.getInstance(document.getElementById('createRecipeModal'));
        if (modal) modal.hide();
    });
</script>
