<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scrollable Boxes with Buttons and Images</title>
<style>
  .box-container {
    display: flex;
    flex-wrap: nowrap; /* Menghindari wrap ke baris baru */
    overflow-x: auto; /* Memberikan kemampuan scroll ke kiri dan ke kanan */
    gap: 20px;
    padding: 20px;
  }

  .box {
    flex: 0 0 auto; /* Membuat lebar kotak tetap */
    width: 300px;
    padding: 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    text-align: center;
  }

  .box img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
  }
</style>
</head>
<body>

<div class="box-container">
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>
  <div class="box">
    <img src="https://via.placeholder.com/300" alt="Placeholder Image">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-outline-success">Success</button>
  </div>

  <!-- Tambahkan kotak-kotak lain di sini sesuai kebutuhan -->
</div>

</body>
</html>