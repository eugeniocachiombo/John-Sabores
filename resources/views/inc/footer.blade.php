<footer class="footer-modern text-dark py-5">
    <div class="container">
        <div class="row gy-4">

            <!-- LOCALIZAÇÃO -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3 text-uppercase text-dark">
                    <i class="fas fa-map-marker-alt me-2"></i> Localização
                </h5>
                <p class="mb-2 fw-semibold">
                    Província de Luanda <br>
                    Município do Cazenga, Bairro da Mabor
                </p>
            </div>

            <!-- CONTACTOS -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3 text-uppercase text-dark">
                    <i class="fas fa-address-book me-2"></i> Contactos
                </h5>

                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2">
                        <i class="fas fa-phone me-2 text-success"></i> +244 941 576 418
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fas fa-envelope me-2 text-danger"></i> johnsabores842@gmail.com
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fab fa-whatsapp me-2 text-success"></i> +244 941 576 418
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="fab fa-facebook me-2 text-dark"></i> John Sabores
                    </li>
                </ul>
            </div>

            <!-- SOBRE -->
            <div class="col-md-4">
                <h5 class="fw-bold mb-3 text-uppercase text-dark">
                    <i class="fas fa-info-circle me-2"></i> Sobre
                </h5>
                <p class="mb-3">
                    Uma empresa criada para apoiar confeiteiros com receitas caseiras e saborosas.
                </p>
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fas fa-eye me-2"></i> Saiba mais
                </button>
            </div>
        </div>

        <hr class="my-4">

        <div class="text-center small text-dark">
            © <b>JSC John Sabores na Cozinha</b> 2023 - Todos os direitos reservados.
        </div>
    </div>
</footer>

<style>
    .footer-modern {
  background: linear-gradient(135deg, #ff5f6d, #ffc371); /* Mesma cor do header */
  color: #fff; /* Contraste melhor no fundo vibrante */
  font-size: 15px;
}

.footer-modern i {
  transition: transform 0.3s ease, color 0.3s ease;
  color: #fff;
}

.footer-modern i:hover {
  transform: scale(1.2);
  color: #ffe7e7 !important;
}

.footer-modern h5 {
  border-bottom: 2px solid rgba(255, 255, 255, 0.6);
  padding-bottom: 5px;
  display: inline-block;
  color: #fff;
}

.footer-modern .btn-outline-primary {
  border-radius: 30px;
  color: #fff;
  border-color: #fff;
  transition: all 0.3s ease;
}

.footer-modern .btn-outline-primary:hover {
  background: #fff;
  color: #ff5f6d;
  border-color: #fff;
}

/* Linha divisória mais suave */
.footer-modern hr {
  border-top: 1px solid rgba(255, 255, 255, 0.4);
}

/* Texto final */
.footer-modern .text-muted {
  color: rgba(255, 255, 255, 0.8) !important;
}

</style>
