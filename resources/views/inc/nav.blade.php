<ul id="ListaMenu" class="menu-list d-block d-md-flex align-items-center gap-3 gap-md-4 m-0 p-0 list-unstyled">

    @include('inc.darkmode')

    <!-- Início -->
    <li>
        <a href="{{ route('web.home') }}" class="menu-link text-white fw-semibold d-flex align-items-center">
            <i class="fa-solid fa-house me-2 icon"></i> Início
        </a>
    </li>

    <!-- Receitas -->
    <li>
        <a href="{{ url('inicio') }}" class="menu-link text-white fw-semibold d-flex align-items-center">
            <i class="fa-solid fa-utensils me-2 icon"></i> Receitas
        </a>
    </li>

    <!-- PDF -->
    <li>
        <a href="{{ url('PDF') }}" class="menu-link text-white fw-semibold d-flex align-items-center">
            <i class="fa-solid fa-file-pdf me-2 icon"></i> PDF
        </a>
    </li>

    <!-- Sobre -->
    <li>
        <a href="#" class="menu-link text-white fw-semibold d-flex align-items-center"
            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="fa-solid fa-circle-info me-2 icon"></i> Sobre
        </a>
    </li>

</ul>

<style>
    /* Container do menu */
    .menu-list {
        font-size: 15px;
        text-transform: capitalize;
    }

    /* Estilo base dos links */
    .menu-link {
        position: relative;
        display: inline-flex;
        align-items: center;
        padding: 6px 10px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease-in-out;
        color: #fff;
        letter-spacing: 0.4px;
    }

    /* Ícones */
    .menu-link .icon {
        font-size: 16px;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    /* Hover dos links */
    .menu-link:hover {
        color: #fff;
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    /* Hover do ícone */
    .menu-link:hover .icon {
        transform: rotate(10deg) scale(1.2);
        color: #fff6f6;
    }

    /* Linha decorativa em hover */
    .menu-link::after {
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

    .menu-link:hover::after {
        width: 80%;
    }

    /* Responsividade */
    @media (max-width: 768px) {
        .menu-list {
            flex-direction: column;
            align-items: flex-start;
        }

        .menu-link {
            width: 100%;
            padding: 10px 15px;
        }

        .menu-link::after {
            display: none;
        }
    }
</style>

