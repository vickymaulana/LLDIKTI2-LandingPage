<style>

    .carousel {
  position: relative;
  width: 100%;
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
  bottom: 10px; /* Sesuaikan jarak teks dari bawah */
  left: 50%; /* Menggeser teks ke tengah horizontal */
  transform: translateX(-50%); /* Menggeser teks ke tengah horizontal */
  text-align: center; /* Agar teks menjadi rata tengah */
  color: rgba(255, 255, 255, 0.5); /* Warna setengah */
}

.carousel-text h2,
.carousel-text h3,
.carousel-text p {
  margin: 0;
}

.news{
    display:flex;
}

.link:hover{
    border-bottom: 3px solid #0b63dc
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8">
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
        </div>
        <div class="col-md">
            <div class="berita-terbaru">
                <div class="news">
            <ul style="text-align: auto; list-style: none;">
    <li class="nav-item active link ">
        <a class="nav-link" href="#">berita terbaru</a>
    </li>
</ul>
            <ul style="text-align: auto; list-style: none;">
    <li class="nav-item active link ">
        <a class="nav-link" href="#">berita terbaru</a>
    </li>
</ul>
</div>

                
                
                
                <ul>
                    <li><a href="#">Judul Berita 1</a></li>
                    <li><a href="#">Judul Berita 2</a></li>
                    <li><a href="#">Judul Berita 3</a></li>
                    <li><a href="#">Judul Berita 4</a></li>
                    <li><a href="#">Judul Berita 5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    const carouselContainer = document.querySelector('.carousel-container');
    const slides = document.querySelectorAll('.carousel-slide');
    const slideWidth = slides[0].offsetWidth; // Mendapatkan lebar slide
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