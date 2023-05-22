<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet" />

    <link href="https://www.c2tiapps.com/sites/028/Styles/StyleSheet.css" rel="stylesheet" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <meta name="description" />
    <meta property="og:title" content="TR Imobiliária" />
    <meta property="twitter:title" content="TR Imobiliária" />
    <meta property="og:url" content="http://imobiliariatr.com.br" />
    <meta property="twitter:url" content="http://imobiliariatr.com.br" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://cache2net.com/Repositorio/6436/Logo/99581a57-c.png" />
    <meta property="twitter:image" content="https://cache2net.com/Repositorio/6436/Logo/99581a57-c.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="600" />
    <meta property="twitter:card" content="summary_large_image" />
    <title>
        TR Imobiliária
    </title>
</head>

<body>



    <div class="style-extra">
        <style>
            .header__topbar {
                background: black;
            }


            /* muda a cor do navbar */
            .navbar,    .menu-navbar{
                background-color: black;
            }

         


            .box-imovel .img-imovel>.layer-destaque {
                background: #833739;
                color: #fff;
            }

            .title-tipoImoveis,
            .imovel-col-border-bottom,
            .footer-tipoImoveis:after {
                color: #833739;
            }

            body {
                background: #fbfbfb;
            }

            .navbar-nav{
                margin-left: 40px;
            }
            
        </style>
    </div>

    <div class="menu-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.aspx">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class='nav-item'><a class='nav-link' target='_self' href=''>A
                            Empresa</a>
                    <li class='nav-item'><a class='nav-link' target='_self' href=''>Nossos
                            Serviços</a>

                    <li class='nav-item'><a class='nav-link' target='_self' href=''>Parceiros</a>
                    <li class='nav-item'><a class='nav-link' target='_self' href=''>Contato</a>

                </ul>
            </div>
            <!-- Collapsible content -->
        </nav>
    </div>


    <script>
        function buscarCategoriasSelecionadas() {
            var listaCategoriasImoveis = [];
            $(".filtro-title-categoria .filtro-tipoImovel.tag").each(function() {
                if ($(this).hasClass('ativo'))
                    listaCategoriasImoveis.push($(this).attr("catim-id"));
            });
            return listaCategoriasImoveis;
        }

        function pesquisarImoveisDetalhes() {
            var quartosMax = $(".row-filtro-tipoImovel #rangeQuartosMax").val() + "";
            var quartosMin = $(".row-filtro-tipoImovel #rangeQuartosMin").val() + "";
            var banheirosMax = $(".row-filtro-tipoImovel #rangeBanheirosMax").val() + "";
            var banheirosMin = $(".row-filtro-tipoImovel #rangeBanheirosMin").val() + "";
            var garagemMax = $(".row-filtro-tipoImovel #rangeGaragemMax").val() + "";
            var garagemMin = $(".row-filtro-tipoImovel #rangeGaragemMin").val() + "";
            var tamanhoMax = $(".row-filtro-tipoImovel #rangeTamanhoMax").val() + "";
            var tamanhoMin = $(".row-filtro-tipoImovel #rangeTamanhoMin").val() + "";
            var listaFiltroCategorias = buscarCategoriasSelecionadas();

            var url = "";


            if (quartosMax && quartosMax != '' && quartosMin && quartosMin != '' && !$("#QuartosSwitch").hasClass("disabled")) {
                url += "&qx=" + quartosMax + "&qm=" + quartosMin;
            }
            if (banheirosMax && banheirosMax != '' && banheirosMin && banheirosMin != '' && !$("#BanheirosSwitch").hasClass("disabled")) {
                url += "&bx=" + banheirosMax + "&bm=" + banheirosMin;
            }
            if (garagemMax && garagemMax != '' && garagemMin && garagemMin != '' && !$("#GaragemSwitch").hasClass("disabled")) {
                url += "&gx=" + garagemMax + "&gm=" + garagemMin;
            }
            if (tamanhoMax && tamanhoMax != '' && tamanhoMin && tamanhoMin != '' && !$("#TamanhoSwitch").hasClass("disabled")) {
                url += "&tx=" + tamanhoMax + "&tm=" + tamanhoMin;
            }

            if (listaFiltroCategorias.length > 0) {
                url += "&cn=";
                for (var i = 0; i < listaFiltroCategorias.length; i++) {
                    if (i > 0) {
                        url += "-";
                    }
                    url += listaFiltroCategorias[i];
                }
            }

            return url;
        }
    </script>
    <script type="text/javascript">
        function atualizarValor(obj, operation) {
            //multipleRange
            if (operation) {
                atualizarValorMin(obj);
            } else {
                atualizarValorMax(obj);
            }
        }

        function atualizarValorMin(obj) {
            var value = obj.children(".custom-range.min").val();
            obj.children(".custom-range.max").attr("min", value);
            atualizarRestante(obj);

        }

        function atualizarValorMax(obj) {
            var value = obj.children(".custom-range.max").val();
            obj.children(".custom-range.min").attr("max", value);
            atualizarRestante(obj);
        }

        function atualizarRestante(obj) {
            var valueMin = obj.children(".custom-range.min").val();
            var valueMax = obj.children(".custom-range.max").val();
            if (valueMin != valueMax) {
                obj.children(".range-val").children(".range-val-min").text(valueMin);
                obj.children(".range-val").children(".range-val-max").text(valueMax);
                obj.children(".range-val").children(".range-val-junction").html("&nbsp;à&nbsp;");
            } else {
                obj.children(".range-val").children(".range-val-junction").html(valueMax);
                obj.children(".range-val").children(".range-val-min").html("");
                obj.children(".range-val").children(".range-val-max").html("");
            }
        }

        $(document).ready(function() {
            $(".range-val .range-val-junction").text("Todos");

            $(".custom-range").change(function() {
                atualizarValor($(this).parent(), $(this).hasClass("min"));
            })
            $(".custom-range").mousemove(function() {
                atualizarValor($(this).parent(), $(this).hasClass("min"));
            })
            $(".switch").mouseup(function(event) {
                $(this).parent().parent().next().children(".multipleRange").children(".range-val").children(".range-val-junction").text("Todos");
                $(this).parent().parent().next().children(".multipleRange").children(".range-val").children(".range-val-min").html("");
                $(this).parent().parent().next().children(".multipleRange").children(".range-val").children(".range-val-max").html("");
                $(this).parent().parent().next().children(".multipleRange").toggleClass('disabled');
            });

            $("#selNegociacao").change(function() {
                if ($("#selNegociacao").val() == 0) {
                    $(".box-unidade-venda").addClass("hidden");
                    $(".box-unidade-locacao").addClass("hidden");
                    $(".box-unidade-permuta").addClass("hidden");
                } else if ($("#selNegociacao").val() == 1) {
                    $(".box-unidade-venda").removeClass("hidden");
                    $(".box-unidade-locacao").addClass("hidden");
                    $(".box-unidade-permuta").addClass("hidden");
                } else if ($("#selNegociacao").val() == 2) {
                    $(".box-unidade-venda").addClass("hidden");
                    $(".box-unidade-locacao").removeClass("hidden");
                    $(".box-unidade-permuta").addClass("hidden");
                } else if ($("#selNegociacao").val() == 3) {
                    $(".box-unidade-locacao").addClass("hidden");
                    $(".box-unidade-venda").addClass("hidden");
                    $(".box-unidade-permuta").removeClass("hidden");
                }
            });
        });
    </script>
    <script>
        var listaEstados, listaCidades, listaBairros;

        $(document).ready(function() {
            listaEstados = $.parseJSON($('.hfEstados').val());
            listaCidades = $.parseJSON($('.hfCidades').val());
            listaBairros = $.parseJSON($('.hfBairros').val());

            for (index = 0; index < listaEstados.length; index++) {
                var estado = listaEstados[index];
                var option = new Option(estado.nome, estado.id);
                $('#ddlEstado').append(option);
            }

            $('#ddlEstado').change(function() {
                pesquisarCidades();
            });
            if ($('.hfEstadoSelecionado').val() != '')
                $('#ddlEstado').val($('.hfEstadoSelecionado').val());
            pesquisarCidades();

            $('#ddlCidade').change(function() {
                pesquisarBairros();
            });
            if ($('.hfCidadeSelecionada').val() != '')
                $('#ddlCidade').val($('.hfCidadeSelecionada').val());
            pesquisarBairros();

            if ($('.hfBairroSelecionado').val() != '')
                $('#ddlBairro').val($('.hfBairroSelecionado').val());
            if ($('.hfLocacaoSelecionada').val() != '')
                $('#ddlLocacao').val($('.hfLocacaoSelecionada').val());
            if ($('.hfTipoImovelSelecionado').val() != '')
                $('#ddlTipoImovel').val($('.hfTipoImovelSelecionado').val());
            if ($('.hfRangeSelecionado').val() != '')
                $('#ddlValor').val($('.hfRangeSelecionado').val());

        });

        function pesquisarCidades() {
            $('#ddlCidade').find('option').remove();
            var option = new Option('-- Todas --', '0');
            $('#ddlCidade').append(option);
            var estado = $('#ddlEstado').val();
            if (estado != '' && estado != '0') {
                for (index = 0; index < listaCidades.length; index++) {
                    var cidade = listaCidades[index];
                    if (cidade.id_estado == estado) {
                        option = new Option(cidade.nome, cidade.id);
                        $('#ddlCidade').append(option);
                    }
                }
            }
            pesquisarBairros();
        }

        function pesquisarBairros() {
            $('#ddlBairro').find('option').remove();
            var option = new Option('-- Todos --', '0');
            $('#ddlBairro').append(option);
            var cidade = $('#ddlCidade').val();
            if (cidade != '' && cidade != '0') {
                for (index = 0; index < listaBairros.length; index++) {
                    var bairro = listaBairros[index];
                    if (bairro.id_cidade == cidade) {
                        option = new Option(bairro.nome, bairro.id);
                        $('#ddlBairro').append(option);
                    }
                }
            }
        }

        function pesquisarImoveis() {
            var estado = $('#ddlEstado').val();
            var cidade = $('#ddlCidade').val();
            var bairro = $('#ddlBairro').val();
            var negociacao = $('#ddlLocacao').val();
            var tipoImovel = $('#ddlTipoImovel').val();
            var valor = $('#ddlValor').val();
            var faseImovel = $('#ddlFaseImovel').val();

            var url = "Publicacoes.aspx?ei=true&eix=3";
            if (estado && estado != '' && estado != '0')
                url += ("&est=" + estado);
            if (cidade && cidade != '' && cidade != '0')
                url += ("&cid=" + cidade);
            if (bairro && bairro != '' && bairro != '0')
                url += ("&bairro=" + bairro);
            if (negociacao && negociacao != '' && negociacao != '0')
                url += ("&neg=" + negociacao);
            if (tipoImovel && tipoImovel != '' && tipoImovel != '0')
                url += ("&ti=" + tipoImovel);
            if (valor && valor != '' && valor != '0')
                url += ("&vl=" + valor);
            if (faseImovel && faseImovel != '')
                url += ("&fi=" + faseImovel);

            window.location.href = url + pesquisarImoveisDetalhes();
        }
    </script>

    <div class="script-extra">
        <script src="https://www.c2tiapps.com/sites/028/Scripts/ScriptMod.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script src="https://www.c2tiapps.com/Utilitarios/lightbox/js/lightbox.min.js"></script>
        <script src="https://www.c2tiapps.com/Scripts/mask.js"></script>
        <script src="https://www.c2tiapps.com/Scripts/jquery.mask.js"></script>
        <script src="https://www.c2tiapps.com/Scripts/Funcoes-2.js"></script>
        <script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/translate_static/js/element/main_pt-PT.js"></script>
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6426d93abba70e0012f39456&product=inline-share-buttons&source=platform" async="async"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>




    </div>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6426d93abba70e0012f39456&product=inline-share-buttons&source=platform" async="async"></script>
</body>

</html>