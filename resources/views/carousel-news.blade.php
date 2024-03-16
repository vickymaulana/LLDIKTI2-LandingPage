<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.carousel {
    position: relative;
    width: 70%;
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

  .carousel-text {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: rgba(255, 255, 255, 0.5);
  }
  .penata_ruang{
    display: flex;
  }

  .carousel-text h2,
  .carousel-text h3,
  .carousel-text p {
    margin: 0;
  }
  .link:hover {
    border-bottom: 3px solid #0b63dc;
  }
  </style>
</head>
<body>
    <div class="container">
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
          <button class="prev">Previous</button>
          <button class="next">Next</button>
        </div>
        <!-- berita terbaru -->
        <div class="col-md">
    <div class="berita-terbaru penata_ruang ">
        <div class="news">
            <ul class="link" style="list-style-type: none; padding: 4; margin: 4;"> <!-- Tambahkan gaya CSS untuk menghilangkan titik -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">berita terbaru</a>
                </li>
            </ul>
        </div>
        <div class="news">
            <ul class="link" style="list-style-type: none; padding: 4; margin: 4;"> <!-- Tambahkan gaya CSS untuk menghilangkan titik -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">berita terhangat</a>
                </li>
            </ul>
        </div>
    </div>
</div>

  </div>
</div>
</div>
    
</body>
    <script>
         document.addEventListener("DOMContentLoaded", function() {
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

    document.querySelector('.next').addEventListener('click', nextSlide);
    document.querySelector('.prev').addEventListener('click', prevSlide);
  });
    </script>
</html>
