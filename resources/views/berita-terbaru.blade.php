<!doctype html>
<html lang="en">

<head>
    <style>
        .frame-36941,
        .frame-36941 * {
            box-sizing: border-box;
        }

        .frame-36941 {
            display: flex;
            flex-direction: row;
            gap: 19px;
            align-items: flex-start;
            justify-content: flex-start;
            position: relative;
            margin-top: 20px;
        }

        .kotak {
            background: #eaedf1;
            border-radius: 20px;
            border-style: solid;
            border-color: #000000;
            border-width: 1px;
            padding: 10px;
            flex-shrink: 0;
            width: 140px;
            height: 48px;

        }

        .kotak2 {
            background: #eaedf1;
            border-radius: 20px;
            border-style: solid;
            border-color: #000000;
            border-width: 1px;
            padding: 10px;
            flex-shrink: 0;
            width: 140px;
            height: 48px;
            position: relative;

        }

        .kotak3 {
            background: #eaedf1;
            border-radius: 20px;
            border-style: solid;
            border-color: #000000;
            border-width: 1px;
            padding: 10px;
            flex-shrink: 0;
            width: 140px;
            height: 48px;
            position: relative;

        }

        .kotak4 {
            background: #eaedf1;
            border-radius: 20px;
            border-style: solid;
            border-color: #000000;
            border-width: 1px;
            padding: 10px;
            flex-shrink: 0;
            width: 140px;
            height: 48px;
            position: relative;

        }

        .kategori {
            color: #000000;
            text-align: left;
            font-family: "Roboto-ExtraBold", sans-serif;
            font-size: 20px;
            line-height: 150%;
            font-weight: 800;
            position: absolute;
            left: 19px;
            top: 9px;
        }

        .kategori .left-icon,
        .kategori .right-icon {
            position: relative;
            display: inline-block;
            width: 12px;
            height: 5px;
            background: silver;
            border-radius: 40px;

        }

        .kategori .left-icon {
            left: -3px;
            transform: rotate(45deg);
        }

        .kategori .right-icon {
            right: 13px;
            transform: rotate(-45deg);
        }
        .frame-369412 {
            background: #03419e;
            border-radius: 30px;
            border-style: solid;
            border-color: #000000;
            border-width: 1px;
            padding: 10px;
            flex-shrink: 0;
            width: 106px;
            height: 48px;
            position: relative;
            overflow: hidden;
        }

        .filter {
            color: #ffffff;
            text-align: left;
            font-family: "Roboto-ExtraBold", sans-serif;
            font-size: 20px;
            line-height: 150%;
            font-weight: 800;
            position: absolute;
            left: 24px;
            top: 9px;
        }




    </style>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="frame-36941">
        <div class="kotak">
            <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div type="button" class="kategori">Kategori
                    <span class="left-icon"></span>
                    <span class="right-icon"></span>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Teknik</a></li>
                    <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                    <li><a class="dropdown-item" href="#">Ekonomi </a></li>

                </ul>
            </div>
        </div>

        <div class="kotak2">
            <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div type="button" class="kategori">Minggu
                    <span class="left-icon"></span>
                    <span class="right-icon"></span>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Teknik</a></li>
                    <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                    <li><a class="dropdown-item" href="#">Ekonomi </a></li>

                </ul>
            </div>
        </div>
        <div class="kotak3">
            <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div type="button" class="kategori">Bulan
                    <span class="left-icon"></span>
                    <span class="right-icon"></span>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Teknik</a></li>
                    <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                    <li><a class="dropdown-item" href="#">Ekonomi </a></li>

                </ul>
            </div>
        </div>

        <div class="kotak4">
            <div type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div type="button" class="kategori">Tahun
                    <span class="left-icon"></span>
                    <span class="right-icon"></span>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Teknik</a></li>
                    <li><a class="dropdown-item" href="#">Pendidikan</a></li>
                    <li><a class="dropdown-item" href="#">Ekonomi </a></li>

                </ul>
            </div>
        </div>

        <div class="frame-369412">
            <div class="filter">Filter</div>
        </div>
    </div>
    </div>


    </div>

    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
