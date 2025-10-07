 <!-- Header -->
 <header class="shadow-sm " style="width: 100%; margin-left: 0; font-size: 14px">
     <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between py-4 px-4 py-3 text-white"
         style="background: linear-gradient(135deg, #ff5f6d, #ffc371);">

         <!-- Logo -->
         <div class="d-flex align-items-center">
             <div class="me-3">
                 <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo John Sabores" class="rounded-circle shadow"
                     style="width: 70px; height: 70px; object-fit: cover;">
             </div>
             <div style="font-size: 14px">
                 <h2 class="m-0 fw-bold d-none d-sm-block" style="border-bottom: 3px solid rgba(255,255,255,0.7);">
                     John Sabores na Cozinha
                 </h2>
                 <h5 class="m-0 fw-semibold d-sm-none" style="border-bottom: 2px solid rgba(255,255,255,0.7);">
                     John Sabores
                 </h5>
             </div>
         </div>

         <!-- Menu Desktop -->
         <div class="d-none d-md-flex justify-content-end align-items-center">
             @include('inc/nav')
         </div>

         <!-- Menu Mobile -->
         <div class="d-flex d-md-none justify-content-end align-items-center">
             <i class="fa-solid fa-bars fs-3 p-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"></i>
         </div>

         <!-- Offcanvas -->
         <div class="offcanvas offcanvas-start text-white"
             style="background: linear-gradient(135deg,#ff5f6d,#ffc371); width:250px;" id="offcanvasTop"
             aria-labelledby="offcanvasTopLabel">
             <div class="offcanvas-header">
                 <h5 class="fw-bold"><i class="fa-solid fa-bars me-2"></i>Menu</h5>
                 <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
             </div>

             <div class="offcanvas-body">
                 @include('inc/nav')
             </div>
         </div>
     </div>
 </header>



 <style>
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
 </style>
