<?php
$model = new Produk();
$data_produk = $model->tampil();
?>

<!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    foreach ($data_produk as $Value) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <?php
                            if ($Value['jenis_produk_id'] == 1){
                                ?>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/alat.jpg" alt="..." />
                                <?php
                            }elseif ($Value['jenis_produk_id'] == 2){
                                ?>
                                <img class="card-img-top" src="assets/furniture.jpeg" alt="..." />
                                <?php
                            }elseif ($Value['jenis_produk_id'] == 3){
                                ?>
                                <img class="card-img-top" src="assets/makanan.jpg" alt="..." />
                                <?php
                            }elseif ($Value['jenis_produk_id'] == 5){
                                ?>
                                <img class="card-img-top" src="assets/accesories.jpg" alt="..." />
                                <?php
                            }elseif ($Value['jenis_produk_id'] == 6){
                                ?>
                                <img class="card-img-top" src="assets/minuman.jpeg" alt="..." />   
                                <?php
                            }elseif ($Value['jenis_produk_id'] == 7){
                                ?>
                                <img class="card-img-top" src="assets/tunik.jpg" alt="..." />
                                <?php
                            }else {?>
                                <img class="card-img-top" src="assets/gambar.png" alt="..." />  
                                <?php
                            }
                            ?>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $Value['nama'] ?></h5>
                                    <!-- Kode-->
                                    <p><?= $Value['kode'] ?></p>
                                    <!-- Product price-->
                                    Rp. <?= number_format ($Value ['harga_jual']) ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-primary mt-auto" 
                                        href="index.php?hal=view_produk&iddetail=<?= $Value['id'] ?>">
                                        <i class="fa-solid fa-eye"></i></a>
                                    <a class="btn btn-outline-warning mt-auto" 
                                        href="index.php?hal=form_produk&idedit=<?= $Value['id'] ?>">
                                        <i class="fa-solid fa-pencil"></i></a>
                                    <a class="btn btn-outline-danger mt-auto" onclick="return confirm('Anda yakin ingin menghapus ??')"
                                        href="delete_produk.php?iddel=<?= $Value['id'] ?>">
                                        <i class="fa-solid fa-trash-can" style="color: #f00"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                     }
                    ?>
                </div>
            </div>
        </div>
    </section>