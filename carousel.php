<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <style>
      

        .carousel-item {
            height: 32rem;
            background-color: #000;
            color: white;
            position: relative;
            background-position: center;
            background-size: cover;
        }

        .carousel-item .container {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 5rem;
        }

        .carousel-item .container .btn {
            margin-top: 20px;
            padding: 10px;
            border-radius: 20px;
        }

        .carousel-item .container h1 {
            text-shadow: #353131 2px 3px 2px;
        }

        .carousel-item .container h5 {
            text-shadow: #383737 2px 3px 2px;
        }

        .overlay-image {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.6;
        }

        .btn-primary-color{
            background-color: black;
        }

        .btn-primary-color:hover{
            background-color: #D99923;
        }
    </style>


    <!--  carousel starts -->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <div class="overlay-image" style="background-image: url(ft-1.jpg);"></div>
            <div class="container">
                <h1>Ajudo você a encontrar o imóvel perfeito para comprar e alugar</h1>
                <h5>A mais de 5 anos trabalhando para te ajudar a encontrar o melhor imovel para você</h5>
                <a href="#" class="btn btn-lg btn-primary"> Entre em Contato</a>
            </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <div class="overlay-image" style="background-image: url(ft-2.jpg);"></div>
            <div class="container">
                <h1>Ajudo você a encontrar o imóvel perfeito para comprar e alugar</h1>
                <h5>A mais de 5 anos trabalhando para te ajudar a encontrar o melhor imovel para você</h5>
                <a href="#" class="btn btn-lg btn-primary"> Entre em Contato</a>
            </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(ft-3.jpg);"></div>
            <div class="container">
                <h1>Ajudo você a encontrar o imóvel perfeito para comprar e alugar</h1>
                <h5>A mais de 5 anos trabalhando para te ajudar a encontrar o melhor imovel para você</h5>
                <a href="#" class="btn btn-lg btn-primary"> Entre em Contato</a>
            </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>