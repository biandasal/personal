<?php include 'navbar.php'; ?>

<style>
    .hero {
        background: url('assets/bg.jpg') no-repeat center center;
        background-size: cover;
        padding: 60px 0;
        position: relative;
        overflow: hidden;
        z-index: 0;
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
        color: white;
    }
    .hero p {
        color: #666;
    }
    .hero-img {
        position: relative;
        z-index: 1;
        max-width: 100%;
    }
    .card {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-color: rgba(255, 255, 255, 0) !important;
        z-index: 999;
    }
    label {
        color: white;
    }
    input, textarea {
        font-size: 12px !important;
        color: white !important;
        border-radius: 0px !important;
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
        border-color: rgba(255, 255, 255, 0.0) !important;
    }
    .btn-primary {
        border-radius: 0px !important;
        background-color: #b08d4f !important;
        border-color: #b08d4f !important;
    }
</style>

<body>
    <section class="hero">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-md-5 position-relative">
                    <!-- <img src="assets/contact.png" alt="Hero Image" class="img-fluid"> -->
                </div>
                <div class="col-md-7 hero-content">
                    <h1 class="mb-3">CONTACT FOR MORE, WE ARE <span>Ready</span> TO HELP YOU.</h1>
                    <section class="card p-3 rounded-4">
                        <div class="container mt-2">
                            <form id="contactForm" class="row g-3">
                                <div class="col-md-6">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namaLengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="institusi" class="form-label">Perusahaan/Institusi</label>
                                    <input type="text" class="form-control" id="institusi" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="telepon" required>
                                </div>
                                <div class="col-12">
                                    <label for="pesan" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="pesan" rows="4" required></textarea>
                                </div>
                                <div class="col-12 mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Mencegah pengiriman form default

            // Mengambil nilai input
            var nama = document.getElementById("namaLengkap").value;
            var email = document.getElementById("email").value;
            var institusi = document.getElementById("institusi").value;
            var telepon = document.getElementById("telepon").value;
            var pesan = document.getElementById("pesan").value;

            // Membuat format email
            var subject = `Pengajuan Kerja Sama - ${nama}`;
            var body = `Salam budaya,%0D%0A%0D%0A
Perkenalkan, saya ${nama} dari ${institusi}, yang memiliki ketertarikan dalam melestarikan budaya Sunda melalui kolaborasi dengan pihak-pihak terkait. Kami sangat mengapresiasi keberadaan Sanggar Kasunda dalam menjaga dan mengembangkan seni budaya Sunda.%0D%0A%0D%0A
Melalui email ini, kami ingin mengajukan kerja sama dengan Sanggar Kasunda terkait ${pesan}. Kami yakin bahwa kolaborasi ini dapat memberikan manfaat bagi kedua belah pihak dalam melestarikan budaya Sunda serta memperkenalkannya kepada khalayak yang lebih luas.%0D%0A%0D%0A
Kami berharap dapat berdiskusi lebih lanjut mengenai bentuk kerja sama yang dapat dijalankan bersama. Jika memungkinkan, kami ingin mengatur pertemuan atau diskusi lebih lanjut pada waktu yang disepakati juga menghubungi kami pada informasi di bawah ini.%0D%0A%0D%0A
Terima kasih atas perhatian dan kesempatan yang diberikan. Kami menantikan tanggapan dari Sanggar Kasunda.%0D%0A%0D%0A
Salam hormat,%0D%0A
${nama}%0D%0A
Alamat Email: ${email}%0D%0A
Nomor Telepon: ${telepon}`;

            // Buat URL untuk Gmail
            var gmailLink = `https://mail.google.com/mail/?view=cm&fs=1&to=sanggarkasundainfo@gmail.com&su=${encodeURIComponent(subject)}&body=${body}`;

            // Redirect ke Gmail
            window.open(gmailLink, "_blank");
        });
    </script>
</body>
<?php include 'footer.php'; ?>