<!-- Header -->
<header class="shadow-sm" style="width: 100%; margin-left: 0;">
    <div class="header-container d-flex flex-column flex-sm-row align-items-center justify-content-between py-3 px-4 text-white">

        <!-- Seção Principal: Logo + Menu Mobile -->
        <div class="d-flex w-100 justify-content-between align-items-center">
            
            <!-- Logo e Título -->
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo John Sabores"
                        class="rounded-circle shadow-lg logo-img">
                </div>
                <div class="logo-text">
                    <h2 class="m-0 fw-bold d-none d-sm-block site-title">
                        John Sabores na Cozinha
                    </h2>
                    <h5 class="m-0 fw-semibold d-sm-none site-subtitle">
                        John Sabores
                    </h5>
                </div>
            </div>

            <!-- Botão do Menu Mobile -->
            <div class="d-flex d-md-none justify-content-end align-items-center">
                <i class="fa-solid fa-bars fs-3 p-2 menu-toggle" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop"></i>
            </div>
        </div>

        <!-- Menu Desktop -->
        <div class="d-none d-md-flex justify-content-end align-items-center mt-3 mt-sm-0">
            @include('inc/nav')
        </div>

        <!-- Offcanvas (Menu Lateral) -->
        <div class="offcanvas offcanvas-start text-white" id="offcanvasTop"
            style="width: 250px;" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header border-bottom border-light">
                <h5 class="fw-bold mb-0"><i class="fa-solid fa-utensils me-2"></i>Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body pt-3" wire:pool>
                @include('inc/nav')
            </div>
        </div>
    </div>
</header>

<!-- Estilos -->
<style>
    /* Fundo do Header */
    .header-container {
        background: linear-gradient(135deg, #ff5f6d, #ffc371);
        font-size: 15px;
    }

    /* Logo */
    .logo-img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border: 3px solid rgba(255, 255, 255, 0.4);
        transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.08);
        border-color: #fff;
    }

    /* Títulos */
    .site-title {
        border-bottom: 3px solid rgba(255, 255, 255, 0.6);
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .site-subtitle {
        border-bottom: 2px solid rgba(255, 255, 255, 0.5);
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

    /* Menu Links */
    .menu-link,
    .off-link,
    .dropdown-link {
        position: relative;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
        color: #fff;
    }

    .menu-link::after {
        content: "";
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #fff;
        transition: width 0.3s;
    }

    .menu-link:hover::after {
        width: 100%;
    }


    .menu-link:hover,
    .off-link:hover,
    .dropdown-link:hover {
        color: #ffecec;
        transform: translateY(-2px);
    }

    /* Offcanvas */
    .offcanvas {
        background: linear-gradient(135deg, #ff5f6d, #ffc371);
    }

    .offcanvas-header h5 {
        font-weight: 600;
        letter-spacing: 0.5px;
    }
</style>
