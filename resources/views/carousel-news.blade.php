
    <style>
        /* Masukkan gaya CSS Anda di sini */
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
            transition: transform 0.5s ease;
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
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: rgba(255, 255, 255, 0.5);
        }

        .penata_ruang {
            display: flex;
        }

        .carousel-text h2,
        .carousel-text h3,
        .carousel-text p {
            margin: 0;
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
    </style>
    <div class="container-carousel">
        <div class="row">
            <div class="col-md-8 penata_ruang">
                <div class="carousel">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <img src="https://via.placeholder.com/825x400" alt="Slide 1">
                            <div class="carousel-text">
                                <h2>Judul Slide 1</h2>
                                <h3>Sub Judul Slide 1</h3>
                                <p>Deskripsi Slide 1</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="https://via.placeholder.com/825x400" alt="Slide 2">
                            <div class="carousel-text">
                                <h2>Judul Slide 2</h2>
                                <h3>Sub Judul Slide 2</h3>
                                <p>Deskripsi Slide 2</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <img src="https://via.placeholder.com/825x400" alt="Slide 3">
                            <div class="carousel-text">
                                <h2>Judul Slide 3</h2>
                                <h3>Sub Judul Slide 3</h3>
                                <p>Deskripsi Slide 3</p>
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
                                <a class="nav-link" href="#">berita terbaru</a>
                            </li>
                        </ul>
                    </div>
                    <div class="news">
                        <ul class="link" style="list-style-type: none; padding: 4; margin: 4;">
                            <!-- Tambahkan gaya CSS untuk menghilangkan titik -->
                            <li class="nav-item active">
                                <a class="nav-link" href="#">berita terhangat</a>
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
