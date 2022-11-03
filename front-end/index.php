<?php
    include_once("../connection/conn.php");
    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id = '$id'";

    $result = $conn->query($sql);

    if(mysqli_num_rows($result)>= 1)
    {    
        $row = $result ->fetch_row();
        $name = $row[1];
        $phone = $row[2];
        $email = $row[3];
        $profile = $row[5];
        $whats = $row[6];
        $telegram = $row[7];
        $royaq = $row[8];
        $binance = $row[9];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Renda infinita</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="icon" href='./img/icon/logorenda.svg'>
        <link rel="stylesheet" href="css/responsivo300.css">
        <link rel="stylesheet" href="css/responsivo400.css">
        <link rel="stylesheet" href="css/responsivo600.css">
        <link rel="stylesheet" href="./css/responsivo820.css">
        <link rel="stylesheet" href="css/responsivo900.css">
        <link rel="stylesheet" href="css/responsivo1200.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
    </head>
</head>

<body>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Emerson.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Ezequias.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Felipe.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Oliver.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Jonatas.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Leandro.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Reinaldo.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="div_review_video fade">
        <div class="div_center_video">
            <div class="div_button_story">
                <button class="close_video"><img src="./img/icon/x.svg" alt=""></button>
            </div>
            <video src="/videos/Tamara.mp4" class="video_review" controls></video>
        </div>
    </div>
    <div class="general">
        <div class="mynavbar">
            <div class="nav-items">
                <img src="./img/icon/rendainfinitanovalogo.svg" id="logo">
                <nav id="nav">
                    <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu"
                        aria-expanded="false">
                        <span id="hamburger"></span>
                    </button>
                    <ul id="menu" role="menu">
                        <li class="li_nav"><a href="#home" class="a_nav">HOME</a></li>
                        <li class="li_nav"><a href="#robo" class="a_nav">VANTAGENS</a></li>
                        <li class="li_nav"><a href="#depoimentos" class="a_nav">DEPOIMENTOS</a></li>
                        <li class="li_nav"><a href="#faq" class="a_nav">FAQ</a></li>
                        <li class="li_nav"><a href="#tutoriais" class="a_nav">TUTORIAIS</a></li>
                        <li class="li_nav"><a href="#contatos" class="a_nav">CONTATOS</a></li>
                    </ul>
            </div>
            </nav>
        </div>
    </div>
    <div class="home" id="home">
        <div class="home_itens">
            <div class="home-text">
                <div class="div-titles">
                    <h1 id="button_title" class="gradient_font">Ganhe dinheiro <h2 id="h2-phrase">todos os dias de forma
                            automática!
                        </h2>
                    </h1>
                    <!-- <h2 id="h2-phrase">todos os dias de forma automática!</h2> -->
                </div>
                <div id="text">
                    <p class="text_app" id="second_title">
                        Descubra agora o app que mais de 4 milhões de pessoas estão
                        ultilizando para ganhar dinheiro de forma automática
                        e segura no mercado financeiro.

                    </p>
                </div>
                <div class="assistant_iframe">
                    <iframe id="iframe_mobile" width="900" height="500" src="https://www.youtube.com/embed/vPqYj9PPfew"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="div-buttons">
                    <button class="button-gradient"><a href="<?=$royaq?>" target="_blank">BAIXAR
                            APP</a></button>
                    <button class="button-transparent"><a>SAIBA MAIS</a></button>
                </div>
                <div class="saiba_text">
                    <p id="paragraph">Saiba o que os usuários estão falando sobre o app !</p>
                </div>
                <div class="saiba_text gradient_font ">
                    <p id="paragraph_second">Quais benefícios você vai obter ?</p>
                </div>

            </div>
            <iframe id="iframe_desktop" width="900" height="500" src="https://www.youtube.com/embed/vPqYj9PPfew"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
    <div class="robo" id="robo">
        <div class="apresentation">
            <div class="apr-column1 ">
                <div class="apr-line apr_mobile_">
                    <img style="max-width: 38px; height:86px; margin-right: 13px;"
                        src="./img/icon/cellphone_icon_rend.svg" id="phone_mobile">
                    <div class="apresentation-text">
                        <h2 id='mobile_column_1'>
                            Mobilidade e praticidade
                        </h2>
                        <p class="p-celular_r">
                            É necessário apenas um celular e um sinal de internet.
                        </p>
                    </div>
                </div>
                <div class="apr-line apr_mobile_two">
                    <img style="max-width: 50px;" src="./img/icon/trader_icon_rend.svg">
                    <div class="apresentation-text">
                        <h2>
                            Não é preciso saber operar
                        </h2>
                        <p class="p-celular_r">
                            Só é preciso conectar a ferramenta à sua exchange e escolher sua estratégia.
                        </p>
                    </div>
                </div>
                <div class="apr-line apr_mobile_">
                    <img style="max-width: 49px;  height:86px; margin-right: 13px;"
                        src="./img/icon/money_sleep_icon_rend.svg" id="money_mobile">
                    <div class="apresentation-text">
                        <h2 id='mobile_column_1'>
                            Ganhe dinheiro dormindo
                        </h2>
                        <p class="p-celular_r">
                            O algoritmo trabalha 24 horas por dia, enquanto você dorme ele segue operando!
                        </p>
                    </div>
                </div>

                <div class="apr-line apr_mobile_">
                    <img style="max-width: 50px; height:86px; margin-right: 13px;" src="./img/icon/cupom_icon_rend.svg">
                    <div class="apresentation-text">
                        <h2 id='mobile_column_1'>
                            Indique e ganhe !
                        </h2>
                        <p class="p-celular_r">
                            Ganhe de US$30 à US$70 por cada amigo que você indicar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="apr-column2 ">
                <img style="max-width: 430px;" src="./img/icon/Linha completa.svg" id="linha_completa_desktop">
                <img style="max-width: 430px;" src="./img/icon/linha_completa_mobile.svg" id="linha_completa_mobile">
            </div>

            <div class="apr-column3">
                <div class="apr-line apr_mobile_one">
                    <img style="max-width: 50px;  height:86px; margin-right: 8px;"
                        src="./img/icon/trader_icon_rend.svg">
                    <div class="apresentation-text_l">

                        <h2 id='mobile_column_1_l'>
                            Não é preciso saber operar!
                        </h2>
                        <p class="p-celular_l">
                            Só é preciso conectar ferramenta à sua exechange e escolher a sua estratégia!
                        </p>

                    </div>
                </div>
                <div class="apr-line apr_mobile_one">
                    <img style="max-width: 50px;  height:86px; margin-right: 8px;"
                        src="./img/icon/seguro_icon_rend.svg">
                    <div class="apresentation-text_l">
                        <h2 id='mobile_column_1_l'>
                            Segurança
                        </h2>
                        <p class="p-celular_l">
                            O algoritmo trabalha dentro da sua exechange, nao é necessário enviar dinheiro para
                            terceiros.
                        </p>

                    </div>
                </div>
                <div class="apr-line apr_mobile_one">
                    <img style="max-width: 50px;  height:86px; margin-right: 8px;"
                        src="./img/icon/rocket_icon_rend.svg">
                    <div class="apresentation-text_l">
                        <h2 id='mobile_column_1_l'>
                            Empreenda com a ferramenta
                        </h2>
                        <p class="p-celular_l">
                            Você pode contruir um negócio e ganhar de US$1000 a US$10.000 todos os meses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="depoimentos" id="depoimentos">
        <h2 class="gradient_font gradient_mobile">Depoimentos</h2>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-desktop active">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Emerson.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Emerson"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Emerson</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Ezequias.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Ezequias"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Ezequias</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Felipe.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Felipe"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Felipe</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/gabriel.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="gabriel"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Gabriel</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>
                <div class="carousel-desktop">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Johnatas.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Johnatas"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Johnatas</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Leandro.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Leandro"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Leandro</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Reinaldo.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Reinaldo"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Reinaldo</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Tamara.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Tamara"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Tamara</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>
                <!-- Mobile VVVVVVVVVVVVVVVVVVVVVVVVVVVV-->
                <div class="carousel-mobile active">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Emerson.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Emerson"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Emerson</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Ezequias.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Ezequias"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Ezequias</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>

                <div class="carousel-mobile">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Felipe.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Felipe"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Felipe</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/gabriel.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="gabriel"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Gabriel</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>

                <div class="carousel-mobile">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Johnatas.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Johnatas"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Johnatas</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Leandro.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Leandro"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Leandro</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>

                <div class="carousel-mobile">
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Reinaldo.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Reinaldo"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Reinaldo</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                    <div class="flex_column">
                        <div class="card">
                            <img class="img_depoimentos" src="img/Tamara.jpeg" alt="">
                            <div class="card-content">
                                <div class="button_border">
                                    <button class="button_story" id="Tamara"></button>
                                </div>
                                <span style="margin-bottom: 15px;">Tamara</span>
                            </div>
                        </div>
                        <img class="stars"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/5_stars.svg/2560px-5_stars.svg.png"
                            alt="">
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="perguntas  questions_mobile" id="faq">
        <h2 class="gradient_font gradient_mobile">Dúvidas frequentes</h2>
        <div class="perguntas_content content_questions">
            <div class="pergunta">
                <img style="max-width: 38px; height:86px;" src="./img/icon/moneydown.svg" class="icon_pergunta">
                <div class="pergunta-text">
                    <h2 class="h-2_desktop h-2_mobile">
                        Qual o risco de perder meu dinheiro?
                    </h2>
                    <p class="resposta_pergunta">
                        Não existe risco de perder o seu dinheiro pois fica dentro da sua corretora (Binance) o único
                        risco é a volatilidade do mercado.
                    </p>
                </div>
            </div>
            <div class="pergunta">
                <img style="max-width: 38px; height:86px;" src="./img/icon/robo.svg" class="icon_pergunta">
                <div class="pergunta-text">
                    <h2 class="h-2_mobile" id="mobile_sub">
                        Não tenho conhecimento sobre este mercado.Funciona pra mim?
                    </h2>
                    <p class="resposta_pergunta">
                        Não é necessario nenhum conhecimento pois a ferramenta opera de forma automática.
                    </p>
                </div>
            </div>
            <div class="pergunta">
                <img style="max-width: 38px; height:86px;" src="./img/icon/calendario.svg" class="icon_pergunta">
                <div class="pergunta-text">
                    <h2 class="h-2_mobile">
                        Preciso pagar alguma mensalidade?
                    </h2>
                    <p class="resposta_pergunta">
                        Não. Você tem acesso a ferramenta durante todo o ano.Não existe mensalidade
                    </p>
                </div>
            </div>
            <div class="pergunta">
                <img style="max-width: 38px; height:86px;" src="./img/icon/atendente.svg" class="icon_pergunta">
                <div class="pergunta-text">
                    <h2 class="h-2_mobile">
                        Onde tenho suporte caso inicie com a ferramenta?
                    </h2>
                    <p class="resposta_pergunta">
                        Temos um grupo de suporte no <b>Telegram</b> 24 horas por dia, e você também terá acesso ao
                        <b>WhatsApp</b> do seu mentor caso seja necessário.
                    </p>
                </div>
            </div>
            <div class="pergunta">
                <img style="max-width: 38px; height:86px;" src="./img/icon/dolar.svg" class="icon_pergunta">
                <div class="pergunta-text">
                    <h2 class="h-2_mobile">
                        Com quanto posso começar ?
                    </h2>
                    <p class="resposta_pergunta">
                        Você pode come;car com apenas US$50 na sua corretora, porém quanto mais capital melhores os
                        ganhos com a ferramenta.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="cadastro_binance" id="tutoriais">
        <h2 class="gradient_font gradient_mobile">
            Como me cadastrar na Binance?
        </h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <iframe width="900" height="500" src="https://www.youtube.com/embed/yA1QFHpZKzs"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <iframe width="900" height="500" src="https://www.youtube.com/embed/gLwtXtvHB84"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="div_btn_binance">
            <button class="button-gradient"><a href="<?=$binance?>">CADASTRAR NA BINANCE</a></button>
            <button class="button-transparent"><a href="<?=$royaq?>">DOWNLOAD DO ROBÔ</a></button>
        </div>


    </div>

    <div class="mentor" id="contatos">
        <div class="button_border borda_mentor">
            <img src="<?=$profile?>" alt="" class="foto_mentor">
        </div>
        <div>
            <h2><b><?=$name?></b></h2>
        </div>
        <div class="button_mentor">
            <button class="button-gradient button_telegram">
                <img src="https://cdn.worldvectorlogo.com/logos/telegram-1.svg" alt="" style="max-width: 50px;"> <a
                    href="<?=$telegram?>" target="_blank">ENTRE PARA O GRUPO DO TELEGRAM E CONHEÇA A
                    MINHA ESTRATÉGIA!</a>
            </button>
            <button class="button-gradient button_telegram button_wpp"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png"
                    alt="" style="max-width: 50px;">
                <div class="mentor_mobile" style="width: 100%"><a
                        href="<?=$whats?>"
                        target="_blank"> CONHEÇA SEU MENTOR</a></div>
            </button>
        </div>
    </div>
    <script src="scripts.js" type="text/javascript"></script>
</body>

</html>