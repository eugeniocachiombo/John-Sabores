@section('title', 'Usuários')
<div>
    <link rel="stylesheet" href="{{ asset('assets/css/admin_crud.css') }}">

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold text-dark">Usuários de Receitas</h4>
        </div>

        <div class="filter-box mb-4">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <label for="search" class="form-label fw-semibold text-pink mb-1">Pesquisar Usuário</label>
                    <input type="text" id="search" wire:model.live="search" class="form-control"
                        placeholder="Digite o nome do usuário...">
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Criado em</th>
                            <th class="text-center">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $index => $user)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $user->name }}</td>
                                <td class="fw-semibold">{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">
                                    @if (auth()->user()->access_id != 1)
                                        <button class="btn btn-sm btn-light-pink" wire:click="delete({{ $user->id }})">
                                        <i class="fas fa-trash" style="font-size: 18px"></i>
                                    </button>
                                    @else
                                        ...
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center text-muted">Nenhuma usuário encontrado</td>
                            </tr>
                        @endforelse
                        <tr>
                            <td colspan="10" class="mt-2">
                                @isset($users)
                                    {{ $users->links('livewire::bootstrap') }}
                                @endisset
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
