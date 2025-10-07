@section('title', 'Painel do Admin')
<div>

  <!-- Header -->
  <header class="d-flex justify-content-between align-items-center">
    <div class="logo">
      <img src="../../assets/img/logo.jpg" alt="Logo">
      <h4 class="m-0 fw-bold">John Sabores na Cozinha</h4>
    </div>

    <div class="d-flex align-items-center gap-3">
      <!-- Botão do menu mobile -->
      <button class="btn btn-sm btn-light d-md-none" data-bs-toggle="offcanvas" data-bs-target="#menuMobile">
        <i class="fa fa-bars"></i>
      </button>
      <div class="d-none d-md-block">
        <i class="fa fa-user-circle me-2"></i> <span>Admin</span>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar fixa (desktop) -->
      <aside class="col-md-3 col-lg-2 sidebar d-none d-md-block">
        @include('inc.admin.nav')
      </aside>

      <!-- Main Content -->
      <main class="col-md-9 col-lg-10 dashboard-content">
        <h2 class="fw-bold mb-4">Painel de Controle</h2>

        <div class="row g-4">
          <div class="col-md-4">
            <div class="card p-4 text-center">
              <i class="fa fa-utensils mb-3"></i>
              <h5 class="fw-bold">Receitas</h5>
              <p class="text-muted mb-2">Total de Receitas: <strong>25</strong></p>
              <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Ver mais</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center">
              <i class="fa fa-users mb-3"></i>
              <h5 class="fw-bold">Usuários</h5>
              <p class="text-muted mb-2">Cadastrados: <strong>8</strong></p>
              <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Gerir</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card p-4 text-center">
              <i class="fa fa-folder mb-3"></i>
              <h5 class="fw-bold">Categorias</h5>
              <p class="text-muted mb-2">Ativas: <strong>5</strong></p>
              <a href="#" class="btn btn-sm btn-outline-primary rounded-pill">Editar</a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <!-- Offcanvas menu (mobile) -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="menuMobile">
    <div class="offcanvas-header">
      <h5 class="fw-bold"><i class="fa fa-bars me-2"></i> Menu</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      @include('inc.admin.nav')
    </div>
  </div>

  <footer>
    © 2025 John Sabores na Cozinha — Dashboard do Administrador
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</div>

