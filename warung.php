<style>
    .hero {
        background: #f8f9fa;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
        z-index: -999;
        margin-top: -50px;
        margin-bottom: 20px;
    }
    .hero-content {
        text-align: left;
        position: relative;
        z-index: 2;
    }
    .hero-content span {
        font-family: 'Monsieur La Doulaise';
        color: #b08d4f;
    }
    .hero h1 {
        font-size: 2.5rem;
        font-weight: 600;
    }
    .hero p {
        color: #666;
    }
    .hero-img {
        position: relative;
        z-index: 9999;
        max-width: 100%;
    }
    .menu .card-title {
        font-weight: 700;
        text-align: center;
    }
    .btn-success {
        padding: 10px 15px !important;
        border-radius: 50px !important;
        background-color: white !important;
        color: black !important;
        border-color: black !important;
        font-size: 12px !important;
    }
    .card-text {
        font-size: 10px;
        text-align: justify;
    }
    .card small {
        display: block;
        font-weight: 600;
        text-align: center !important;
        margin-bottom: 5px;
        font-size: 10px;
    }
    .menu .nav-link {
        font-size: 20px;
        padding: 10px 50px;
    }
</style>

<body>
    <?php include 'navbar.php'; ?> 

    <section class="hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-7 hero-content">
                    <h1>EXPLORE OUR MENU AND <span>Find</span> THE FEATURES YOU NEED EASILY.</h1>
                    <small>Jelajahi menu kami untuk mengakses berbagai fitur yang dirancang agar pengalaman Anda lebih mudah dan efisien. Dari pengelolaan tugas hingga eksplorasi alat baru, semua yang Anda butuhkan ada di sini.</small>
                </div>
                <div class="col-md-5 position-relative">
                    <img src="menu/a.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="menu mt-5 mb-5">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center" id="menuTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="makanan-tab" data-bs-toggle="tab" data-bs-target="#makanan" type="button" role="tab" aria-controls="makanan" aria-selected="true">MAKANAN</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cemilan-tab" data-bs-toggle="tab" data-bs-target="#cemilan" type="button" role="tab" aria-controls="cemilan" aria-selected="false">CEMILAN</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="minuman-tab" data-bs-toggle="tab" data-bs-target="#minuman" type="button" role="tab" aria-controls="minuman" aria-selected="false">MINUMAN</button>
            </li>
            </ul>

            <div class="tab-content" id="menuTabsContent">
                <div class="tab-pane fade show active" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
                    <section class="makanan">
                        <div class="container mt-4">
                            <div class="row g-0">
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0">
                                    <img src="menu/ayam-geprek.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Ayam Geprek</h5>
                                    <small>Rp. 15.000,00</small>
                                    <p class="card-text">Ayam goreng crispy yang digeprek dengan sambal pedas khas, memberikan perpaduan renyah dan gurih dengan sensasi pedas yang menggugah selera. Cocok dinikmati dengan nasi hangat dan pelengkap lainnya!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0">
                                    <img src="menu/ayam-goreng.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Ayam Goreng</h5>
                                    <small>Rp. 15.000,00</small>
                                    <p class="card-text">Ayam yang dimarinasi dengan bumbu khas, lalu digoreng hingga kulitnya renyah dan dagingnya tetap juicy. Sajian klasik yang nikmat disantap dengan nasi hangat dan sambal favorit!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0">
                                    <img src="menu/mie-goreng.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Mie Goreng</h5>
                                    <small>Rp. 10.000,00</small>
                                    <p class="card-text">Mie yang ditumis dengan bumbu spesial, dilengkapi dengan sayuran segar, telur, dan pilihan topping seperti ayam atau seafood. Gurih, lezat, dan menggugah selera!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-end-0">
                                    <img src="menu/nasi-goreng.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Nasi Goreng</h5>
                                    <small>Rp. 10.000,00</small>
                                    <p class="card-text">Nasi yang ditumis dengan bumbu khas, berpadu dengan telur, sayuran, dan pilihan topping seperti ayam, seafood, atau sosis. Rasanya gurih, lezat, dan selalu menggoda selera! </p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/nasi-kuning.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Nasi Kuning</h5>
                                    <small>Rp. 10.000,00</small>
                                    <p class="card-text">Nasi gurih berwarna kuning khas dari kunyit dan rempah pilihan, disajikan dengan aneka lauk seperti ayam, telur, sambal, dan kerupuk. Aroma harum dan cita rasanya yang lezat menjadikannya pilihan istimewa untuk berbagai kesempatan! .</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/nasi-uduk.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Nasi Uduk</h5>
                                    <small>Rp. 10.000,00</small>
                                    <p class="card-text">Nasi gurih yang dimasak dengan santan dan rempah pilihan, menghasilkan aroma harum dan rasa yang lezat. Disajikan dengan lauk seperti ayam goreng, telur, tempe, sambal, dan kerupuk untuk cita rasa yang semakin nikmat!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/steak-ayam.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Steak Ayam</h5>
                                    <small>Rp. 20.000,00</small>
                                    <p class="card-text">Dada ayam yang dibalut dengan tepung renyah atau dipanggang hingga juicy, disajikan dengan saus pilihan seperti blackpepper atau mushroom. Dilengkapi dengan kentang goreng dan sayuran segar untuk sajian yang lezat dan mengenyangkan!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-end-0 border-bottom-0">
                                    <img src="menu/seblak.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Seblak</h5>
                                    <small>Rp. 15.000,00</small>
                                    <p class="card-text">Hidangan khas dengan cita rasa pedas dan gurih, terdiri dari kerupuk basah yang dimasak dengan bumbu rempah, telur, sayuran, serta tambahan topping seperti ayam, sosis, atau bakso. Sensasi kenyal dan pedasnya bikin nagih!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="tab-pane fade" id="cemilan" role="tabpanel" aria-labelledby="cemilan-tab">
                    <section class="cemilan">
                        <div class="container mt-4">
                            <div class="row g-0">
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/gorengan.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Gorengan</h5>
                                    <small>Rp. 1.000,00/Pcs</small>
                                    <p class="card-text">Camilan renyah dan gurih yang digoreng hingga keemasan, terdiri dari berbagai pilihan seperti tempe, tahu, bakwan, pisang goreng, dan risoles. Cocok dinikmati selagi hangat dengan cabai rawit atau saus favorit!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/roti-bakar.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Roti Bakar</h5>
                                    <small>Rp. 5.000,00</small>
                                    <p class="card-text">Roti yang dipanggang hingga renyah di luar dan lembut di dalam, disajikan dengan berbagai isian lezat seperti cokelat, keju, selai, atau kombinasi spesial lainnya. Camilan manis dan gurih yang selalu menggugah selera!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-0">
                                    <img src="menu/pisang-keju.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Pisang Keju</h5>
                                    <small>Rp. 10.000,00</small>
                                    <p class="card-text">Pisang goreng yang renyah di luar dan lembut di dalam, disajikan dengan taburan keju parut dan siraman susu kental manis. Perpaduan manis dan gurih yang bikin ketagihan!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
                <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
                    <section class="minuman">
                    <div class="container mt-4">
                            <div class="row g-0">
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/teh.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Teh (Dingin/Hangat)</h5>
                                    <small>Rp. 5.000,00</small>
                                    <p class="card-text">Minuman klasik yang menyegarkan, tersedia dalam pilihan hangat atau dingin. Aroma khas dan rasa lembutnya cocok dinikmati kapan saja, baik dengan gula, madu, atau tanpa tambahan pemanis.</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/kopi.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Kopi</h5>
                                    <small>Rp. 5.000,00</small>
                                    <p class="card-text">Minuman berkafein dengan aroma khas dan cita rasa yang kaya. Tersedia dalam berbagai varian, mulai dari kopi hitam yang kuat hingga kopi susu yang creamy. Cocok untuk menemani hari dan menambah semangat!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-start-0 border-top-0 border-bottom-0">
                                    <img src="menu/jeruk.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Jeruk (Dingin/Hangat)</h5>
                                    <small>Rp. 5.000,00</small>
                                    <p class="card-text">Minuman segar dari perasan jeruk asli dengan rasa manis dan sedikit asam yang menyegarkan. Disajikan dengan es batu untuk sensasi dingin yang pas dinikmati di segala suasana!</p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="card h-100 rounded-0 border-0">
                                    <img src="menu/coklat.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Susu Coklat</h5>
                                    <small>Rp. 5.000,00</small>
                                    <p class="card-text">Minuman creamy dengan perpaduan susu segar dan coklat yang manis serta lezat. Disajikan hangat untuk kenyamanan ekstra atau dingin untuk kesegaran yang menggoda!  </p>
                                    </div>
                                    <div class="card-footer text-center border-0 bg-transparent mb-3">
                                    <a href="https://wa.me/6285778078344?text=Saya%20pesan%20Menu%201%20sebanyak%201%20buah" class="btn btn-success btn-sm" target="_blank"><i class="bi bi-plus-lg me-2"></i> Pesan</a>
                                    </div>
                                </div>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?> 
</body>