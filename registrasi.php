<style>
    .hero {
        background: linear-gradient(to bottom, #f8f9fa, white);
        padding: 60px 0;
        position: relative;
        overflow: hidden;
    }
    .hero-content {
        text-align: left;
        position: relative;
        z-index: 2;
    }
    .hero h1 {
        font-size: 2.5rem;
        font-weight: 600;
    }
    .hero p {
        color: #666;
    }
    .position-relative {
        display: flex;
        justify-content: center;
        align-items: center;
        perspective: 1000px;
    }
    .ticket-container {
        position: relative;
        width: 350px; 
        height: auto;
        transform-style: preserve-3d;
        animation: flipRealistic 3s infinite ease-in-out;
    }
    .img-fluid {
        width: 100%;
        display: block;
    }
    @keyframes flipRealistic {
        0% {
            transform: rotateY(0deg) rotateX(10deg) translateY(0);
            }
        50% {
            transform: rotateY(180deg) rotateX(-10deg) translateY(5px);
        }
        100% {
            transform: rotateY(360deg) rotateX(10deg) translateY(0);
        }
    }
    .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
        }
        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }
    .register .card h4, p {
        color: white !important;
    }
    .card-body {
        background-color: #96783f;
        padding: 30px !important;
        font-size: 12px;
    }
    .card-footer {
        padding: 15px 30px !important;
    }
    .card-footer a {
        font-size: 12px;
        color: #96783f;
        font-weight: 600;
    }
    .card-footer i {
        color: #96783f;
    }
    .card li {
        color: white;
    }
</style>

