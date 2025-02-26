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
    .thread {
        background-color: #b08d4f;
        margin-top: -50px;
        padding: 50px 0;
    }
    .thread .card-container {
        perspective: 1000px;
        margin-bottom: 15px;
    }
    .card {
        position: relative;
        overflow: hidden;
        height: 200px;
        transform: rotateY(90deg);
        opacity: 0;
        transition: transform 0.6s ease, opacity 0.6s ease;
        transform-origin: center;
    }
    .thread .card img {
        transition: opacity 0.3s ease;
    }
    .thread .card .card-img-overlay {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        background: rgba(0, 0, 0, 0.5);
        transform: translateY(-100%);
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0;
        padding: 40px;
    }
    .card-img-overlay h5 {
        font-weight: 700;
    }
    .card-img-overlay p {
        font-size: 12px;
    }
    .card:hover img {
        opacity: 0.5;
    }
    .thread .card:hover .card-img-overlay {
        transform: translateY(0);
        opacity: 1;
    }
    .visible {
        transform: rotateY(0deg);
        opacity: 1;
    }
    .hidden {
        transform: rotateY(90deg);
        opacity: 0;
    }
    .gallery {
        background: url('assets/bg.jpg') no-repeat center center;
        background-size: cover;
        padding: 50px 0;
        position: relative;
    }
    .gallery h1 {
        font-weight: 700;
        color: white;
        font-size: 80px;
    }
    .gallery span {
        font-family: 'Monsieur La Doulaise';
        color: #b08d4f;
    }
</style>

<body>
    <?php include 'navbar.php'; ?> 

    <section class="hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-7 hero-content">
                    <h1>WE HERE TO <span>Create</span> MOMENT THAT LAST A LIFETIME.</h1>
                    <small> Hadir sebagai platform digital yang menghubungkan para seniman, budayawan, serta pecinta seni dengan berbagai sanggar di Indonesia, menyediakan informasi lengkap tentang kegiatan, pelatihan, dan karya seni yang ditawarkan oleh masing-masing sanggar.</small>
                </div>
                <div class="col-md-5 position-relative">
                    <img src="assets/pattern.png" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="thread">
        <div class="container mt-4">
            <div class="row g-3">
                <div class="col-md-4 card-container">
                    <div class="card text-bg-dark">
                        <img src="assets/card1.png" class="card-img" alt="Image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Tari</h5>
                            <p class="card-text"><b>Seni tari Sunda</b> adalah ekspresi budaya yang menggambarkan keanggunan, keceriaan, dan filosofi kehidupan masyarakat Sunda melalui gerakan tubuh yang khas dan ritmis. Tarian ini sering digunakan dalam upacara adat, hiburan, dan pertunjukan seni sebagai bentuk pelestarian budaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-container">
                    <div class="card text-bg-dark">
                        <img src="assets/card2.png" class="card-img" alt="Image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Teater</h5>
                            <p class="card-text"><b>Seni teater Sunda </b>merupakan bentuk pementasan yang menggabungkan cerita, dialog, dan ekspresi visual untuk menyampaikan kisah-kisah yang sarat makna. Teater ini bisa berupa wayang, sandiwara, atau pertunjukan rakyat yang berfungsi sebagai hiburan sekaligus media penyampaian pesan sosial dan moral.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 card-container">
                    <div class="card text-bg-dark">
                        <img src="assets/card3.png" class="card-img" alt="Image">
                        <div class="card-img-overlay">
                            <h5 class="card-title">Musik Tradisional</h5>
                            <p class="card-text"><b>Seni musik tradisional Sunda </b>adalah warisan budaya yang menggunakan instrumen khas seperti gamelan, kacapi, suling, angklung, dan calung untuk menciptakan harmoni yang indah. Musik ini tidak hanya digunakan dalam pertunjukan seni, tetapi juga dalam berbagai ritual adat dan kegiatan sosial masyarakat Sunda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script>
        document.addEventListener("scroll", function() {
            const cards = document.querySelectorAll(".card");
            cards.forEach((card, index) => {
                const position = card.getBoundingClientRect().top;
                if (position < window.innerHeight - 50) {
                    setTimeout(() => {
                        card.classList.add("visible");
                        card.classList.remove("hidden");
                    }, index * 200);
                } else {
                    setTimeout(() => {
                        card.classList.add("hidden");
                        card.classList.remove("visible");
                    }, index * 200);
                }
            });
        });
    </script>
    </section>
    
    <section class="gallery">
        <div class="container mt-4">
            <div class="text-center mb-5">
                <h1>OUR <span>Gallery</span></h1>
            </div>
            <div class="card text-center">
                <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">TARI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">TEATER</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab">MUSIK</button>
                    </li>
                </ul>
                </div>

                <div class="card-body">
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card h-100">
                            <img src="assets/1.jpg" class="card-img-top">
                            <div class="card-body">
                            <p class="card-text">Tari Jaipong</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <img src="assets/2.jpg" class="card-img-top">
                            <div class="card-body">
                            <p class="card-text">Tari Sambutan</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="card h-100">
                            <img src="assets/3.jpg" class="card-img-top">
                            <div class="card-body">
                            <p class="card-text">Kampung Sunda</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <img src="assets/4.jpg" class="card-img-top">
                            <div class="card-body">
                            <p class="card-text">Keadilan untuk Rakyat</p>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="card h-100">
                            <img src="assets/5.jpg" class="card-img-top">
                            <div class="card-body">
                            <p class="card-text">Gatot Kaca</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/7.jpg">
                            <div class="card-body">
                            <p class="card-text">Pembuatan Karinding</p>
                            </div>
                        </div>
                    </div>    
                    <div class="col">
                        <div class="card h-100">
                            <img src="assets/6.jpg">
                            <div class="card-body">
                            <p class="card-text">Main Karinding</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?> 
</body>
