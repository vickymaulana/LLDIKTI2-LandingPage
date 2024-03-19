<style>
    .image-logo-navbar {
        width: 200px;
    }
    
    .navbar {
        transition: background-color 0.5s ease;
    }
    
    .navbar.scrolled {
        background-color: rgba(255, 255, 255, 0.8); /* Atur warna buram di sini */
        backdrop-filter: blur(10px); /* Efek blur */
    }
    
    .form-control {
        border-radius: 20px; /* Ubah nilai sesuai keinginan Anda */
    }
    
    .marquee {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
        animation: marquee 15s linear infinite;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
    }
    
    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }
    
    .bg-primary {
        overflow: hidden;
        border-radius: 20px;
    }
    
    .mx-auto {
        display: inline-block;
    }
    
    .text-center {
        text-align: center;
    }
    
    .navbar-nav {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }
    
    .nav-item {
        list-style-type: none;
        margin: 0 10px; /* Sesuaikan jarak antar menu */
    }
    
    .nav-link {
        color: #007bff; /* Sesuaikan warna teks */
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .nav-link:hover {
        color: #0056b3; 
    }
    
    @media (max-width: 768px) {
        .navbar-nav {
            flex-direction: column;
            align-items: flex-start;
        }
    
        .nav-item {
            margin: 10px 0;
        }
    
        .social-media-icons {
            margin-top: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .navbar-brand {
            font-size: 18px;
        }
    
        .navbar-toggler {
            padding: 0.25rem 0.5rem;
        }
    
        .navbar-toggler-icon {
            font-size: 1rem;
        }
    
        .marquee p {
            font-size: 14px;
        }
    }
    </style>
    
    <nav class="container navbar navbar-expand-lg navbar-transparent">
        <a class="navbar-brand" href="#">
            <img class="image-logo-navbar" src="/img/logoLLDikti2.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Informasi Publik</a>
                </li>
            </ul>
            <div class="social-media-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
    
    <nav class="bg-primary">
        <div class="marquee">
            <p class="mx-auto text-center">Selamat Datang di Layanan Lembaga Pendidikan Tinggi (LLDIKTI) Wilayah II - Bumi Sriwijaya, Sang Bumi Ruwa Jurai, Serumpun Sebalai, Sekundang Setungguan Seio Sekato</p>
        </div>
    </nav>
    
    <script>
        window.addEventListener('scroll', scrollFunction);
    
        function scrollFunction() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 80) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }
    </script>
    
    