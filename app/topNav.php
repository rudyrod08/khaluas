<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-center">
            <div>
                <a class="text-light" href="https://www.facebook.com/KhaluasD" target="_blank" rel="sponsored"><i
                        class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-light"
                    href="https://www.instagram.com/khaluas_d/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="
                    target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                <a class="text-light" href="https://www.tiktok.com/@khaluas?is_from_webapp=1&sender_device=pc"
                    target="_blank"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</nav>


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow ">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand logo h1 align-self-center logo-khaluas" href="index.php">
            KhaluaS
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
            id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tiktok.php">TiktTok</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                    data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#" onclick="mostrarCarrito()">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span id="cantidadCarrito"
                        class="position-absolute ms-1 mb-1 top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        0 <!-- Cantidad inicial (puedes establecerla a 0) -->
                    </span>
                </a>
                <!-- Modal -->
                <div class="modal fade" id="contenedorCarrito" tabindex="-1" aria-labelledby="exampleModalLabel"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <i class="fa fa-shopping-cart text-primary mx-4 fs-4" aria-hidden="false"></i>
                                <h1 class="modal-title fs-4 fw-bolder" id="exampleModalLabel">Carrito</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul id="listaProductos" style="list-style-type: none;"></ul>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-lg btn-danger mx-3"
                                    onclick="vaciarCarrito()">Vaciar carrito <i class="ms-2 fa fa-cart-arrow-down"
                                        aria-hidden="true"></i></button>
                                <button type="button" class="btn btn-lg btn-success mx-3"
                                    onclick="realizarCompra()">Realizar compra <i class="ms-2 fa fa-shopping-bag"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->