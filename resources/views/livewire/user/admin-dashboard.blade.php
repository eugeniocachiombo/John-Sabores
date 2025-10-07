<div>
    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard | John Sabores na Cozinha</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
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

            .sidebar {
                background: #fff;
                border-right: 1px solid #ffd6d6;
                min-height: 100vh;
                padding: 20px 10px;
            }

            .sidebar .nav-link {
                color: #333;
                font-weight: 600;
                border-radius: 10px;
                transition: all 0.3s ease;
            }

            .sidebar .nav-link:hover,
            .sidebar .nav-link.active {
                background: linear-gradient(135deg, #ff5f6d, #ffc371);
                color: #fff !important;
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
        </style>
    </head>

    <body>

        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="../../assets/img/logo.jpg" alt="Logo">
                <h4 class="m-0 fw-bold">John Sabores na Cozinha</h4>
            </div>
            <div>
                <i class="fa fa-user-circle me-2"></i> <span>Admin</span>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <aside class="col-md-3 col-lg-2 sidebar">
                    <nav class="nav flex-column">
                        <a href="#" class="nav-link active"><i class="fa fa-chart-line me-2"></i> Painel
                            Principal</a>
                        <a href="#" class="nav-link"><i class="fa fa-utensils me-2"></i> Receitas</a>
                        <a href="#" class="nav-link"><i class="fa fa-users me-2"></i> Usuários</a>
                        <a href="#" class="nav-link"><i class="fa fa-folder-open me-2"></i> Categorias</a>
                        <a href="#" class="nav-link"><i class="fa fa-cog me-2"></i> Configurações</a>
                        <a href="#" class="nav-link text-danger"><i class="fa fa-sign-out-alt me-2"></i> Sair</a>
                    </nav>
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

        <footer>
            © 2025 John Sabores na Cozinha — Dashboard do Administrador
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

</div>
