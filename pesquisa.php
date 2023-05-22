<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <link href="//www.ibiriteimobiliaria.com.br/assets/template/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <style>
        .capsula-botao {
            text-align: center;
            justify-content: center;
            align-items: center;
            align-self: center;
            align-content: center;
        }

        .buttons {
            border-radius: 30px;
            border: none;
            padding: 8px 20px;

            margin-top: 30px;
            background-color: rgb(13, 110, 253);

        }


        .font-color-white {
            color: white;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
        }


        .banner-home {
            background-color: #E4B020;
            padding: 30px;

            padding-bottom: 40px;
        }
    </style>

    <section class="banner-home">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 background-color-gold padding-top-25 padding-bottom-25">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Finalidade</label>
                                            <select id="finalidade" name="finalidade" class="form-control" required="">
                                                <option value="0">
                                                    Selecione...
                                                </option>
                                                <option value="lancamento">
                                                    Lançamento </option>
                                                <option value="locacao">
                                                    Locação </option>
                                                <option value="venda">
                                                    Venda </option>
                                                <option value="vendidos">
                                                    Vendidos </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Tipo
                                                de Imóvel</label>
                                            <select id="tipo" name="tipo" class="form-control" required="">
                                                <option value="0">
                                                    Selecione...
                                                </option>
                                                <option value="apartamento">
                                                    APARTAMENTO </option>
                                                <option value="area-privativa">
                                                    ÁREA PRIVATIVA </option>
                                                <option value="casa">
                                                    CASA </option>
                                                <option value="casa-em-condominio">
                                                    CASA EM CONDOMINIO </option>
                                                <option value="chacara">
                                                    CHÁCARA </option>
                                                <option value="cobertura">
                                                    COBERTURA </option>
                                                <option value="fazenda">
                                                    FAZENDA </option>
                                                <option value="loja">
                                                    LOJA </option>
                                                <option value="lote">
                                                    LOTE </option>
                                                <option value="lote-comercial">
                                                    LOTE COMERCIAL </option>
                                                <option value="predio">
                                                    PREDIO </option>
                                                <option value="sitio">
                                                    SÍTIO </option>
                                                <option value="terreno">
                                                    TERRENO </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Cidade</label>
                                            <select id="cidade" name="cidade" class="form-control" required="">
                                                <option value="0">
                                                    Selecione...
                                                </option>
                                                <option value="belo-horizonte">
                                                    Belo Horizonte </option>
                                                <option value="betim">
                                                    Betim </option>
                                                <option value="bonfim">
                                                    BONFIM </option>
                                                <option value="brumadinho">
                                                    Brumadinho </option>
                                                <option value="contagem">
                                                    Contagem </option>
                                                <option value="crucilandia">
                                                    Crucilândia </option>
                                                <option value="esmeraldas">
                                                    Esmeraldas </option>
                                                <option value="ibirite">
                                                    Ibirité </option>
                                                <option value="igarape">
                                                    Igarapé </option>
                                                <option value="itaoca">
                                                    Itaoca </option>
                                                <option value="lagoa-da-prata">
                                                    Lagoa da Prata </option>
                                                <option value="mario-campos">
                                                    Mário Campos </option>
                                                <option value="mateus-leme">
                                                    Mateus Leme </option>
                                                <option value="nova-uniao">
                                                    Nova União </option>
                                                <option value="oliveira">
                                                    Oliveira </option>
                                                <option value="ouro-branco">
                                                    Ouro Branco </option>
                                                <option value="rio-manso">
                                                    RIO MANSO </option>
                                                <option value="rio-manso">
                                                    RIO MANSO </option>
                                                <option value="sao-joaquim-de-bicas">
                                                    SÃO JOAQUIM DE BICAS </option>
                                                <option value="sarzedo">
                                                    Sarzedo </option>
                                                <option value="vespasiano">
                                                    Vespasiano </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Bairro</label>
                                            <select id="bairro" name="bairro" class="form-control" required="">
                                                <option value="0">
                                                    Selecione...
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 margin-top-5">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Valor
                                                Mínimo</label>
                                            <input type="text" id="valor_minimo" name="valor_minimo" class="form-control" placeholder="0,00" value="0,00">
                                        </div>
                                        <div class="col-md-3 margin-top-5">
                                            <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Valor
                                                Máximo</label>
                                            <input type="text" id="valor_maximo" name="valor_maximo" class="form-control" placeholder="0,00" value="0,00">
                                        </div>
                                        <div class="col-md-2 margin-top-35 margin-bottom-15 text-align-left padding-left-5 padding-right-5 capsula-botao">

                                            <button class="buttons" onclick="buscarImovelDetalhado()"><i class="fa fa-search"></i> Buscar</button>
                                        </div>
                                        <div class="col-md-4 margin-bottom-15 margin-top-5">
                                            <div class="row">
                                                <div class="col-md-7 padding-right-0">
                                                    <label class="font-color-white font-weight-600 font-size-14 text-uppercase">Código</label>
                                                    <input type="text" id="referencia" name="referencia" class="form-control" placeholder=" Insira a Referência">
                                                </div>
                                                <div class="col-md-5 margin-top-30 text-align-right padding-left-0 capsula-botao">

                                                    <button class="buttons"><i class="fa fa-search"></i> Buscar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>