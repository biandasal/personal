<style>
    .tabs {
        background: black url('assets/pattern.png') repeat;
        background-size: 200px;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }
    .content {
        width: 100%;
        max-width: 1000px;  
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        color: white;
        text-align: center;
    }
    .list-group-item {
        background: rgba(255, 255, 255, 0.4) !important;
        backdrop-filter: blur(20px) !important;
        border-color: rgba(255, 255, 255, 0.1) !important;
        color: white !important;
    }
    .list-group-item.active {
        background: rgba(255, 255, 255, 0.1) !important;
        border-color: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(10px) !important;
    }
    .tabs h4 {
        text-align: center;
        font-weight: 700;
        font-size: 50px;
        margin-bottom: 30px;
    }
    .scrollspy-example {
        scrollbar-width: none; 
        -ms-overflow-style: none; 
    }
    .scrollspy-example::-webkit-scrollbar {
        display: none; 
    }
    .detail-btn {
        background-color: #96783f !important;
        border-color: #96783f !important;
        font-size: 12px !important;
        border-radius: 0px !important;
    }
    .col .card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        color: white;
    }
</style>

<?php include 'navbar.php'; ?> 

<body>
    <section class="tabs">
        <div class="content">
            <div class="row">
                <div class="col-3">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-karinding">Karinding</a>
                    <a class="list-group-item list-group-item-action" href="#list-teater">Teater</a>
                    <a class="list-group-item list-group-item-action" href="#list-tari">Tari</a>
                    <a class="list-group-item list-group-item-action" href="#list-sastra">Sastra</a>
                </div>
                </div>
                <div class="col-9">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"  style="overflow-y: auto; max-height: 80vh;">
                    <h4 id="list-karinding"><span>K</span>arinding</h4>
                    <div class="list-karinding mb-4">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/karinding.jpeg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Karinding</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Fahri</b> menampilkan keahlian dalam memainkan karinding</p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/karinding.jpeg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="list-teater"><span>T</span>eater</h4>
                    <div class="list-teater mb-4">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/4.jpg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Teater</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Team Teater Gen 3</b> menampilkan Teater bertajuk <b>Keadilan Untuk Rakyat</b></p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/4.jpg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/teater.jpeg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Teater II</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Team Teater Gen 3</b> menampilkan Teater bertajuk <b>Desa Ajaib</b></p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/teater.jpeg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="list-tari"><span>T</span>ari</h4>
                    <div class="list-tari mb-4">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/tari.jpg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Tari</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Team Tari Kasunda</b> menampilkan Tari <b>Kasundaan</b></p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/tari.jpg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/1.jpg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Tari</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Team Tari Kasunda</b> menampilkan Tari <b>Jaipong</b></p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/1.jpg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="list-sastra"><span>S</span>astra</h4>
                    <div class="list-sastra mb-4">
                        <div class="row row-cols-1 row-cols-md-3 g-3">
                            <!-- Card 1 -->
                            <div class="col">
                                <div class="card h-100">
                                    <img src="assets/sastra.jpg" class="card-img-top" alt="Gambar 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Penampilan Sastra</b></h5>
                                        <p class="card-text">Dalam acara ini, <b>Anggita</b> menampilkan Puisi bertajuk <b>Air Mata Tanah Air</b></p>
                                        <button class="btn btn-primary detail-btn" data-title="Penampilan Karinding" 
                                            data-img="assets/sastra.jpg" 
                                            data-desc="Ini adalah deskripsi panjang untuk card 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Detail Card</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img id="modalImg" src="" class="img-fluid mb-3" alt="Gambar">
                        <p id="modalDesc"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    const scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#navbar-example'
})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const detailButtons = document.querySelectorAll(".detail-btn");
        const modalTitle = document.getElementById("modalLabel");
        const modalImg = document.getElementById("modalImg");
        const modalDesc = document.getElementById("modalDesc");

        detailButtons.forEach(button => {
            button.addEventListener("click", function () {
                modalTitle.textContent = this.getAttribute("data-title");
                modalImg.src = this.getAttribute("data-img");
                modalDesc.textContent = this.getAttribute("data-desc");

                // Menampilkan modal
                const detailModal = new bootstrap.Modal(document.getElementById("detailModal"));
                detailModal.show();
            });
        });
    });
</script>

<?php include 'footer.php'; ?> 