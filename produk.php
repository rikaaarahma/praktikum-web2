<?php
$model = new Produk();
$data_produk = $model->tampil();
?>
<!-- Header-->
<header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shopping Is Fun!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Welcome To Rika Shop</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                        <?php
                            foreach ($data_produk as $value) {
                            ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?= $value ['nama'] ?></h5>
                                        <!-- Kode -->
                                        <p><?= $value ['kode'] ?></p>
                                        <!-- Product price-->
                                        Rp.  <?= number_format ($value ['harga_jual']) ?>
                                  </div>
                                </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                 <?php
                     }
                 ?>
        </div>
    </div>
 </section>
