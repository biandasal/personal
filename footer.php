<style>
    .footer {
        position: relative;
        background: linear-gradient(180deg, #b08d4f 0%, #000 90%);
        color: #fff;
        padding-top: 60px;
        font-family: 'Poppins', sans-serif;
        overflow: hidden;
    }
    .footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('assets/pattern.png');
        opacity: 0.15; /* Biar nggak terlalu ramai */
        background-repeat: repeat;
        z-index: 0;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        max-width: 1300px;
        margin: auto;
        flex-wrap: wrap;
        padding: 0 20px;
        position: relative;
        z-index: 1;
    }
    .footer-section {
        flex: 1;
        margin: 10px;
        min-width: 220px;
    }
    .footer-section h2 {
        font-size: 22px;
        border-bottom: 3px solid #b08d4f;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    .footer-section p {
        font-size: 15px;
        line-height: 1.8;
    }
    .footer-section ul {
        list-style: none;
        padding: 0;
    }
    .footer-section ul li {
        margin-bottom: 12px;
    }
    .footer-section ul li a {
        text-decoration: none;
        color: white;
        font-size: 15px;
        transition: 0.3s;
    }
    .footer-section ul li a:hover {
        color: white;
        text-shadow: 0 0 5px #b08d4f;
    }
    .footer-social {
        text-align: center;
        padding: 20px 0;
        position: relative;
        z-index: 1;
    }
    .footer-social a {
        color: white;
        font-size: 22px;
        margin: 0 12px;
        transition: 0.3s;
    }
    .footer-social a:hover {
        color: white;
        text-shadow: 0 0 10px #b08d4f;
        transform: scale(1.1);
    }
    .footer-bottom {
        text-align: center;
        padding: 20px 0;
        border-top: 2px solid rgba(255, 255, 255, 0.2);
        margin-top: 30px;
        font-size: 14px;
        position: relative;
        z-index: 1;
    }
    .footer-bottom a {
        color: #b08d4f;
        text-decoration: none;
        margin: 0 8px;
        transition: 0.3s;
    }
    .footer-bottom a:hover {
        color: white;
        text-shadow: 0 0 5px #b08d4f;
    }
    .footer-section ul li {
        margin-bottom: 6px; 
    }
    .footer-section p {
        font-size: 15px;
        line-height: 1.6; /* Sebelumnya 1.8, jadi lebih padat */
        margin-bottom: 8px; /* Tambahin sedikit biar nggak terlalu nempel */
    }
    .footer-section ul li a {
        font-size: 14px; /* Sedikit kecil biar proporsional */
        display: inline-block;
        padding: 3px 0; /* Sebelumnya kosong, sekarang ada sedikit padding */
    }
    .footer-bottom {
        padding-top: 15px;
        font-size: 13px;
    }
</style>

<footer class="footer">
    <div class="footer-gradient"></div>
    <div class="footer-container">
        <div class="footer-section about">
            <h2>Sanggar Kasunda</h2>
            <p>Melestarikan budaya Sunda melalui seni tari, musik, dan kegiatan edukasi budaya.</p>
        </div>
        <div class="footer-section programs">
            <h2>Program</h2>
            <ul>
                <li><a href="#">Pelatihan Tari</a></li>
                <li><a href="#">Kelas Gamelan</a></li>
                <li><a href="#">Festival Budaya</a></li>
                <li><a href="#">Workshop Seni</a></li>
            </ul>
        </div>
        <div class="footer-section contact">
            <h2>Kontak</h2>
            <p><i class="fas fa-map-marker-alt"></i> Jl. Budaya No. 10, Bandung</p>
            <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
            <p><i class="fas fa-envelope"></i> info@sanggarkasunda.com</p>
        </div>
        <div class="footer-section social">
            <div class="footer-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Sanggar Kasunda | <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
    </div>
</footer>