<body>
    <?php include 'navbar.php'; ?> 

    <section class="hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-6 hero-content">
                    <h1>UNLEASH YOUR<span> Talent </span> HERE!</h1>
                    <p class="text-dark">Temukan pengalaman seni dan budaya yang tak terlupakan! Daftarkan diri Anda untuk mengikuti kelas, menonton pertunjukan, atau bergabung dalam acara nobar bersama komunitas Sanggar Kasunda. Mari lestarikan dan nikmati kekayaan budaya bersama!</p>
                </div>
                <div class="col-md-6 position-relative">
                    <div class="ticket-container">
                        <img src="assets/ticket.png" alt="Hero Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register">
        <div class="container mt-4 mb-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1>Daftar<b> <span>Sekarang</span></b></h1>
                <input type="text" id="searchInput" class="form-control w-25" placeholder="Cari kategori...">
            </div>

            <h2 class="text-center mb-5">REGISTRASI KELAS</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col fade-in" data-category="tari">
                    <div class="card h-100">
                    <img src="assets/karinding.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Kelas Karinding</b></h4>
                            <p class="card-text">Kelas ini terbuka untuk semua tingkatan, baik pemula maupun yang sudah memiliki pengalaman bermain karinding. Materi disusun agar setiap peserta bisa berkembang sesuai dengan kemampuannya masing-masing dalam satu kelompok belajar yang kolaboratif.</p>
                            <p class="card-text"><b>Materi yang Dipelajari:</b>
                                <ul>
                                    <li>Sejarah dan filosofi karinding</li>
                                    <li>Teknik dasar dan lanjutan (getaran, embusan, ritme)</li>
                                    <li>Permainan karinding dalam kelompok</li>
                                    <li>Improvisasi dan kreativitas dalam bermain</li>
                                    <li>Kolaborasi dengan alat musik tradisional lain</li>
                                    <li>Teknik pertunjukan dan ekspresi musik</li>
                                </ul>
                            </p>
                            <p class="card-text"><b>Persyaratan</b>
                                <ul>
                                    <li>Usia minimal 10 tahun</li>
                                    <li>Minat dalam seni dan budaya tradisional</li>
                                    <li>Membawa karinding sendiri atau menyewa dari sanggar</li>
                                    <li>Komitmen untuk latihan rutin</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><a href="#">Registrasi Sekarang!<i class="bi bi-arrow-up-right-circle ms-2"></i></a></small>
                        </div>
                    </div>
                </div>
                <div class="col fade-in" data-category="tari">
                    <div class="card h-100">
                        <img src="assets/teater.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Kelas Teater</b></h4>
                            <p class="card-text">Kelas ini terbuka untuk semua tingkatan, dari yang belum pernah bermain teater hingga yang sudah memiliki pengalaman. Fokus utama kelas adalah eksplorasi ekspresi, olah tubuh, olah vokal, dan pendalaman karakter untuk meningkatkan keterampilan berakting di panggung.</p>
                            <p class="card-text"><b>Materi yang Dipelajari:</b>
                                <ul>
                                    <li>Dasar-dasar seni peran dan ekspresi tubuh</li>
                                    <li>Olah vokal dan artikulasi</li>
                                    <li>Improvisasi dan spontanitas dalam akting</li>
                                    <li>Teknik membangun karakter</li>
                                    <li>Pemahaman naskah dan interpretasi peran</li>
                                    <li>Simulasi panggung dan manajemen pertunjukan</li>
                                </ul>
                            </p>
                            <p class="card-text"><b>Persyaratan</b>
                                <ul>
                                    <li>Usia minimal 12 tahun</li>
                                    <li>Minat dalam seni peran dan dunia teater</li>
                                    <li>Bersedia berlatih secara rutin</li>
                                    <li>Tidak perlu pengalaman sebelumnya</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><a href="#">Registrasi Sekarang!<i class="bi bi-arrow-up-right-circle ms-2"></i></a></small>
                        </div>
                    </div>
                </div>
                <div class="col fade-in" data-category="tari">
                    <div class="card h-100">
                        <img src="assets/tari.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Kelas Tari</b></h4>
                            <p class="card-text">Kelas ini terbuka untuk semua tingkatan, baik pemula maupun yang sudah berpengalaman dalam menari. Fokus utama adalah mempelajari dan mengembangkan keterampilan tari tradisional khas Sunda serta eksplorasi gerak yang ekspresif dan dinamis.</p>
                            <p class="card-text"><b>Materi yang Dipelajari:</b>
                                <ul>
                                    <li>Dasar-dasar seni peran dan ekspresi tubuh</li>
                                    <li>Olah vokal dan artikulasi</li>
                                    <li>Improvisasi dan spontanitas dalam akting</li>
                                    <li>Teknik membangun karakter</li>
                                    <li>Pemahaman naskah dan interpretasi peran</li>
                                    <li>Simulasi panggung dan manajemen pertunjukan</li>
                                </ul>
                            </p>
                            <p class="card-text"><b>Persyaratan</b>
                                <ul>
                                    <li>Usia minimal 10 tahun</li>
                                    <li>Minat dalam seni tari dan budaya tradisional</li>
                                    <li>Bersedia mengikuti latihan secara rutin</li>
                                    <li>Tidak perlu pengalaman sebelumnya</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><a href="#">Registrasi Sekarang!<i class="bi bi-arrow-up-right-circle ms-2"></i></a></small>
                        </div>
                    </div>
                </div>
                <div class="col fade-in" data-category="tari">
                    <div class="card h-100">
                        <img src="assets/sastra.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Kelas Sastra</b></h4>
                            <p class="card-text">Kelas ini terbuka bagi siapa saja yang ingin mendalami dunia sastra, baik dalam bentuk puisi, prosa, maupun naskah drama. Peserta akan diajak untuk mengeksplorasi kreativitas dalam menulis, memahami makna di balik karya sastra, serta mengasah kemampuan dalam menyampaikan dan menginterpretasikan karya sastra.</p>
                            <p class="card-text"><b>Materi yang Dipelajari:</b>
                                <ul>
                                    <li>Pengenalan sastra Sunda dan Nusantara</li>
                                    <li>Teknik menulis puisi, cerpen, dan naskah drama</li>
                                    <li>Eksplorasi gaya bahasa dan diksi</li>
                                    <li>Analisis dan apresiasi karya sastra</li>
                                    <li>Latihan membaca dan mendeklamasikan puisi</li>
                                    <li>Penghayatan dan penyampaian makna dalam sastra</li>
                                </ul>
                            </p>
                            <p class="card-text"><b>Persyaratan</b>
                                <ul>
                                    <li>Usia minimal 12 tahun</li>
                                    <li>Minat dalam dunia sastra dan menulis</li>
                                    <li>Bersedia berlatih dan berdiskusi secara rutin</li>
                                    <li>Tidak perlu pengalaman sebelumnya</li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><a href="#">Registrasi Sekarang!<i class="bi bi-arrow-up-right-circle ms-2"></i></a></small>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-center mt-5 mb-5">REGISTRASI EVENT KASUNDA</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col fade-in" data-category="tari">
                    <div class="card h-100">
                    <img src="assets/flyer-event.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center"><b>Melodi Melodi Kasunda Vol. 1: Titik Pertama Jatinangor</b></h4>
                            <p class="card-text"><b>Kami dengan bangga </b>mempersembahkan acara seni budaya yang mempertemukan musik, tradisi, dan kreativitas dalam harmoni yang luar biasa!</p>
                            <p><i class="bi bi-calendar me-2"></i>30 November 2024</p>
                            <p><i class="bi bi-geo-alt-fill me-2"></i>Bale Riung Pajajaran 34, Sayang, Kec. Jatinangor, Kab. Sumedang, Jawa Barat</p>
                            <p><i class="bi bi-ticket-perforated-fill me-1"></i>Gratis</p>
                            <p> Jangan lewatkan momentum luar biasa ini untuk menyelami budaya Sunda yang kaya dan dinamis dalam bingkai modern!</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary"><a href="#">Registrasi Sekarang!<i class="bi bi-arrow-up-right-circle ms-2"></i></a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Efek Fade-in Saat Scroll
            document.addEventListener("scroll", function () {
                let cards = document.querySelectorAll(".fade-in");
                let scrollPosition = window.innerHeight * 0.8; // Aktif saat hampir masuk viewport

                cards.forEach((card, index) => {
                    let position = card.getBoundingClientRect().top;
                    if (position < scrollPosition) {
                        setTimeout(() => {
                            card.classList.add("show");
                        }, index * 200); // Delay bertahap per card
                    }
                });
            });

            // Pencarian Berdasarkan Judul Card
            document.getElementById("searchInput").addEventListener("input", function () {
                let searchValue = this.value.toLowerCase();
                let cards = document.querySelectorAll(".col");

                cards.forEach(card => {
                    let title = card.querySelector(".card-title").innerText.toLowerCase();
                    if (title.includes(searchValue) || searchValue === "") {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            });
        </script>
    </section>

    <?php include 'footer.php'; ?> 
</body>
