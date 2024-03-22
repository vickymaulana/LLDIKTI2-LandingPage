<style>
  .card-img-top {
    transition: transform 0.3s ease;
  }

  .card-img-top:hover {
    transform: scale(1.1);
  }

  .title h2 {
    color: #174967;
  text-align: center;
  font-family: "Outfit-Bold", sans-serif;
  font-size: 30px;
  line-height: 66px;
  font-weight: 700;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  }

  .container {
    display: flex;
    justify-content: space-around;
    padding-right: 50px;
  }

.our-portfolio {
  padding-top: 120px;
  margin-top: 0px;
}

/* .our-portfolio .section-heading h2 {
  text-align: left;
  margin: 0px 0px 0px 0px;
  margin-bottom: 10px;
  position: relative;
  z-index: 1;
} */

.our-portfolio .item {
  position: relative;
  width: 350px;
  height: 50px;
  margin: auto;
  padding-right: 100px;
  margin-bottom: 250px;
}

.our-portfolio .item:hover .hidden-content {
  top: -100px;
  opacity: 1;
  visibility: visible;
}

.our-portfolio .item:hover .showed-content {
  top: 90px;
}

.our-portfolio .hidden-content {
  background: #03419E;
  background: linear-gradient(105deg, #03419E; 0%, rgba(255,44,109,1) 100%);
  padding: 20px;
  border-radius: 20px;
  text-align: center;
  opacity: 0;
  top: 0;
  visibility: hidden;
  position: absolute;
  z-index: 2;
  transition: all 0.5s;
  width: 250px;
  height: 150px;
}

.our-portfolio .hidden-content:after {
  width: 20px;
  height: 20px;
  position: absolute;
  background: #03419E;
  content: '';
  left: 50%;
  bottom: -8px;
  margin-left: 5px;
  transform: rotate(45deg);
  background: linear-gradient(105deg, #03419E; 0%, rgba(255,51,78,1) 100%);
  z-index: -1;
}

.our-portfolio .hidden-content h4 {
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  margin-bottom: 15px;
}

.our-portfolio .hidden-content p {
  color: #fff;
}

.our-portfolio .showed-content {
  top: 0px;
  position: relative;
  z-index: 3;
  background-color: #fff;
  text-align: center;
  padding: 50px;
  border-radius: 20px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  transition: all 0.5s;
}

.our-portfolio .showed-content img {
  max-width: 100px;
}

@-webkit-keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

@keyframes bounceInUp {
  0%, 60%, 75%, 90%, 100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
            transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
            transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
            transform: translate3d(0, -5px, 0);
  }

  100% {
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
          animation-name: bounceInUp;
}

</style>



<div class="container" style="display: flex; justify-content: center; align-items: center; height: 10vh;">
<div class="title page" style="text-align: center;">
<div data-aos="zoom-in">
  <h2>Layanan Aplikasi</h2></div>
</div>
</div>


<div id="portfolio" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
      <div data-aos="fade-down"
      data-aos-duration="500"
      data-aos-delay="200">
        <a href="https://sikito.lldikti2.id/" target="_blank">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="hidden-content">
              <h4>SI-KITO</h4>
              <p>Sistem Informasi Kepangkatan Jabatan Fungsional Online</p>
            </div>
            <div class="showed-content">
              <img src="./img/176184.png" alt="">
            </div>
          </div>
        </a></div>
      </div>
      <div class="col-lg-3 col-sm-6">
      <div data-aos="fade-down"
      data-aos-duration="500"
      data-aos-delay="200">
        <a href="https://missmonik.lldikti2.id/" target="_blank">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="hidden-content">
              <h4>MISSMONIK</h4>
              <p>Manajemen Sistem Arsip Dokumen Elektronik</p>
            </div>
            <div class="showed-content">
              <img src="./img/176185.png"  alt="">
            </div>
          </div>
        </a></div>
      </div>
      <div class="col-lg-3 col-sm-6">
      <div data-aos="fade-down"
      data-aos-duration="500"
      data-aos-delay="200">
        <a href="https://dites.lldikti2.id/" target="_blank">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="hidden-content">
              <h4>DiTES</h4>
              <p>Digital Tracking Equipment System</p>
            </div>
            <div class="showed-content">
              <img src="./img/176186.png"alt="">
            </div>
          </div>
        </a></div>
      </div>
      <div class="col-lg-3 col-sm-6">
      <div data-aos="fade-down"
      data-aos-duration="500"
      data-aos-delay="200">
        <a href="#">
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="hidden-content">
              <h4>AMPERA</h4>
              <p>Anjungan Mutu Perguruan Tinggi LLDIKTI II</p>
            </div>
            <div class="showed-content">
              <img src="./img/176187.png" alt="">
            </div>
          </div>
        </a></div>
      </div>
    </div>
  </div>
</div>

</div>


