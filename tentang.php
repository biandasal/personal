<style>
    body {
        background: url('assets/bg.jpg') no-repeat center center;
        background-size: cover;
        position: relative;
    }
    .jumbotron {
        position: relative;
        text-align: center;
        color: white;
        padding: 100px 20px;
        background: linear-gradient(to right, #b08d4f, #96783f);
        border-radius: 0px 0px 40px 40px;
        overflow: hidden;
    }
    .jumbotron::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/batik.png') center/cover no-repeat;
        opacity: 0.3; 
        z-index: 1;
        }
    .jumbotron h1 {
        font-size: 3rem;
        font-weight: bold;
        animation: fadeIn 2s ease-in-out;
        position: relative;
        z-index: 2;
    }
    .jumbotron p {
        font-size: 1.2rem;
        animation: slideIn 1.5s ease-in-out;
        position: relative;
        z-index: 2;
    }    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .testimonial-container {
        max-width: 900px;
        margin: auto;
        color: white;
    }
    .testimonial-card, .testimonial-image {
        transition: opacity 0.5s ease-in-out;
        color: black;
    }
    .testimonial-image img {
        border-radius: 20px;
        width: 100%;
        height: auto;
    }
    #testimonialName {
        margin-bottom: 0px;
    }
    #testimonialJob {
        font-size: 12px;
    }
    .btn-info {
        background-color: #b08d4f !important;
        border-color: #96783f !important;
        color: white !important; 
    }
    .bi-quote {
        font-size: 150px;
        margin-left: -30px;
        color: #b08d4f;
    }
    .about {
        font-family: 'Times New Roman' !important;
    }
    .about h1 {
        font-size: 100px;
        line-height: 0.5;
        margin-top: 100px;
        color: white;
    }
    .about .paragraph {
        margin-top: 250px;
        color: white;
    }
    .testimonial-container h2 span {
        font-size: 90px;
    }
</style>

