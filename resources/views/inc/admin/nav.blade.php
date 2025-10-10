<nav class="nav flex-column">
    <a class="d-md-none mb-2 nav-link text-decoration-none text-dark"><i class="fa fa-user-circle me-2"></i> <span>{{ auth()->user()->name }}</span></a>
    <a href="#" class="nav-link active"><i class="fa fa-chart-line me-2"></i> Painel Principal</a>
    <a href="#" class="nav-link"><i class="fa fa-list me-2"></i> Categorias</a>
    <a href="#" class="nav-link"><i class="fa fa-utensils me-2"></i> Receitas</a>
    <a href="#" class="nav-link"><i class="fa fa-users me-2"></i> Usuários</a>
    <a href="#" class="nav-link"><i class="fa fa-cog me-2"></i> Configurações</a>
    @livewire("user.logout")
</nav>
