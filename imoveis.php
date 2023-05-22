<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




    <title>Document</title>
</head>

<body>
    <style>
        .card-imovel {
            margin-bottom: 30px;
            display: flex;
            flex-direction: column;
            box-shadow: 5px 5px 15px -10px rgba(0, 0, 0, 0.7);
            max-width: 300px;
            border-radius: 5px;
        }

        .card-imovel a {
            text-decoration: none;

        }

        .foto-container {
            position: relative;
            border-radius: 30px;

        }

        .picturebadge {
            position: absolute;
            background-color: blue;
            color: white;
            bottom: 0px;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            border-top-right-radius: 20px 20px;
            font-size: 15px;
            font-weight: bold;
        }

        .picturebadge p {
            margin: 0;
        }

        .info-container {
            padding: 15px;
        }

        .info-container .cidade {
            font-size: 14px;
            text-align: left;
            margin-bottom: 5px;
        }

        .info-container .titulo {
            font-size: 18px;
            font-weight: bold;
            text-align: left;
            line-height: 1.1em;
        }


        .info-container .preco {
            margin-top: 30px;
            text-align: right;
            font-size: 20px;
            font-weight: 700;
            color: #555;
        }


        .info-house-container {
            display: flex;
            justify-content: space-around;
            border-top: 1px solid #e6e4e4;
            padding-top: 5px;
        }

        .info-house-container>div {
            display: block;
        }


        .info-house-container>span {
            padding: 10px 0;
            display: inline-block;
            color: #fff;
            text-align: center;
            font-weight: 600;
            width: 23%;
            font-size: 16px;
            border-radius: 0;

            color: #555;
        }

        .info-house-container .dependencia {
            display: flex;
            flex-direction: column;

        }

        .info-house-container .garagem,
        .info-house-container .quartos,
        .info-house-container .banheiro {
            border-right: 1px solid #e6e4e4;

        }

        .info-house-container:not(:last-child) {
            border-right: 1px solid #555;

        }

        .container-card-imoveis {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .foto-container img {
            width: 288px;
            height: 200px;
        }

        @media screen and (max-width: 820px) {
            .container-card-imoveis {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                justify-content: center;
                margin: 0 auto;
                align-items: center;
            }


        }

        @media screen and (max-width: 414px) {
            .container-card-imoveis {
                display: grid;
                grid-template-columns: repeat(1, 300px);
                justify-content: center;
                margin: 0 auto;
                align-items: center;
            }


        }


        @media screen and (max-width: 820px) {
            .card-servicos {
                height: 256px;
            }

        }


        @media screen and (max-width: 450px) {
            .card-servicos {
                height: 256px;
            }

        }

        @media screen and (max-width: 414px) {
            .flexdirection {
                flex-direction: column;
            }
        }

        .car {
            height: 21px;
            width: 17px;
        }

        .cidade span,
        .titulo p {
            color: black;
        }

        .container-card-imoveis{
          padding: 100px;
        }
    </style>

    <section class="imoveis" id="imoveis-card">

        <div class="row container-card-imoveis">





            <div class="card-imovel " id="imoveis">
                <a href="detalhes.html">
                    <div class="foto-container">
                        <img src="assets/img/imoveis/32/ap7.jpg" alt="">
                        <div class="picturebadge">
                            <p>Apartamento | Venda</p>
                        </div>

                    </div>


                    <div class="info-container">
                        <!-- <div class="bairro"> <span class="bi bi-house"></span> bairro</div> -->
                        <div class="cidade"> <i class="bi bi-geo-alt-fill"></i><span>Betim - MG</span> </div>
                        <div class="titulo">
                            <p>Imóvel alto padrao</p>
                        </div>
                        <div class="preco">R$36000.00</div>

                    </div>

                    <div class="info-house-container">
                        <span class="garagem depedencia">
                            <p>2</p><img class="car" src="assets/img/icons/car.png" alt="">
                        </span>
                        <span class="quartos depedencia">
                            <p>3</p> <i class="bi bi-door-closed"></i>
                        </span>
                        <span class="banheiro depedencia">
                            <p>1</p> <i class="bi bi-badge-wc-fill"></i>
                        </span>
                        <span class="area depedencia">
                            <p>350m²</p> <i class="bi bi-arrows-fullscreen"></i>
                        </span>

                    </div>
                </a>
            </div>

            <div class="card-imovel " id="imoveis">
                <div class="foto-container">
                    <a href="detalhes.html">
                        <img src="assets/img/imoveis/32/ap7.jpg" alt="">
                        <div class="picturebadge">
                            <p>Apartamento | Venda</p>
                        </div>

                </div>


                <div class="info-container">
                    <!-- <div class="bairro"> <span class="bi bi-house"></span> bairro</div> -->
                    <div class="cidade"> <i class="bi bi-geo-alt-fill"></i><span>Betim - MG</span></div>
                    <div class="titulo">
                        <p>Imóvel alto padrao</p>
                    </div>
                    <div class="preco">R$36000.00</div>
                </div>

                <div class="info-house-container">
                    <span class="garagem depedencia">
                        <p>2</p> <img class="car" src="assets/img/icons/car.png" alt="">
                    </span>
                    <span class="quartos depedencia">
                        <p>3</p> <i class="bi bi-door-closed"></i>
                    </span>
                    <span class="banheiro depedencia">
                        <p>1</p> <i class="bi bi-badge-wc-fill"></i>
                    </span>
                    <span class="area depedencia">
                        <p>350m²</p> <i class="bi bi-arrows-fullscreen"></i>
                    </span>

                </div>
                </a>
            </div>


            <div class="card-imovel " id="imoveis">
                <div class="foto-container">
                    <a href="detalhes.html">

                        <img src="assets/img/imoveis/32/ap7.jpg" alt="">
                        <div class="picturebadge">
                            <p>Apartamento | Venda</p>
                        </div>

                </div>


                <div class="info-container">
                    <!-- <div class="bairro"> <span class="bi bi-house"></span> bairro</div> -->
                    <div class="cidade"> <i class="bi bi-geo-alt-fill"></i><span>Betim - MG</span></div>
                    <div class="titulo">
                        <p>Imóvel alto padrao</p>
                    </div>
                    <div class="preco">R$36000.00</div>

                </div>

                <div class="info-house-container">
                    <span class="garagem depedencia">
                        <p>2</p><img class="car" src="assets/img/icons/car.png" alt="">
                    </span>
                    <span class="quartos depedencia">
                        <p>3</p> <i class="bi bi-door-closed"></i>
                    </span>
                    <span class="banheiro depedencia">
                        <p>1</p> <i class="bi bi-badge-wc-fill"></i>
                    </span>
                    <span class="area depedencia">
                        <p>350m²</p> <i class="bi bi-arrows-fullscreen"></i>
                    </span>

                </div>
                </a>

            </div>



            <div class="card-imovel " id="imoveis">
                <a href="detalhes.html">

                    <div class="foto-container">
                        <img src="assets/img/imoveis/32/ap7.jpg" alt="">
                        <div class="picturebadge">
                            <p>Apartamento | Venda</p>
                        </div>

                    </div>


                    <div class="info-container">
                        <!-- <div class="bairro"> <span class="bi bi-house"></span> bairro</div> -->
                        <div class="cidade"> <i class="bi bi-geo-alt-fill"></i><span>Betim - MG</span></div>
                        <div class="titulo">
                            <p>Imóvel alto padrao</p>
                        </div>
                        <div class="preco">R$36000.00</div>

                    </div>

                    <div class="info-house-container">
                        <span class="garagem depedencia">
                            <p>2</p> <img class="car" src="assets/img/icons/car.png" alt="">
                        </span>
                        <span class="quartos depedencia">
                            <p>3</p> <i class="bi bi-door-closed"></i>
                        </span>
                        <span class="banheiro depedencia">
                            <p>1</p> <i class="bi bi-badge-wc-fill"></i>
                        </span>
                        <span class="area depedencia">
                            <p>350m²</p> <i class="bi bi-arrows-fullscreen"></i>
                        </span>

                    </div>
                </a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>