<body>
    <?php include 'navbar.php'; ?> 

    <div class="container">
        <div class="jumbotron">
            <h1>ABOUT <span class="text-white">Us</span></h1>
            <p>SANGGAR KASUNDA</p>
        </div>
    </div>
    
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.navbar').css('background', '#0099ff');
            } else {
                $('.navbar').css('background', 'transparent');
            }
        });
    </script>

    <section class="about">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-4">
                    <h1><span>Tentang</span> Sanggar</h1>
                </div>
                <div class="col-8 paragraph">
                    <p>Sanggar Kasunda Berkarya adalah komunitas seni dan budaya Sunda yang berlokasi di Rancaekek, Kabupaten Bandung. Sejak didirikan oleh <b>Hendra Kasunda</b>, sanggar ini berkomitmen untuk melestarikan dan mengembangkan seni tradisional Sunda, khususnya dalam pergerakan <b>karinding</b>.</p>
                    <p>Dengan semangat kebersamaan, Sanggar Kasunda aktif mengadakan berbagai kegiatan seni, kolaborasi budaya, serta edukasi bagi masyarakat. Acara <i><b>Melodi Melodi Kasunda</b></i>, yang telah diselenggarakan di berbagai lokasi seperti Jatinangor, Bandung, dan Lembang, menjadi salah satu bentuk nyata kontribusi sanggar dalam memperkenalkan budaya Sunda ke khalayak luas.</p>
                    <p>Selain itu, Saung Kasunda Berkarya juga terus berinovasi dalam menciptakan seni baru, seperti Tari Karinding, yang pertama kali diperkenalkan dalam sebuah garapan seni oleh anggota sanggar. Dengan dedikasi lebih dari satu dekade, komunitas ini menjadi wadah bagi para seniman, budayawan, dan generasi muda untuk bersama-sama menjaga dan mengembangkan kekayaan budaya Sunda.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container testimonial-container py-5">
        <h2><span>Pengurus</span> SANGGAR KASUNDA</h2>
        <div class="row align-items-center mt-4">
            <!-- Card Keterangan -->
            <div class="col-md-6">
                <div id="testimonialCard" class="testimonial-card p-4 bg-white rounded shadow">
                    <i class="bi bi-quote"></i>
                    <p class="fs-5" id="testimonialText">Sebagai PIC Kasunda Knowledge, tugasnya adalah mengelola dan mendistribusikan informasi serta dokumentasi pengetahuan dalam organisasi.</p>
                    <p class="fw-bold" id="testimonialName">Asep Hendra Waliyani S.Ip</p>
                    <p class="text-muted" id="testimonialJob">PIC - Kasunda Knowledge</p>
                    <div class="d-flex">
                        <button class="btn btn-info ms-auto me-2" onclick="prevSlide()">&#8592;</button>
                        <button class="btn btn-info" onclick="nextSlide()">&#8594;</button>
                    </div>
                </div>
            </div>
            <!-- Gambar -->
            <div class="col-md-6">
                <div id="testimonialImage" class="testimonial-image">
                    <img src="member/Asep.png" alt="Testimoni">
                </div>
            </div>
        </div>
    </div>
    
    <script>
    const testimonials = [
        { text: "Sebagai PIC Kasunda Knowledge, tugasnya adalah mengelola dan mendistribusikan informasi serta dokumentasi pengetahuan dalam organisasi.", name: "Asep Hendra Waliyani S.Ip", job: "PIC - Kasunda Knowledge", image: "member/Asep.png" },
        { text: "Sebagai Sekretaris 1 di Sanggar Kasunda, tugasnya adalah mengelola administrasi, menyusun laporan, serta mendukung kelancaran komunikasi dan dokumentasi organisasi.", name: "Muhamad Hadi Rahman", job: "Sekretaris 1", image: "member/Hadi.png" },
        { text: "Sebagai Sekretaris 2 di Sanggar Kasunda, tugasnya adalah membantu Sekretaris 1 dalam administrasi, dokumentasi, serta koordinasi kegiatan organisasi.", name: "Salimah Al-Shani", job: "Sekretaris 2", image: "member/Salimah.png" },
        { text: "Sebagai Bendahara di Sanggar Kasunda, tugasnya adalah mengelola keuangan, mencatat pemasukan dan pengeluaran, serta menyusun laporan keuangan organisasi.", name: "Meilani Safitri", job: "Bendahara", image: "member/Meilani.png" },
        { text: "Sebagai PIC Kasunda Project, tugasnya adalah merencanakan, mengoordinasikan, dan mengawasi pelaksanaan proyek agar berjalan sesuai target dan tujuan organisasi.", name: "Ryan Tania", job: "PIC - Kasunda Project", image: "member/Ryan.png" },
        { text: "Sebagai Pengajar di Sanggar Kasunda, tugasnya adalah menyampaikan materi, membimbing peserta, dan memastikan pemahaman serta perkembangan mereka dalam bidang yang diajarkan.", name: "Teguh Septian", job: "Pengajar I", image: "member/Teguh.png" },
        { text: "Sebagai Pengajar di Sanggar Kasunda, tugasnya adalah menyampaikan materi, membimbing peserta, dan memastikan pemahaman serta perkembangan mereka dalam bidang yang diajarkan.", name: "Gugun Gunawan", job: "Pengajar II", image: "member/Gugun.png" },
        { text: "Sebagai Pengajar di Sanggar Kasunda, tugasnya adalah menyampaikan materi, membimbing peserta, dan memastikan pemahaman serta perkembangan mereka dalam bidang yang diajarkan.", name: "Nadira Bulanita Rosana", job: "Pengajar III", image: "member/Nadira.png" }
    ];

    let currentIndex = 0;

    function updateTestimonial() {
        document.getElementById('testimonialText').innerText = testimonials[currentIndex].text;
        document.getElementById('testimonialName').innerText = testimonials[currentIndex].name;
        document.getElementById('testimonialJob').innerText = testimonials[currentIndex].job;
        document.getElementById('testimonialImage').innerHTML = `<img src="${testimonials[currentIndex].image}" alt="Testimoni">`;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
    }
    </script>

    <?php include 'footer.php'; ?> 
</body>
