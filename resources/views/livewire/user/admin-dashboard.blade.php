@section('title', 'Painel do Admin')
<div>
    <style>
        body {
            background: #fff8f8;
            color: #333;
            font-family: 'Poppins', sans-serif;
        }

        header {
            background: linear-gradient(135deg, #ff5f6d, #ffc371);
            color: white;
            padding: 15px 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        header img {
            width: 45px;
            border-radius: 50%;
        }

        /* Ícone do Menu Mobile */
        .menu-toggle {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-toggle:hover {
            transform: rotate(90deg);
            color: #fff6f6;
        }

        /* Sidebar fixa (desktop) */
        .sidebar {
            background: linear-gradient(135deg, #ff5f6c83, #ffc4718e);
            border-right: 1px solid #ffd6d6;
            min-height: 100vh;
            padding: 20px 10px;
        }

        .sidebar .nav-link,
        .offcanvas-body .nav-link {
            color: #333;
            font-weight: 600;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active,
        .offcanvas-body .nav-link:hover,
        .offcanvas-body .nav-link.active {
            background: linear-gradient(135deg, #ff5f6d, #ffc371);
            color: #fff !important;
        }

        .offcanvas-body {
            background: linear-gradient(135deg, #ff5f6c83, #ffc4718e);
        }

        .nav-link {
            font-size: 18px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        /* Hover do ícone */
        .nav-link:hover .fa {
            transform: rotate(10deg) scale(1.2);
            color: #fff6f6;
        }

        /* Linha decorativa em hover */
        .nav-link::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 10%;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: width 0.3s ease-in-out;
            border-radius: 2px;
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .dashboard-content {
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card i {
            font-size: 2.5rem;
            color: #ff6f91;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #fff0f0;
            border-top: 1px solid #ffd6d6;
            font-size: 14px;
            color: #777;
        }

        /* Esconde a sidebar no mobile */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
        }
    </style>


    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="../../assets/img/logo.jpg" alt="Logo">
            <h4 class="m-0 fw-bold">John Sabores na Cozinha</h4>
        </div>

        <div class="d-flex align-items-center gap-3">
            <!-- Botão do menu mobile -->
            <i class="fa-solid fa-bars fs-3 p-2 d-md-none menu-toggle" data-bs-toggle="offcanvas"
                data-bs-target="#menuMobile"></i>

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
