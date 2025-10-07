<ul id="ListaMenu" class="d-block d-md-flex gap-4 m-0 p-0" type="none">
    @include('inc.darkmode')

    <li><a href="{{ url('inicio') }}" class="menu-link text-white text-decoration-none fw-semibold">
            <i class="fa-solid fa-house me-1"></i> Início</a></li>

    <li><a href="{{ url('inicio') }}" class="menu-link text-white text-decoration-none fw-semibold">
            <i class="fa-solid fa-utensils me-1"></i> Receitas</a></li>


    <li><a href="{{ url('PDF') }}" class="menu-link text-white text-decoration-none fw-semibold">
            <i class="fa-solid fa-file-pdf me-1"></i> PDF</a></li>

    <li>
        <a class="menu-link text-white fw-semibold text-decoration-none" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <i class="fa-solid fa-info-circle me-1"></i> Sobre
        </a>
    </li>
</ul>
