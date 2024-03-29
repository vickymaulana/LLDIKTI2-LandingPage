<style>
.accordion {
  background-color: #ffff;
  color: #174967;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active-faq, .accordion:hover {
  background-color: #ffff;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active-faq:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.container-faq {
  display: flex;
  flex-direction: row;
  margin-top: 50px;
  margin-left: 30px;
  margin-right: 20px;
  position: relative;
  margin-bottom: 20px;
}

.text-faq{
  text-align: center;
  color: #174967;
}

/* Media queries for mobile interfaces */
@media only screen and (max-width: 600px) {
  .container-faq {
    flex-direction: column;
    align-items: center;
  }
  
  .text-faq {
    margin-left: 0;
    margin-right: 0;
  }

  .image36 {
    width: 100%;
  }
}
</style>

<div class="container-faq">
    <div>
        <div data-aos="fade-right" style="margin-top: 20px; margin-left: 20px">
            <iframe 
            class="image-36" 
            width="625" 
            height="350" 
            max-width="100%"
            src="https://www.youtube.com/embed/V7zAO9J06hE" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>
    </div>

    <div style="margin-left: 50px; margin-right: 25px;" class="text-faq">
        <h2>FAQ</h2>
        <p>Pertanyaan yang Sering Ditanyakan.</p>
        <button class="accordion">Apa itu LLDIKTI Wilayah II</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
 
        <button class="accordion">Apa itu Figma</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion">Pinjam dulu seratus</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion">Engga tau apaan</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

        <button class="accordion">Dimana lokasi LLDIKTI</button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active-faq");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>