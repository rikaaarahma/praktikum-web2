@extends('frontend.layout.app')
@section('content')
{{-- ini adalah halaman dashboard --}}
<div class="col-xxl-5">
    <!-- Header text content-->
    <div class="text-center text-xxl-start">
                                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Travelling &middot; Camping</div></div>
                                <div class="fs-3 fw-light text-muted">Tempat Terbaik Untuk Travelling & Camping</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Highland Camp</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="https://kreasi.nurulfikri.ac.id/rika22134ti/">Travelling</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="https://kreasi.nurulfikri.ac.id/rika22134ti/">Camping</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-gradient-primary-to-secondary">
                                    <img class="profile-img" src="assets/prau.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @endsection
            <!-- About Section-->
            @section('about')
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-10 fw-bolder"><span class="text-gradient d-inline">Daftar Wisata Alam Camping Ground di Indonesia</span></h2>
                                <div class="title-box text-center">
                                        <div class="row">
                                            <div class="col-md-15">
                                            <div class="table-wrap">
                                                <table class="table table-striped " style="margin-left: auto; margin-right: auto;" >
                                                <thead class="thead-primary">
                                                    <tr>
                                                    <th>No</th>
                                                    <th>Nama Tempat</th>
                                                    <th>Harga Paket Camping</th>
                                                    <th>Lokasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-tr">
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Grafika Cikole</td>
                                                        <td>Rp. 1.400.000/4 org</td>
                                                        <td>Jl. Raya Tangkuban Parahu No.Km.8, Cikole, Kec. Lembang, Kabupaten Bandung Barat, Jawa Barat</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>Bukit Klangon</td>
                                                    <td>Rp. 15.000/tenda</td>
                                                    <td>Kalitengah Lor, Glagaharjo, Kec. Cangkringan, Kabupaten Sleman, Daerah Istimewa Yogyakarta</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>Mandalawangi Cibodas</td>
                                                    <td>Rp. 24.000/malam</td>
                                                    <td>Komplek Pasar Lapang Mandalawangi Cimacan, Kec.Cipanas, Kab.Cianjur, Jawa Barat</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">4</th>
                                                    <td>Sunrise Camp Gunung Prau</td>
                                                    <td>Rp.25.000/orang</td>
                                                    <td>Kalilembu, Dieng, Kec. Kejajar, Kabupaten Wonosobo, Jawa Tengah</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">5</th>
                                                    <td>Tepi Buyan Campfire</td>
                                                    <td>Rp. 10.000/orang</td>
                                                    <td>Jalan Wisata Danau Buyan, Pancasari, Sukasada, Buleleng Regency, Bali</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">6</th>
                                                    <td>Binahal Indah Resort</td>
                                                    <td>Rp. 20.000/orang</td>
                                                    <td>Ujung Saribu, Pematang Silimahut, Kabupaten Simalungun, Sumatera Utara</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">7</th>
                                                    <td>Gunung Embun</td>
                                                    <td>Free</td>
                                                    <td>Desa luan, Kec. Muara Samu, Kabupaten Paser, Kalimantan Timur</td>
                                                    </tr><tr>
                                                    <th scope="row">8</th>
                                                    <td>Hutan Pinus Campground Lembana</td>
                                                    <td>Rp. 5.000/orang</td>
                                                    <td>PWR4+GRW, Pattapang, Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">9</th>
                                                    <td>Bukit Lamreh</td>
                                                    <td>Rp. 15.000/orang</td>
                                                    <td>Ujung Kelindu,, Lamreh, Mesjid Raya, Kabupaten Aceh Besar, Aceh</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">10</th>
                                                    <td>Bukit Pergasingan</td>
                                                    <td>Rp. 20.000/orang</td>
                                                    <td>Sembalun Lawang, Sembalun, Kabupaten Lombok Timur, Nusa Tenggara Barat</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">11</th>
                                                    <td>Puncak Lawang</td>
                                                    <td>Rp. 30.000/orang</td>
                                                        <td>Jl. Panorama Puncak, Lawang, Kec. Matur, Kabupaten Agam, Sumatera Barat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">12</th>
                                                        <td>Bukit Alebo</td>
                                                        <td>Free</td>
                                                        <td>VCMX+C22, Alebo, Konda, Kabupaten Konawe Selatan, Sulawesi Tenggara</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">13</th>
                                                        <td>Ranu Kumbolo</td>
                                                        <td>Rp. 47.000/orang</td>
                                                        <td>Taman Nasional Bromo Tengger Semeru (TNBTS) Tulungrejo, Pasrujambe, Lumajang, Jawa Timur, </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">14</th>
                                                        <td>Ranca Upas</td>
                                                        <td>Rp. 22.000/orang</td>
                                                        <td>l. Raya Ciwiday-Patengan, Kabupaten Bandung, Jawa Barat.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">15</th>
                                                        <td>Sukamantri Camping Ground</td>
                                                        <td>Rp. 30.000/orang</td>
                                                        <td>Taman Nasional Gunung Halimun Salak, Tamansari, Kec. Tamansari, Kabupaten Bogor, Jawa Barat</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                <div class="d-flex justify-content-center fs-4 gap-4">
                                    <a class="text-gradient" href="https://twitter.com/rikarahmaaa26?t=N7hmsFuY8bxQ-MkCmUdw9g&s=08"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="https://www.instagram.com/rikaarahmaa26/"><i class="bi bi-instagram"></i></a>
                                    <a class="text-gradient" href="https://www.linkedin.com/in/rika-rahma-48a212251"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/rikaaarahma"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
            @endsection
