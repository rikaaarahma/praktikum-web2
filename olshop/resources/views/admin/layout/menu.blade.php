<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('admin/dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-shop"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ url('admin/produk') }}">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-cart-shopping"></i></div>
                                Produk
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    
                                    <a class="nav-link" href="{{ url('admin/produk') }}">Produk</a>
                                    <a class="nav-link" href="{{ url('admin/kategori') }}">Kategori Produk</a>
                                    <a class="nav-link" href="{{ url('admin/pesanan') }}">Pesanan</a>

                                </nav>
                            </div>
                </nav>
            </div>