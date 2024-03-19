<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Bootstrap Example</title>
<style>
  /* Sesuaikan lebar dan tinggi carousel serta gambar placeholder */
  .carousel-inner, .bd-placeholder-img {
    width: 800px;
    height: 500px;
  }

  /* Menambahkan efek hover pada teks TERBARU dan TERPOPULER */
  .p-2 {
    position: relative;
    display: inline-block;
    color: #212529;
    text-decoration: none;
    padding-bottom: 3px;
    transition: transform 0.3s ease;
  }

  .p-2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    border-bottom: 2px solid transparent;
    transition: border-bottom 0.3s ease;
    z-index: -1; 
  }

  .p-2:hover {
    transform: translateY(5px);
  }

  .p-2:hover::after {
    border-bottom-color: blue; /* Ubah warna garis bawah menjadi biru saat dihover */
  }

</style>
</head>
<body class="p-3 m-0 border-0 bd-example">
  <br>

<!-- Example Code -->
<div class=>
  <div id="carouselExampleCaptions" class="carousel slide d-flex flex-row mb-3 " data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-2">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>

    <div class="col-md-2">
      <div class="row">
        <div class="col-6">
          <div class="p-2 mb-3"><b>TERBARU</b></div>
        </div>
        <div class="col-6">
          <div class="p-2 mb-3"><b>TERPOPULER</b></div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>


