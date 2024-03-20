<style>
  .faq-dan-vid-yutup,
  .faq-dan-vid-yutup * {
    box-sizing: border-box;
  }
  .faq-dan-vid-yutup {
    height: 672px;
    position: relative;
    overflow: hidden;
  }
  .group-36886 {
    position: absolute;
    inset: 0;
  }
  .group-36867 {
    width: 580px;
    height: 471.29px;
    position: static;
  }
  .accordion-item {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 580px;
    position: absolute;
    left: 829px;
    top: 172px;
  }
  .divider {
    background: #174967;
    flex-shrink: 0;
    width: 580px;
    height: 1px;
    position: relative;
  }
  .title {
    padding: 20px 0px 20px 0px;
    display: flex;
    flex-direction: row;
    gap: 12px;
    align-items: center;
    justify-content: flex-start;
    flex-shrink: 0;
    width: 580px;
    position: relative;
    overflow: hidden;
  }
  .question {
    color: #174967;
    text-align: left;
    font-family: var(--text-medium-bold-font-family, "Roboto-Bold", sans-serif);
    font-size: var(--text-medium-bold-font-size, 18px);
    line-height: var(--text-medium-bold-line-height, 150%);
    font-weight: var(--text-medium-bold-font-weight, 700);
    position: relative;
    flex: 1;
  }
  .icon {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    position: relative;
    overflow: visible;
  }
  .accordion-item2 {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 580px;
    position: absolute;
    left: 829px;
    top: 266px;
  }
  .icon2 {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    position: relative;
    overflow: visible;
  }
  .accordion-item3 {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 580px;
    position: absolute;
    left: 829px;
    top: 360px;
  }
  .icon3 {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    position: relative;
    overflow: visible;
  }
  .accordion-item4 {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 580px;
    position: absolute;
    left: 829px;
    top: 454px;
  }
  .icon4 {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    position: relative;
    overflow: visible;
  }
  .accordion-item5 {
    display: flex;
    flex-direction: column;
    gap: 0px;
    align-items: flex-start;
    justify-content: flex-start;
    width: 580px;
    position: absolute;
    left: 829px;
    top: 548px;
  }
  .icon5 {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    position: relative;
    overflow: visible;
  }
  .divider2 {
    background: #174967;
    width: 580px;
    height: 1.29px;
    position: absolute;
    left: 829px;
    top: 642px;
  }
  .heading {
    color: #174967;
    text-align: center;
    font-family: "Roboto-Bold", sans-serif;
    font-size: 36px;
    line-height: 120%;
    font-weight: 700;
    position: absolute;
    left: 793px;
    top: 56px;
    width: 651px;
    height: 62px;
  }
  .text {
    color: #174967;
    text-align: center;
    font-family: "Roboto-Regular", sans-serif;
    font-size: 20px;
    line-height: 150%;
    font-weight: 400;
    position: absolute;
    left: 788px;
    top: 105px;
    width: 651px;
    height: 38px;
  }
  .group-36929 {
    position: absolute;
    inset: 0;
  }
  .image-36 {
    width: 749px;
    height: 434px;
    position: relative;
    left: 32px;
    top: -300px;
    object-fit: cover;
  }
</style>

<div class="faq-dan-vid-yutup">
  <div class="group-36867">
    @php
    $questions = [
    ["Apa Itu LLDIKTI 2", "Apa itu LLDIKTI 2? LLDIKTI 2 adalah..."],
    ["Apa itu Palembang", "Apa itu Palembang? Palembang adalah..."],
    ["Apa itu Coding", "Apa itu Coding? Coding adalah..."],
    ["Pinjam dulu seratus", "Pinjam dulu seratus adalah..."],
    ["Apa itu Figma", "Apa itu Figma? Figma adalah..."],
    ];
    @endphp

    @foreach($questions as $key => $question)
    <div class="accordion-item{{$key + 1}}">
      <div class="divider"></div>
      <div class="title">
        <div class="question">{{ $question[0] }}</div>
        <i class="fa-solid fa-caret-down" onclick="toggleDescription({{ $key + 1 }})"></i>
      </div>
      <div class="description" id="description{{ $key + 1 }}" style="display: none;">{{ $question[1] }}</div>
    </div>
    @endforeach

    <div class="divider2"></div>
  </div>
  <div class="heading">FAQs</div>
  <div class="text">Pertanyaan Yang Sering Ditanyakan</div>
  <div data-aos="fade-right">
    <iframe class="image-36" width="560" height="315" src="https://www.youtube.com/embed/V7zAO9J06hE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
</div>
<script>
function toggleDescription(id) {
  var description = document.getElementById("description" + id);
  if (description.style.display === "none") {
    description.style.display = "block";
  } else {
    description.style.display = "none";
  }
}
</script>