@php
    $carouselItems = [
        [
            'image' => 'img/img1.jpg',
            'caption' => 'First slide label',
            'content' => 'Some representative placeholder content for the first slide.',
        ],
        [
            'image' => 'img/img2.jpg',
            'caption' => 'Second slide label',
            'content' => 'Some representative placeholder content for the second slide.',
        ],
        [
            'image' => 'img/img3.jpg',
            'caption' => 'Third slide label',
            'content' => 'Some representative placeholder content for the third slide.',
        ]
    ];
@endphp

<style>
    /* Sesuaikan lebar dan tinggi carousel serta gambar placeholder */
    .carousel-inner, .bd-placeholder-img, .bd-placeholder-img {
            max-width: 70%; /* Set maximum width to 60% of the screen */
            height: auto; /* Let the height adjust automatically */
            margin-right: auto; /* Center the carousel */
            margin-left: auto; /* Center the carousel */
            border-radius: 42px; 
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

        .sidebar {
            width: 40%;
        }
</style>

<br>

<div>
    <div id="carouselExampleCaptions" class="carousel slide d-flex flex-row mb-3 " data-bs-ride="false">
        <div class="carousel-indicators">
            @foreach ($carouselItems as $key => $item)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($carouselItems as $key => $item)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ $item['image'] }}" class="bd-placeholder-img bd-placeholder-img-lg d-block carousel-inner" role="img" aria-label="Placeholder: Slide {{ $key + 1 }}" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item['caption'] }}</h5>
                        <p>{{ $item['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="sidebar">
            <div class="row">
                <div class="col-4">
                    <div class="p-2 mb-3"><b>TERBARU</b></div>
                </div>
                <div class="col-4">
                    <div class="p-2 mb-3"><b>TERPOPULER</b></div>
                </div>
            </div>
        </div>
    </div>
</div>
