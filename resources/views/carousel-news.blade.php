
    <style>
        /* Masukkan gaya CSS Anda di sini */
        .content {
            position: absolute; /* Position the background text */
            bottom: 0; /* At the bottom. Use top:0 to append it to the top */
            background: rgb(0, 0, 0); /* Fallback color */
            background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
            color: #f1f1f1; /* Grey text */
            width: 100%; /* Full width */
            height: 40%;
            padding: 20px; /* Some padding */
        }

        .container-carousel {
            font-family: 'Roboto', sans-serif;
        }

        .carousel {
            position: relative;
            width: 1000px;
            height: 594px;
            overflow: hidden;
            border-radius: 20px;
        }

        .carousel-container {
            display: flex;
            transition: transform 2s ease;
        }

        .carousel-slide {
            min-width: 100%;
            position: relative;
        }

        .carousel-slide img {
            width: 100%;
            height: auto;
        }

        .carousel-text {
            position: absolute;
            bottom: 1.25rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
            justify-content: left;
        }

        .penata_ruang {
            display: flex;
        }

        .carousel-text h2, 
        .carousel-text p {
            font-size: 1.2rem;
        }

        .carousel-text h3,
            margin: 0;
            font-size: 1.4rem;
        }

        .link {
            position: relative; /* Menetapkan posisi relatif */
            display: inline-block; /* Membuat tautan menjadi inline-block */
            color: #000; /* Warna teks */
            text-decoration: none; /* Menghapus garis bawah bawaan */
            transition: color 0.3s; /* Efek transisi untuk warna teks */
        }

        .link::after {
            content: ''; /* Menambahkan elemen pseudo */
            position: absolute; /* Menetapkan posisi absolut */
            bottom: -3px; /* Menetapkan posisi bagian bawah */
            left: 0; /* Menetapkan posisi ke kiri */
            width: 100%; /* Lebar penuh */
            height: 3px; /* Tinggi garis bawah */
            background-color: transparent; /* Warna garis bawah awal transparan */
            transition: background-color 0.3s; /* Efek transisi untuk warna */
        }

        .link:hover::after,
        .link:focus::after { /* Efek saat hover atau focus (klik) */
            background-color: #0b63dc; /* Mengubah warna garis bawah saat hover atau focus */
        }

        .link:focus {
            outline: none; /* Menghapus outline default saat focus */
        }

        /* Style untuk tombol previous dan next */
        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .d-none {
            display: none !important;
        }

        .d-md-block {
            display: block !important;
        }

    </style>
    <div class="container-carousel">
        <div class="row">
            <div class="col-md-8 penata_ruang">
                <div class="carousel">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <img src="../img/img1.jpg" alt="Slide 1">
                            <div class="carousel-text d-none d-md-block content">
                                <h2>Berita</h2>
                                <h3>UMITRA Memiliki Guru Besar Pertama Bidang Kesehatan, LLDIKTI II Serahkan SK Prof. Dr. Atikah Adyas, SKM, MDM.</h3>
                                <p>Desember 21, 2022</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="../img/img2.jpg" alt="Slide 2">
                            <div class="carousel-text d-none-d-md-block content">
                                <h2>Berita</h2>
                                <h3>LLDIKTI Wilayah II Tinjau Kesiapan Pendirian Fakultas Kedokteran UM Metro</h3>
                                <p>Januari 19, 2023</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="../img/img3.jpg" alt="Slide 3">
                            <div class="carousel-text d-none d-md-block content">
                                <h2>Berita</h2>
                                <h3>Kepala LLDikti Wilayah II Prof Iskhaq Iskandar Lontarkan Pujian Universitas Teknokrat Indonesia Banyak Gelar Pengabdian kepada Masyarakat</h3>
                                <p>Desember 21, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- berita terbaru -->
            <div class="col-md">
                <div class="berita-terbaru penata_ruang ">
                    <div class="news">
                        <ul class="link" style="list-style-type: none; padding: 4; margin: 4;">
                            <!-- Tambahkan gaya CSS untuk menghilangkan titik -->
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Terbaru</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news">
                        <ul class="link" style="list-style-type: none; padding: 4; margin: 4;">
                            <!-- Tambahkan gaya CSS untuk menghilangkan titik -->
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Terpopuler</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carouselContainer = document.querySelector('.carousel-container');
            const slides = document.querySelectorAll('.carousel-slide');
            const slideWidth = slides[0].offsetWidth;
            let slideIndex = 0;

            function showSlide(index) {
                const newPosition = -index * slideWidth;
                carouselContainer.style.transform = 'translateX(' + newPosition + 'px)';
            }

            function nextSlide() {
                slideIndex = (slideIndex + 1) % slides.length;
                showSlide(slideIndex);
            }

            function prevSlide() {
                slideIndex = (slideIndex - 1 + slides.length) % slides.length;
                showSlide(slideIndex);
            }

            // Fungsi untuk otomatisasi penggantian slide setiap 3 detik
            setInterval(nextSlide, 3000);

            // Menghapus event listener dari tombol previous dan next
            document.querySelector('.prev').removeEventListener('click', prevSlide);
            document.querySelector('.next').removeEventListener('click', nextSlide);
            
            // Menambahkan event listener ke tombol previous dan next
            document.querySelector('.prev').addEventListener('click', prevSlide);
            document.querySelector('.next').addEventListener('click', nextSlide);
        });
    </script>
