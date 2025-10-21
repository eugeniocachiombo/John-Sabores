@section('title', 'Painel do Admin')
<div>

    <h2 class="fw-bold mb-4">Painel do Admin</h2>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa fa-list mb-3"></i>
                <h5 class="fw-bold">Categorias</h5>
                <p class="text-muted mb-2">Total: <strong>{{ count($categories) }}</strong></p>
                <a href="{{ route("admin.recipe.category") }}" class="btn btn-sm btn-outline-primary rounded-pill">Ver mais</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa fa-utensils mb-3"></i>
                <h5 class="fw-bold">Receitas</h5>
                <p class="text-muted mb-2">Total: <strong>{{ count($recipes) }}</strong></p>
                <a href="{{ route("admin.recipes") }}" class="btn btn-sm btn-outline-primary rounded-pill">Ver mais</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 text-center">
                <i class="fa fa-users mb-3"></i>
                <h5 class="fw-bold">Usuários</h5>
                <p class="text-muted mb-2">Total: <strong>{{ count($users) }}</strong></p>
                <a href="{{ route("admin.users") }}" class="btn btn-sm btn-outline-primary rounded-pill">Ver mais</a>
            </div>
        </div>
    </div>
</div>
