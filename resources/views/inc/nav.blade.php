<div style="min-height: 5vh;">
    <div class="col d-none d-flex justify-content-left align-items-center">
        Menu
    </div>

    <div class="col d-flex d-md-none justify-content-end align-items-center">
        <i class="fa-solid fa-bars p-1 m-2" id="barMenu" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"></i>
    </div>

    <!--OFF CANVAS-->
    <div class="offcanvas offcanvas-start text-white" style="background: lightcoral; width: 250px;" id="offcanvasTop"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasTopLabel"><b>Menu</b></h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body text-white ">
            <!--PAINEL-->
            <ul id="ListaMenuOff-Canvas" class="d-table" type="none" class="d-flex">

                @include('inc/darkmode')

                <a href="../inicio/">
                    <li>Inicio</li>
                </a>
                <li>
                    <details>
                        <summary style="color: white">Receitas</summary>
                        <ul type="none" id="temasOff-canvas">
                            <a href="../temas/temaI.html">
                                <li>Tema I</li>
                            </a>
                            <a href="../temas/temaII.html">
                                <li>Tema II</li>
                            </a>
                            <a href="../temas/temaIII.html">
                                <li>Tema III</li>
                            </a>
                            <a href="../temas/temaIV.html">
                                <li>Tema IV</li>
                            </a>
                            <a href="../temas/temaV.html">
                                <li>Tema V</li>
                            </a>
                        </ul>
                    </details>
                </li>
                <a href="../PDF/">
                    <li>PDF</li>
                </a>
                <a class="btn text-primary"
                    style="padding-left: 0; padding-right: 0; font-size: 20px;font-family: verdana;"
                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <li>Sobre</li>
                </a>
            </ul>
        </div>
    </div>

    <div class="col d-none d-md-flex justify-content-end align-items-center">
        <ul id="ListaMenu" class="d-flex" type="none" class="d-flex">

            @include('inc/darkmode')

            <a href="../inicio/">
                <li>Inicio</li>
            </a>
            <li>
                <details>
                    <summary style="color: dodgerblue">Receitas</summary>
                    <ul type="none" id="temas">
                        <a href="../temas/temaI.html">
                            <li>Tema I</li>
                        </a>
                        <a href="../temas/temaII.html">
                            <li>Tema II</li>
                        </a>
                        <a href="../temas/temaIII.html">
                            <li>Tema III</li>
                        </a>
                        <a href="../temas/temaIV.html">
                            <li>Tema IV</li>
                        </a>
                        <a href="../temas/temaV.html">
                            <li>Tema V</li>
                        </a>
                    </ul>
                </details>
            </li>
            <a href="../PDF/">
                <li>PDF</li>
            </a>

            <a class="btn text-primary" style="padding-top: 0; padding-bottom: 0; font-size: 20px;font-family: verdana;"
                data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <li>Sobre</li>
            </a>
        </ul>

    </div>
</div>