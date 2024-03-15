<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navbar Buram saat Scroll</title>
<style>
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
        position: relative;
    }

    .marquee p {
        position: absolute;
        width: 100%;
        text-align: center;
        left: 0;
        animation: marquee 15s linear infinite;
        color: white; /* Menentukan warna teks putih */
    }

    @keyframes marquee {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

body {
    font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-transparent">
    <a class="navbar-brand" href="#">LLDIKTI 2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto" style="text-align: center;">
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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search">
        </form>
    </div>
</nav>

<nav class="bg-primary">
    <div class="marquee">
        <p class="text-white mt-auto">Selamat Datang di Layanan Lembaga Pendidikan Tinggi (LLDIKTI) Wilayah II - Bumi Sriwijaya, Sang Bumi Ruwa Jurai, Serumpun Sebalai, Sekundang Setungguan Seio Sekato</p>
    </div>
</nav>

<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.querySelector(".navbar").classList.add("scrolled");
  } else {
    document.querySelector(".navbar").classList.remove("scrolled");
  }
}
</script>

</body>
</html>
